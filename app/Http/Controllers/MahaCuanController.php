<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankAccount;
use App\Models\Bonus;
use App\Models\Deposit;
use App\Models\Member;
use App\Models\User;
use App\Models\WithDraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class MahaCuanController extends Controller
{
    public function index()
    {
        $auth = auth()->user();
        if ($auth) {
            return $this->index_doLogin();
        }

        return view('mahacuan.Login.index');
    }


    public function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);
        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true,
                    "redirect" => url("Home")
                ]);
            } else {

                return response()->json([
                    "status" => false,
                    "errors" => ["Invalid credentials"]


                ]);
            }
        }
    }

    public function doLoginwithUsername(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            Alert::error('Error Title', 'Error Message');
            return redirect()->back();
            // return response()->json([
            //         "status" => false,
            //         "errors" => $validator->errors()
            //     ]);
        } else {
            if (Auth::attempt($request->only(["username", "password"]))) {
                Alert::success('Success', 'Berhasil Login !!!');
                return redirect('Home');
                    // return response()->json([
                    //     "status" => true,
                    //     "redirect" => url("Home")
                    // ]);
            } else {
                Alert::error('Error', 'Invalid credentials');
                return redirect()->back();
                // return response()->json([
                //     "status" => false,
                //     "errors" => ["Invalid credentials"]
                // ]);
            }
        }
    }

    public function register()
    {
        $bank = Bank::all();
        $bankGroup = $bank->groupBy('bank_type');
        return view('mahacuan.Login.registration', compact('bank','bankGroup'));
    }

    public function checkUsername(Request $request)
    {
        $usernameCheck = User::where('username', $request->username)->get();
        if($usernameCheck){
            return response()->json([
                "status" => false,
                "errors" => ["Username already exist"]
            ]);
        }
    }

    public function register_save(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'username' => 'required|unique:roles,name',
                'password' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'bank' => 'required',
                'rek_name' => 'required',
                'accNumber' => 'required',
            ]);

            $UserSave = User::create([
                'username' => $request->input('username'),
                'name' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            $UserSave->assignRole('member');
            $lastInsertid_User = $UserSave->id;

            $MemberSave = Member::create([
                'username_member'   => $request->input('username'),
                'full_name_member'  => $request->input('username'),
                'email_member'      => $request->input('email'),
                'tlp_member'        => $request->input('phone'),
                'website_ref'       => 'Warmindo88',
                'saldo_deposit'     => 0,
                'remarks_member'    => '',
                'user_id'           => $lastInsertid_User,
            ]);
            $lastInsertid_Member = $MemberSave->id;

            $BankAccountSave = BankAccount::create([
                'nama_rekening'     => $request->input('rek_name'),
                'no_rekening'       => $request->input('accNumber'),
                'bank_id'           => $request->input('bank'),
                'member_id'         => $lastInsertid_Member,
            ]);
            $lastInsertid_BankAccount = $BankAccountSave->id;


            DB::commit();
            return redirect('apps/register')->with(['success' => 'Data "' . $request->input('username') . '" berhasil di tambah ! Silahkan Login ']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function lupa_sandi()
    {
        return view('mahacuan.Login.forgot_password');
    }

    public function lupa_sandi_save(Request $request)
    {
        try {
            // Change Password User
            // $user = User::find($id);
            // $user->update([
            //     'password' => Hash::make($request->password),
            // ]);

            // DB::commit();
            // return redirect('Users')->with(['success' => 'Password Updated Successfully !']);
            Alert::info('Info Title', 'Maaf, sedang Maintenance');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function index_doLogin()
    {
        $email_member = Auth::user()->email;
        // return $email_member;
        $userid = auth()->user()->id;
        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();
        $saldo_deposit = DB::table('members')->select('saldo_deposit')->where('user_id', $userid)->first();

        return view('mahacuan.DoLogin.index', compact('data'));
        // return view('mahacuan.DoLogin.layout.main_dologin', compact('data'));
    }

    public function tambah_dana()
    {
        $userid = auth()->user()->id;

        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();

        $bank = Bank::all();
        $bankGroup = $bank->groupBy('bank_type');



        $bonus = Bonus::all();

        $bankUtama = DB::table('members')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->select('bank_accounts.id','bank_accounts.no_rekening','bank_accounts.nama_rekening','banks.bank_name')
            ->where('user_id', $userid)
            ->orderByDesc('bank_accounts.updated_at')
            ->limit(1)
            ->get();

        $bankOwner = DB::table('bank_account_pemiliks')
            ->join('banks', 'bank_account_pemiliks.bank_id', '=', 'banks.id')
            ->select('bank_account_pemiliks.*','banks.bank_name','banks.bank_type')
            // ->where('bank_account_pemiliks.bank_id', $userid)
            ->get();

        return view('mahacuan.DoLogin.tambah_dana.tambah_dana', compact('data','bonus','bankOwner','bank','bankGroup','bankUtama'));
    }

    public function json_tambahDana(Request $request)
    {
        $userid = auth()->user()->id;
        $member_id = DB::table('members')->where('user_id', $userid)->first();

        // $date = Carbon::today()->subDays(30);
        $query = DB::table('deposits')
            // ->select('deposits.*')
            ->where('user_id', $userid)
            // ->where('created_at','>=',$date)
            ->orderByDesc('deposits.created_at')
            ->get();

            // if ($request->filled('from_date') && $request->filled('to_date')) {
            //     $query = $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
            // }

        return DataTables::of($query)
            ->addColumn('tanggal', function ($data) {
                return Carbon::parse($data->created_at)->format('d M Y H:i:s');
            })
            ->addColumn('nominal_deposit', function ($data) {
                return rupiah($data->nominal_deposit);
            })
            ->addColumn('status_deposit', function ($data) {
                return $data->status_deposit;
            })
            ->rawColumns(['nominal_deposit'])
            ->make(true);
    }

    public function deposit_save(Request $request)
    {
        // return $request->file('img_bukti_payment')->store('WARMINDO88/Bukti-Pembayaran');

        $userid = auth()->user()->id;
        $member_id = DB::table('members')->where('user_id', $userid)->first();

        DB::beginTransaction();
        try {
            $this->validate($request, [
                'bankMember' => 'required',
                'bankOwner' => '',
                'bonus_id' => '',
                'amount' => '',
                'notes' => '',
                // 'img_bukti_payment' => 'required|image|file|max:1024',
                'img_bukti_payment' => 'required',
            ]);

            $amount = $request->input('amount') * 1000;

            $saldo_deposit = Deposit::where('member_id', $member_id->id)->sum('nominal_deposit');

            $member = Member::find($member_id->id);
            // $member->update([
            //     'saldo_deposit' => $saldo_deposit + $amount,
            // ]);

            $DepositSave = Deposit::create([
                'berita_deposit' => '-',
                'nominal_deposit' => $amount,
                'saldo_deposit' => $saldo_deposit + $amount,
                'status_deposit' => 'PENDING',
                'img_bukti_pembayaran' => $request->file('img_bukti_payment')->store('WARMINDO88/Bukti-Pembayaran'),
                'remarks_deposit' => $request->input('notes'),
                'bank_account_id' => $request->input('bankMember'),
                'bank_account_pemilik_id' => $request->input('bankOwner'),
                'member_id' => $member_id->id,
                'user_id' => $userid,
                'bonus_id' => $request->input('bonus_id'),
            ]);
            $lastInsertid_Deposit = $DepositSave->id;


            DB::commit();
            Alert::success('Success', 'Anda berhasil melakukan deposit sebesar '.rupiah($amount).' !');
            return redirect('apps/tambah_dana')->with(['success' => 'Anda berhasil melakukan deposit sebesar '.rupiah($amount).' !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
            // return redirect('apps/tambah_dana')->with(['error' => 'Data Deposit gagal di tambahkan !']);
        }
    }

    public function tarik_dana(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('with_draws');

            // Tambahkan filter sesuai kebutuhan
            // if ($request->has('name')) {
            //     $query->where('products.name', 'like', '%' . $request->name . '%');
            // }

            // if ($request->has('category')) {
            //     $query->where('categories.name', $request->category);
            // }

            // Tambahkan pengurutan descending berdasarkan kolom tertentu
            $query->orderByDesc('with_draws.updated_at');

            $data = $query->get();

            return DataTables::of($data)
                ->addColumn('nominal_withdraw', function ($row) {
                    return rupiah($row->nominal_withdraw);
                })
                ->addColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('d M Y H:i:s');
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        $userid = auth()->user()->id;

        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();

        $bank = Bank::all();
        $bankGroup = $bank->groupBy('bank_type');



        $bonus = Bonus::all();

        $bankUtama = DB::table('members')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->select('bank_accounts.id','bank_accounts.no_rekening','bank_accounts.nama_rekening','banks.bank_name')
            ->where('user_id', $userid)
            ->orderByDesc('bank_accounts.updated_at')
            ->limit(1)
            ->get();

        $bankOwner = DB::table('bank_account_pemiliks')
            ->join('banks', 'bank_account_pemiliks.bank_id', '=', 'banks.id')
            ->select('bank_account_pemiliks.*','banks.bank_name','banks.bank_type')
            // ->where('bank_account_pemiliks.bank_id', $userid)
            ->get();
        return view('mahacuan.DoLogin.tarik_dana.tarik_dana', compact('data','bonus','bankOwner','bank','bankGroup','bankUtama'));
    }

    public function tarik_dana_save(Request $request)
    {

        $userid = auth()->user()->id;
        $member = DB::table('members')->where('user_id', $userid)->first();

        DB::beginTransaction();
        try {
            $this->validate($request, [
                'amount_withdraw' => 'required',
                'bankDestination' => 'required',
            ]);

            $amount = $request->input('amount_withdraw') * 1000;

            if($amount > $member->saldo_deposit)
            {
                Alert::error('Error', 'Withdraw tidak boleh melebihi dari sisa saldo anda !!');
                return redirect('apps/tarik_dana')->with(['success' => 'Withdraw tidak boleh melebihi dari sisa saldo anda !!']);
            }


            // $memberUpdate = Member::find($member->id);
            // $memberUpdate->update([
            //     'saldo_deposit' => $member->saldo_deposit - $amount,
            // ]);

            $WithDrawSave = WithDraw::create([
                'berita_withdraw' => '-',
                'nominal_withdraw' => $amount,
                'status_withdraw' => 'PENDING',
                'remarks_withdraw' => '',
                'updateBy' => '',
                'user_id' => $userid,
                'member_id' => $member->id,
                'bank_account_id' => $request->bankDestination,
            ]);
            $lastInsertid_WithDraw = $WithDrawSave->id;


            DB::commit();
            Alert::success('Success', 'Penarikan Saldo anda akan di proses oleh admin !');
            return redirect('apps/tarik_dana')->with(['success' => 'Penarikan Saldo anda akan di proses oleh admin !']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
            // return redirect('apps/tambah_dana')->with(['error' => 'Data Deposit gagal di tambahkan !']);
        }
    }

    public function bonus()
    {
        $userid = auth()->user()->id;
        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();
        return view('mahacuan.DoLogin.bonus.bonus', compact('data'));
    }

    public function memo()
    {
        $userid = auth()->user()->id;
        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();
        return view('mahacuan.DoLogin.memo.memo', compact('data'));
    }

    public function profile()
    {
        $userid = auth()->user()->id;
        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();
        return view('mahacuan.DoLogin.profile.profile', compact('data'));
    }

    public function feedback()
    {
        $userid = auth()->user()->id;
        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();
        return view('mahacuan.DoLogin.feedback.feedback', compact('data'));
    }

    public function help()
    {
        $userid = auth()->user()->id;
        $data = DB::table('users')
            ->join('members', 'members.user_id', '=', 'users.id')
            ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
            ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
            ->where('users.id', $userid)
            ->get();
        return view('mahacuan.DoLogin.help.help', compact('data'));
    }

    public function promo()
    {
        // $userid = auth()->user()->id;
        // $data = DB::table('users')
        //     ->join('members', 'members.user_id', '=', 'users.id')
        //     ->join('bank_accounts', 'members.id', '=', 'bank_accounts.member_id')
        //     ->join('banks', 'bank_accounts.bank_id', '=', 'banks.id')
        //     ->where('users.id', $userid)
        //     ->get();
        return view('mahacuan.Login.promosi');
    }

    public function logout_mahacuan(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }






}
