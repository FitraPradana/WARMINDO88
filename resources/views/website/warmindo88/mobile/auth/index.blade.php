@extends('website.warmindo88.mobile.auth.layout.main')

@section('title', 'Index')

@section('content_mobile')

<main id="main-route">
    <div class="main-content home">
        <div class="mobile__button-form">
            <button class="btn-login btn-custom" type="button" data-toggle="modal"
                data-target="#loginModal">Masuk</button>
            <button class="btn-register btn-custom"
                onclick="window.location.href = '{{ route('apps_m.daftar') }}'">Daftar</button>
        </div>
        <section class="home__slider">
            <div class="swiper-container main-slider swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper" id="swiper-wrapper-44b6e133725f0452" aria-live="off"
                    style="transition-duration: 0ms; transform: translate3d(-2050px, 0px, 0px);">
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="17" role="group"
                        aria-label="1 / 20" style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-hc-game-event-feb-5-25-65ba260091463.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="2 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00779/banner/id/mobile-qris-6547bcb98a4d2.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="3 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00779/banner/id/mobile-ndp-200-654b22a50c3d9.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="4 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00779/banner/id/mobile-garansi-kekalahan-100-650db3ad67a85.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" role="group"
                        aria-label="5 / 20" style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00779/banner/id/mobile-bonus-deposit-harian-10-650eb90768dd2.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4" role="group"
                        aria-label="6 / 20" style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00779/banner/id/mobile-cashback-mingguan-5-650eb8e961d2c.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="5" role="group"
                        aria-label="7 / 20" style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00779/banner/id/mobile-lucky-spin-anti-zonk-650eb6304fd17.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="8 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-pgsoft-8-27-feb-2024-65c1ff26d8bf5.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="7" role="group" aria-label="9 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-ag-baccarat-jackpot-64abab43b4b96.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="8" role="group" aria-label="10 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-event-pragmatic-daily-red-pockets-start-from-1-23-february-2024-65b34e1c60c94.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="9" role="group" aria-label="11 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-event-no-limit-city-cash-x-tournament-from-01-28-february-2024-for-idr-thb-vnd-php-usd-market-65b87d8015c9b.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="10" role="group" aria-label="12 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-spade-play-win-27-nov-26-feb-2024-65572219a29b3.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="11" role="group" aria-label="13 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-spade-event-promotion-fishing-frenzy-tournament-start-from-29-jan-22-apr-2024-65a8e27d26abc.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="12" role="group" aria-label="14 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-pragmatic-mega-gacor-daily-08-jan-19-feb-2024-6593c8b0acb17.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="13" role="group" aria-label="15 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-advantplay-event-promotion-cash-drop-start-from-01-25-february-2024-for-idr-thb-vnd-usd-php-brl-market-65b8bd38a89a7.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="14" role="group" aria-label="16 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-evolution-bet-win-baccarat-02-jan-25-mar-2024-65934fb9d70e9.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="15" role="group" aria-label="17 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-fastspin-grand-tournament-event-start-15-jan-08-april-2024-6593da6c33ec5.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="16" role="group" aria-label="18 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-pragmatic-new-game-pompeii-65b0accbc9df6.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="17" role="group" aria-label="19 / 20"
                        style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00000/banner/id/mobile-hc-game-event-feb-5-25-65ba260091463.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                        aria-label="20 / 20" style="width: 410px;">
                        <a href="#">
                            <img loading="lazy"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/00779/banner/id/mobile-qris-6547bcb98a4d2.webp"
                                data-alt="" width="423" height="94">
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-bullets-dynamic"
                    style="width: 90px;"><span class="swiper-pagination-bullet" style="left: -36px;"></span><span
                        class="swiper-pagination-bullet" style="left: -36px;"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active-prev-prev"
                        style="left: -36px;"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active-prev"
                        style="left: -36px;"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main"
                        style="left: -36px;"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active-next"
                        style="left: -36px;"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active-next-next"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span><span class="swiper-pagination-bullet"
                        style="left: -36px;"></span></div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                    aria-controls="swiper-wrapper-44b6e133725f0452"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                    aria-controls="swiper-wrapper-44b6e133725f0452"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </section>
        <section class="mobile__category">
            <div class="container">
                <div class="mobile-category-container">
                    <div
                        class="swiper-container mobile-category-swiper swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" id="swiper-wrapper-defa2cd1099122fc10" aria-live="polite"
                            style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 7"
                                style="width: 88px; margin-right: 10px;">
                                <a href="javascript:;" onclick="routeNav('/popular')">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="themes/1/img/navigation/popular.svg" width="60"
                                                height="60" alt="popular">
                                        </div>
                                        <div class="name">Popular</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 7"
                                style="width: 88px; margin-right: 10px;">
                                <a href="javascript:;" onclick="routeNav('/slot')">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/slot.svg"
                                                width="60" height="60" alt="">
                                        </div>
                                        <div class="name">Slot</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 7"
                                style="width: 88px; margin-right: 10px;">
                                <a href="javascript:;" onclick="routeNav('/livegames')">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/nav-addons/hot_category.png"
                                        width="30" height="12" class="hot-tag">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/livegames.svg"
                                                width="60" height="60" alt="">
                                        </div>
                                        <div class="name">Live Game</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 7"
                                style="width: 88px; margin-right: 10px;">
                                <a href="javascript:;" onclick="routeNav('/casino')">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/casino.svg"
                                                width="60" height="60" alt="">
                                        </div>
                                        <div class="name">Casino</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="5 / 7"
                                style="width: 88px; margin-right: 10px;">
                                <a href="javascript:;" onclick="routeNav('/sportsbook')">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/sport.svg"
                                                width="60" height="60" alt="">
                                        </div>
                                        <div class="name">Sportsbook</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="6 / 7"
                                style="width: 88px; margin-right: 10px;">
                                <a href="javascript:;" onclick="routeNav('/lottery')">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/lottery.svg"
                                                width="60" height="60" alt="">
                                        </div>
                                        <div class="name">Lottery</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="7 / 7"
                                style="width: 88px; margin-right: 10px;">
                                <a href="javascript:;" onclick="routeNav('/arcade')">
                                    <div class="category-item">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/arcade.svg"
                                                width="60" height="60" alt="">
                                        </div>
                                        <div class="name">Arcade</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <button class="navigation navigation-prev--category swiper-button-disabled" disabled=""
                        tabindex="-1" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-defa2cd1099122fc10" aria-disabled="true">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button class="navigation navigation-next--category" tabindex="0" aria-label="Next slide"
                        aria-controls="swiper-wrapper-defa2cd1099122fc10" aria-disabled="false">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="mobile__provider-list provider-list--popular">
            <div class="container">
                <div class="provider-list__header">
                    <div class="header-title">
                        <div class="icon">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/popular.svg" width="30"
                                height="30">
                        </div>
                        <h6>Game Terpopuler</h6>
                    </div>
                    <div class="header-button">
                        <a href="javascript:;" onclick="routeNav('/popular')" class="btn-custom-sm">Tampilkan
                            Lainnya</a>
                    </div>
                </div>
                <div class="mobile__games">
                    <div class="games-list">
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/S-RH02.jpg"
                                        width="110" height="80" alt="S-RH02">
                                </a>
                            </div>
                            <div class="games-name">Royale House</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/mahjong-ways.webp"
                                        width="110" height="80" alt="mahjong-ways">
                                </a>
                            </div>
                            <div class="games-name">Mahjong Ways</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/mahjong-ways2.webp"
                                        width="110" height="80" alt="mahjong-ways2">
                                </a>
                            </div>
                            <div class="games-name">Mahjong Ways 2</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/pra_promo.webp"
                                        width="110" height="80" alt="vs20olympx">
                                </a>
                            </div>
                            <div class="games-name">Gates of Olympus 1000</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/vs20olympgate.webp"
                                        width="110" height="80" alt="vs20olympgate">
                                </a>
                            </div>
                            <div class="games-name">Gates of Olympus</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/PSS-ON-00148.png"
                                        width="110" height="80" alt="PSS-ON-00148">
                                </a>
                            </div>
                            <div class="games-name">Sugar Boom</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/PSS-ON-00149.png"
                                        width="110" height="80" alt="PSS-ON-00149">
                                </a>
                            </div>
                            <div class="games-name">Lucky Ace</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/5m6k9j7rwspjs.png"
                                        width="110" height="80" alt="5m6k9j7rwspjs">
                                </a>
                            </div>
                            <div class="games-name">Roma</div>
                        </div>
                        <div class="games-holder">
                            <div class="games-img">
                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                    onclick="gameAlert()">
                                    <img loading="lazy"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/small/xq9ohbyf9m79o.png"
                                        width="110" height="80" alt="xq9ohbyf9m79o">
                                </a>
                            </div>
                            <div class="games-name">Fish Hunter : Bird Hunter</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobile__provider-list provider-list--casino">
            <div class="container">
                <div class="provider-list__header">
                    <div class="header-title">
                        <div class="icon">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/casino.svg" width="30"
                                height="30">
                        </div>
                        <h6>Casino</h6>
                    </div>
                    <div class="header-button">
                        <a href="/casino" class="btn-custom-sm">Tampilkan Lainnya</a>
                    </div>
                </div>
                <div class="provider-list__item">
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="AFB CASINO" alt="AFB CASINO"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/casino/afc.webp"
                                    width="232" height="100%">
                            </div>
                            <div class="item-title">AFB CASINO</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="Pragmatic Play LC" alt="Pragmatic Play LC"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/casino/plc.webp"
                                    width="232" height="100%">
                            </div>
                            <div class="item-title">Pragmatic Play LC</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="WE CASINO" alt="WE CASINO"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/casino/wec.webp"
                                    width="232" height="100%">
                            </div>
                            <div class="item-title">WE CASINO</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="GD88" alt="GD88"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/casino/gd8.webp"
                                    width="232" height="100%">
                            </div>
                            <div class="item-title">GD88</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="WM Casino" alt="WM Casino"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/casino/wmc.webp"
                                    width="232" height="100%">
                            </div>
                            <div class="item-title">WM Casino</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="OG Casino" alt="OG Casino"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/casino/ogs.webp"
                                    width="232" height="100%">
                            </div>
                            <div class="item-title">OG Casino</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="mobile__provider-list provider-list--sports">
            <div class="container">
                <div class="provider-list__header">
                    <div class="header-title">
                        <div class="icon">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/sport.svg" width="30"
                                height="30">
                        </div>
                        <h6>Sportsbook</h6>
                    </div>
                    <div class="header-button">
                        <a href="/sportsbook" class="btn-custom-sm">Tampilkan Lainnya</a>
                    </div>
                </div>
                <div class="provider-list__item">
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="AFB88" alt="AFB88"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/sportbook/afb88.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">AFB88</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="IA E-SPORT" alt="IA E-SPORT"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/sportbook/iae.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">IA E-SPORT</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="SBO SPORT" alt="SBO SPORT"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/sportbook/sbobet.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">SBO SPORT</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="mobile__provider-list provider-list--slot">
            <div class="container">
                <div class="provider-list__header">
                    <div class="header-title">
                        <div class="icon">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/slot.svg" width="30"
                                height="30">
                        </div>
                        <h6>Slot</h6>
                    </div>
                    <div class="header-button">
                        <a href="/slot" class="btn-custom-sm">Tampilkan Lainnya</a>
                    </div>
                </div>
                <div class="provider-list__item">
                    <div class="item-holder">
                        <a onclick="routeNav('/slot/ais')" href="javascript:;">
                            <div class="item-img">
                                <img loading="lazy" title="AIS GAMING" alt="AIS GAMING"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/slot/aisg.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">AIS GAMING</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a onclick="routeNav('/slot/pragmaticplay')" href="javascript:;">
                            <div class="item-img">
                                <img loading="lazy" title="Pragmatic Play" alt="Pragmatic Play"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/slot/pra.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">Pragmatic Play</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a onclick="routeNav('/slot/pgsoft')" href="javascript:;">
                            <div class="item-img">
                                <img loading="lazy" title="PG Soft" alt="PG Soft"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/slot/pgs.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">PG Soft</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a onclick="routeNav('/slot/fastspin')" href="javascript:;">
                            <div class="item-img">
                                <img loading="lazy" title="FASTSPIN" alt="FASTSPIN"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/slot/fsp.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">FASTSPIN</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a onclick="routeNav('/slot/spadegaming')" href="javascript:;">
                            <div class="item-img">
                                <img loading="lazy" title="Spade Gaming" alt="Spade Gaming"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/slot/spd.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">Spade Gaming</div>
                        </a>
                    </div>
                    <div class="item-holder">
                        <a href="javascript:;" onclick="gameAlert()">
                            <div class="item-img">
                                <img loading="lazy" title="N2Live Slot" alt="N2Live Slot"
                                    src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/navbar/slot/nli.webp"
                                    width="170" height="100%">
                            </div>
                            <div class="item-title">N2Live Slot</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="mobile__download-bannner">
            <div class="container">
                <div class="mobile-download-container">
                    <div class="download-icon">
                        <img loading="lazy"
                            src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/favicon/favicon-1933674734.png"
                            width="40" height="40" alt="android">
                    </div>
                    <div class="download-title">
                        <h5>warmindo88</h5>
                        <h6>DOWNLOAD SEKARANG</h6>
                    </div>
                    <div class="download-button">
                        <a class="btn-custom-sm"
                            href="#">Download</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="mobile__seo">
            <div class="container">
                <div class="game__seo">
                    <div hidden="" id="title-seo">WARMINDO88: Home</div>
                    <div class="seo-mobile showFooter">
                        <div class="seo-mob-content">
                            <h1>Home</h1>
                            <p>Home</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>


@endsection

@section('under_body_mobile')

<script src="{{ asset('/') }}template_mahacuan/themes/1/vendor/jquery-validate/jquery.validate.min.js"></script>

    <script>
        window.addEventListener("popstate", (event) => {
            location.reload();
        });

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.support/locale",
                data: {
                    _token: "rFkHf8AF9JS5a1enoHn8lHTbhnzDqUXKgyw6ScDS",
                    locale: locale,
                },
                success: function(res) {
                    if (res) {
                        location.reload()
                    } else {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: "Locale not supported."
                        });
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(this).scrollTop(0);

            $('#homePopup').modal('hide');


        });
        $('#mobilePageLoadingBar').hide()
        window.onpopstate = function() {
            let path = window.location.pathname;
            routeNav(path);
        }

        function handler(e) {
            e.stopPropagation();
            e.preventDefault();
        }

        function routeNav(path) {
            if (path == window.location.pathname) return;
            history.pushState(null, null, path);
            $(".sidenav").removeClass('sidenav-open');
            $(".modal").modal("hide");
            $("#overlay").hide();
            let url = "{{ route('apps_m.index_mobile') }}" + window.location.pathname;
            if (path == '/') {
                window.location.replace("{{ route('apps_m.index_mobile') }}")
                return false;
            }
            $(".header-form>a").removeClass('active')
            let elem = document.getElementById("mobilePageLoadingBar");
            let width = 1;
            $.ajax({
                type: "GET",
                url: url,
                beforeSend: () => {
                    $('#mobilePageLoadingBar').show()
                    document.addEventListener("click", handler, true);
                    let id = setInterval(frame, 100);

                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                        }
                    }
                },
                success: function(page) {
                    document.removeEventListener("click", handler, true);
                    width = 100;
                    elem.style.width = width + '%';
                    $("main[id=main-route]").empty().append(page);
                    $("title").text($("#title-seo").text());
                    const script = $("scope-script").html()
                    $("scope-script").remove()
                    setTimeout(() => {
                        $("html, body").animate({
                            scrollTop: "0"
                        }, 1000);
                        $('#mobilePageLoadingBar').hide()
                        elem.style.width = '1%';
                        $("custom-script").empty().append(script);
                        filterGameSelection('all')
                    }, 500);
                    let checkPath = path.split('/')
                },
                error: function(e) {
                    window.location.replace("{{ route('apps_m.index_mobile') }}")
                    return false;
                }
            });
        }
    </script>
    <script>
        function maxInputAmount(wallet) {
            const amountWd = $("#withdrawAmount")
            const maxWd = parseFloat(amountWd.attr('max'))
            let walletAvail = parseFloat($(`#${wallet}Desc`).text())
            walletAvail = isNaN(walletAvail) ? 0 : walletAvail;
            if (walletAvail != 0) {
                if (walletAvail < maxWd) {
                    amountWd.attr('max', walletAvail)
                }
            }
        }

        window.showError = (title, message) => {
            return Swal.fire({
                icon: 'info',
                title: title,
                html: message,
                timerProgressBar: true,
                timer: 5000,
            });
        }

        $(".game-search>.form-control-sm").on("focus", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('100%');
                $(".form-control-sm").width('100%');
            }
        })

        $(".game-search>.form-control-sm").on("focusout", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('');
                $(".form-control-sm").width('');
            }
        })


        $("form[name=login-form]").on('submit', function(e) {
            e.preventDefault();
            let formData = {};
            $.each($(this).serializeArray(), function(i, val) {
                formData[val.name] = val.value
            });
            formData.usernameLogin = formData.usernameLogin.replace(/\s/g, '');
            let btnTxt = $("button[name=buttonLogin]").html()
            $.ajax({
                url: "https://mahacuan.support/doLogin",
                type: 'POST',
                data: {
                    _token: "rFkHf8AF9JS5a1enoHn8lHTbhnzDqUXKgyw6ScDS",
                    username: formData.usernameLogin,
                    password: formData.passwordLogin
                },
                beforeSend: function() {
                    $("input[name='usernameLogin']").attr('readonly', true)
                    $("input[name='passwordLogin']").attr('readonly', true)
                    $("button[name=buttonLogin]").attr('disabled', true)
                    $("button[name=buttonLogin]").html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                        );
                },
                success: function(data) {
                    window.history.replaceState(null, null, window.location.href);
                    if (data.code == 200) {
                        const alert = {
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            timer: 3000,
                            title: data.message
                        }
                        localStorage.setItem("loginAlert", JSON.stringify(alert));
                        location.reload();
                    } else {
                        let msg = '';
                        $.each(data.errors, function(index, valueOfElement) {
                            msg += valueOfElement + '<br />'
                        });
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: (msg == '') ?
                                "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                                msg
                        });
                        if (msg == '') {
                            location.reload();
                        }
                        $("input[name='usernameLogin']").removeAttr('readonly')
                        $("input[name='passwordLogin']").removeAttr('readonly')
                        $("input[name='passwordLogin']").val('')
                        $("button[name=buttonLogin]").removeAttr('disabled')
                        $("button[name=buttonLogin]").html(btnTxt)
                    }
                },
                error: function(data) {
                    let msg = '';
                    $.each(data.responseJSON.errors, function(index, valueOfElement) {
                        msg += valueOfElement + '<br />'
                    });
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: (msg == '') ?
                            "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                            msg
                    });
                    if (msg == '') {
                        location.reload();
                    }
                    $("input[name='usernameLogin']").removeAttr('readonly')
                    $("input[name='passwordLogin']").removeAttr('readonly')
                    $("input[name='usernameLogin']").val('')
                    $("input[name='passwordLogin']").val('')
                    $("button[name=buttonLogin]").removeAttr('disabled')
                    $("button[name=buttonLogin]").html(btnTxt)
                }
            });
        });

        function gameAlert() {
            return Swal.fire({
                icon: 'info',
                title: "Perhatian.",
                html: "Silakan login untuk bermain!",
                timerProgressBar: true,
                timer: 5000,
            });
        }
    </script>







@endsection