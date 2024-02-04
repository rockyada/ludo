@extends('frontend.layout.default')
@section('content')
<div class="ludo_block">
    <div class="landing_new_block">
        <div class="login_registerWrap box-shadow-none">
            <h3 class="login_top_title">Your Referral Earnings</h3>
            <form class="login_form_box">
                <div class="referral_earning">
                    <div class="referral_earningBox">
                        <h4 class="referral_earningTitle">Refered Players</h4>
                        <span class="referral_earningPrice">$16</span>
                    </div>
                    <div class="referral_earningBox">
                        <h4 class="referral_earningTitle">Refered Earning</h4>
                        <span class="referral_earningPrice">$15720.40</span>
                    </div>
                </div>
            </form>
        </div>
        <div class="login_registerWrap box-shadow-none">
            <h3 class="login_top_title">Your Referral Earnings</h3>
            <form class="login_form_box">
               <div class="img_boxRefer">
                <img src="{{asset('public/frontend/img/refer.webp')}}" alt="">
               </div>
               <div class="input-group">
                <input type="text" class="form-control" placeholder="697927935">
                <button class="profile_editbtn">copy</button>
            </div>
            <p class="or_text">or</p>
            <button class="support-whatsappBtn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
                </path>
            </svg><span>share on whatsapp</span></button>
            <button class="btn btn-secondary mt-md-3 mt-2   w-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="me-2"><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path><path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path></svg><span> copy to clipboard</span></button>
            </form>
        </div>
        <div class="login_registerWrap box-shadow-none">
            <h3 class="login_top_title">How It Works</h3>
            <form class="login_form_box">
                <div class="referral_workesBox">
                    <div class="referral_workesTitle">You can refer and <b>Earn 2%</b>  of your referral winning, every time</div>
                    <div class="referral_workesTitle">Like if your player plays for <b>₹10000</b>  and wins, You will get <b>₹200</b>  as referral amount.</div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop