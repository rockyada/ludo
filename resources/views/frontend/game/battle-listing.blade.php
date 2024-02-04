@extends('frontend.layout.default')
@section('content')
<section class="ludo_wrapper listing_bg">
    <div class="listing_block bott_padd">
        <div class="list_banner_box">
            <div class="swiper listBanner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="list_bannr_img">
                            <img src="{{asset('public/frontend/img/blog-banner.jpg')}}" alt="">
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="list_bannr_img">
                            <img src="{{asset('public/frontend/img/blog-banner.jpg')}}" alt="">
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="list_bannr_img">
                            <img src="{{asset('public/frontend/img/blog-banner.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="myChallenges_box">
            <h3>My Challenges</h3>
            <a href="#!" class="view_challeng_text">View All Challenges <i class="far fa-angle-right"></i></a>
        </div>
        <div class="list_banner_box">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="ludo-contest.html" class="convestCArd">
                            <div class="play_winning_name">
                                <div class="play_winning02">
                                    <span class="ludo_limu_text">LUDO_LMLUIC12 
                                        <span class="classic_tag">classic</span>
                                    </span>
                                    <p>You accepted challenge for 10.0 Coins</p>
                                    <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                                    <h4 class="user_name_slide">58 Lakshmi Narayanan.T</h4>
                                    <span class="winning_coins">Winning: 18.0 Coins</span>
                                </div>
                                <button type="button" class="play_on_btn">Play on Ludo King</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="myChallenges_box">
            <p class="lave-text">
                Live Challenges
            </p>
        </div>
        <div class="play_list_block">
            <div class="ludo_win_list">
                <div class="ludo_card">
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Devanand</span>
                    </div>
                    <div class="challeng_win_box">
                        <span class="ludo_limu_text">LUDO_LMLUIC12 <span class="classic_tag">classic</span></span>
                        <p class="challeng_winDesc">has challenged for</p>
                        <span class="coin_number_text">10.0 Coins</span>
                    </div>
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Waiting...</span>
                    </div>
                </div>
                <div class="wing_accept_btn">
                    <button type="button" class="wing_coin_btn">Winning: 18.0 coins</button>
                    <button type="button" class="accept_coin_btn">Accept</button>
                </div>
            </div>
        </div>
        <div class="play_list_block">
            <div class="ludo_win_list">
                <div class="ludo_card">
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Devanand</span>
                    </div>
                    <div class="challeng_win_box">
                        <span class="ludo_limu_text">LUDO_LMLUIC12 <span class="classic_tag">classic</span></span>
                        <p class="challeng_winDesc">has challenged for</p>
                        <span class="coin_number_text">10.0 Coins</span>
                    </div>
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Waiting...</span>
                    </div>
                </div>
                <div class="wing_accept_btn">
                    <button type="button" class="wing_coin_btn">Winning: 18.0 coins</button>
                    <button type="button" class="accept_coin_btn">Accept</button>
                </div>
            </div>
        </div>
        <div class="play_list_block">
            <div class="ludo_win_list">
                <div class="ludo_card">
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Devanand</span>
                    </div>
                    <div class="challeng_win_box">
                        <span class="ludo_limu_text">LUDO_LMLUIC12 <span class="classic_tag">classic</span></span>
                        <p class="challeng_winDesc">has challenged for</p>
                        <span class="coin_number_text">10.0 Coins</span>
                    </div>
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Waiting...</span>
                    </div>
                </div>
                <div class="wing_accept_btn">
                    <button type="button" class="wing_coin_btn">Winning: 18.0 coins</button>
                    <button type="button" class="accept_coin_btn">Accept</button>
                </div>
            </div>
        </div>
        <div class="play_list_block">
            <div class="ludo_win_list">
                <div class="ludo_card">
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Devanand</span>
                    </div>
                    <div class="challeng_win_box">
                        <span class="ludo_limu_text">LUDO_LMLUIC12 <span class="classic_tag">classic</span></span>
                        <p class="challeng_winDesc">has challenged for</p>
                        <span class="coin_number_text">10.0 Coins</span>
                    </div>
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Waiting...</span>
                    </div>
                </div>
                <div class="wing_accept_btn">
                    <button type="button" class="wing_coin_btn">Winning: 18.0 coins</button>
                    <button type="button" class="accept_coin_btn">Accept</button>
                </div>
            </div>
        </div>
        <div class="play_list_block">
            <div class="ludo_win_list">
                <div class="ludo_card">
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Devanand</span>
                    </div>
                    <div class="challeng_win_box">
                        <span class="ludo_limu_text">LUDO_LMLUIC12 <span class="classic_tag">classic</span></span>
                        <p class="challeng_winDesc">has challenged for</p>
                        <span class="coin_number_text">10.0 Coins</span>
                    </div>
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Waiting...</span>
                    </div>
                </div>
                <div class="wing_accept_btn">
                    <button type="button" class="wing_coin_btn">Winning: 18.0 coins</button>
                    <button type="button" class="accept_coin_btn">Accept</button>
                </div>
            </div>
        </div>
        <div class="bottom_menu_bar">
            <ul class="menu_bar_list">
                <li>
                    <a href="#!" class="nav_bottom_menu">
                        <i class="fas fa-share-alt"></i> Refer
                    </a>
                </li>

                <li>
                    <a href="#!" class="nav_bottom_menu">
                        <i class="fas fa-id-card"></i> Contect
                    </a>
                </li>
                <li class="active_nav_item">
                    <a href="#!" class="nav_bottom_menu">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a href="#!" class="nav_bottom_menu">
                        <i class="far fa-chart-line"></i> Winners
                    </a>
                </li>
                <li>
                    <a href="#!" class="nav_bottom_menu"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fal fa-plus"></i> Create 
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
@stop

@section('models')
<div class="modal fade add_modal_popup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Challenge (Classic)</h5>
            </div>
            <div class="modal-body">
                <span class="King_username_text">How to get ludo King username? Click to view</span>
                <form>
                    <div class="form-group add_input_box">
                        <input type="text" class="form-control" placeholder="fiff">
                        <span class="add_input_icon"><i class="fal fa-gamepad"></i></span>
                    </div>
                    <div class="form-group add_input_box">
                        <input type="text" class="form-control" placeholder="Coins">
                        <span class="add_input_icon"><i class="fab fa-bitcoin"></i></span>
                    </div>
                </form>
                <div class="check_input_box">
                    <div class="form-check add_amount_box">
                        <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        10
                    </label>
                </div>
                <div class="form-check add_amount_box">
                    <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        50
                    </label>
                </div>
                <div class="form-check add_amount_box">
                    <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        100
                    </label>
                </div>
                <div class="form-check add_amount_box">
                    <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck4">
                        200
                    </label>
                </div>
                <div class="form-check add_amount_box">
                    <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck5">
                        500
                    </label>
                </div>
                <div class="form-check add_amount_box">
                    <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck6">
                    <label class="form-check-label" for="defaultCheck6">
                        1000
                    </label>
                </div>
                <div class="form-check add_amount_box">
                    <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck7">
                    <label class="form-check-label" for="defaultCheck7">
                        2000
                    </label>
                </div>
                <div class="form-check add_amount_box">
                    <input class="form-check-input" name="exampleRadios" type="radio" value="" id="defaultCheck8">
                    <label class="form-check-label" for="defaultCheck8">
                        5000
                    </label>
                </div>
            </div>
            <ul class="add_challengeDesc">
                <li>
                    Coins must be in multiple of 10.ie 10,20,30,40,50...
                </li>
                <li>
                    Challenge coins cannot be less than 10.
                </li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="add_challenge_btn">Add Challenge</button>
        </div>
      </div>
    </div>
</div>
@stop

@section('js')
<script>
    var swiper = new Swiper(".listBanner", {
        spaceBetween: 30,
    });

    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 20,
        slidesPerView: 2,
        loop:true,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            430: {
                slidesPerView: 2,
            },
        },
    });
</script>
@stop
