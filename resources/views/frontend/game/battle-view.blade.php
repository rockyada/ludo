@extends('frontend.layout.default')
@section('content')
<div class="ludo_block">
    <div class="ludo_user_dlt">
        <div class="user_room_code">
            <span class="ludo_limu_text">LUDO_LMLUIC12 </span>
            <div class="user_room_box">
                <div class="my_name_img">
                    <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                    <span>58 Lakshimi Nrayanan.T</span>
                </div>
                <span class="room_vsText">VS</span>
                    <div class="my_name_img">
                        <img src="{{asset('public/frontend/img/avatar-img.svg')}}" alt="">
                        <span>Mahendra saini</span>
                    </div>
            </div> 
            <div class="room_code_btns">
                <span class="room_coins_btn">Challenged Coins- 10.0</span>
                <span class="room_winn_btn">Winning Coins- 18.0</span>
                <span class="room_code_btn">Room Code 04335141 
                    <button><i class="fas fa-copy"></i></button>
                </span>
            </div>
        </div>
    </div>
    <div class="chat_opponent_box">
        <a href="#!" class="go_ludo_chat">go on ludo king</a>
        <a href="#!" class="go_ludo_chat border-0">chat with opponent</a>
    </div>
    <ul class="description_dlt">
        <li>if you have won take a screenshot of winning page from LudoKing app Click below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>if you have won take a screenshot of winning page from LudoKing app Click below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>if you have won take a screenshot of winning page from LudoKing app Click below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>if you have won take a screenshot of winning page from LudoKing app Click below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>if you have won take a screenshot of winning page from LudoKing app Click below on Won to upload the scrttnshot $ than click on comfirm to win</li>
        <li>below on Won to upload the scrttnshot $ than click on comfirm to win</li>
    </ul>
</div>
<div class="bottom_menu_bar ludo_convest_nav">
    <ul class="menu_bar_list">
        <li>
            <a href="#!" class="nav_bottom_menu">
                <i class="far fa-trophy"></i> WOW
            </a>
        </li>

        <li>
            <a href="#!" class="nav_bottom_menu">
                <svg xmlns="http://www.w3.org/2000/svg" height="17px" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm129.1-303.8c-3.8-4.4-10.3-5.4-15.3-2.5l-80 48c-3.6 2.2-5.8 6.1-5.8 10.3s2.2 8.1 5.8 10.3l80 48c5.4 3.2 11.8 1.6 15.3-2.5 3.8-4.5 3.9-11 .1-15.5L343.6 208l33.6-40.3c3.8-4.5 3.7-11.1-.1-15.5zM220 208c0-4.2-2.2-8.1-5.8-10.3l-80-48c-5-3-11.5-1.9-15.3 2.5-3.8 4.5-3.9 11-.1 15.5l33.6 40.3-33.6 40.3c-3.8 4.5-3.7 11 .1 15.5 3.5 4.1 9.9 5.7 15.3 2.5l80-48c3.6-2.2 5.8-6.1 5.8-10.3zm28 64c-45.4 0-100.9 38.3-107.8 93.3-1.5 11.8 6.9 21.6 15.5 17.9C178.4 373.5 212 368 248 368s69.6 5.5 92.3 15.2c8.5 3.7 17-6 15.5-17.9-6.9-55-62.4-93.3-107.8-93.3z" fill="currentcolor"/></svg>
                Lost
            </a>
        </li>
        <li class="active_nav_item">
            <a href="#!" class="nav_bottom_menu">
                <i class="fas fa-times-circle"></i>error
            </a>
        </li>
    </ul>
</div>
@stop
