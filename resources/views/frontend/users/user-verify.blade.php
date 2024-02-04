@extends('frontend.layout.default')
@section('content')
<div class="ludo_block">
    <div class="landing_new_block">
        <div class="login_registerWrap ">
            <h3 class="login_top_title">Login</h3>
            <form action="" method="post" class="login_form_box">
                @csrf
               <div class="row">
                   <div class="col-lg-12">
                    <a href="{{route('users.login')}}" class="change-numberBtn">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7071 4.29289C12.0976 4.68342 12.0976 5.31658 11.7071 5.70711L6.41421 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H6.41421L11.7071 18.2929C12.0976 18.6834 12.0976 19.3166 11.7071 19.7071C11.3166 20.0976 10.6834 20.0976 10.2929 19.7071L3.29289 12.7071C3.10536 12.5196 3 12.2652 3 12C3 11.7348 3.10536 11.4804 3.29289 11.2929L10.2929 4.29289C10.6834 3.90237 11.3166 3.90237 11.7071 4.29289Z" fill="currentcolor"/>
                        </svg> Change Number</a>
                    <div class="otpRow otp_verification">
                        <input class="otp form-control dark-form-control" type="text" name="otp[]" oninput="digitValidate(this)" onkeyup="tabChange(1)" maxlength="1">
                        <input class="otp form-control dark-form-control" type="text" name="otp[]" oninput="digitValidate(this)" onkeyup="tabChange(2)" maxlength="1">
                        <input class="otp form-control dark-form-control" type="text" name="otp[]" oninput="digitValidate(this)" onkeyup="tabChange(3)" maxlength="1">
                        <input class="otp form-control dark-form-control" type="text" name="otp[]" oninput="digitValidate(this)" onkeyup="tabChange(4)" maxlength="1">
                        <input class="otp form-control dark-form-control" type="text" name="otp[]" oninput="digitValidate(this)" onkeyup="tabChange(5)" maxlength="1">
                        <input class="otp form-control dark-form-control" type="text" name="otp[]" oninput="digitValidate(this)" onkeyup="tabChange(6)" maxlength="1">
                    </div>
                      <div class="resend_box">
                        <a href="{{route('users.resendOtp',[$token])}}" class="resend-btn ResendButton">Resend OTP</a>
                        <span class="resand_times">Resand in 00:00 seconds</span>
                        <!-- <button type="button" class="resend-btn">OTP Via Call</button> -->
                      </div>
                   </div>
                   <div class="col-lg-12">
                       <p class="legal_teems_desc text-center">By Continuing, you agree to our <a href="#!"> Legal Terms </a> and you are 18 years or older.</p>
                   </div>
                   <div class="col-lg-12">
                       <div class="form_button_box">
                           <div class="form_btn_box">
                               <button type="submit" class="submit_btn">VERIFY</button>
                           </div>
                          
                       </div>
                   </div>
               </div>
           </form>
           </div>
    </div>
</div>
@stop
@section('js')
<script>
    
let digitValidate = function(ele){
  ele.value = ele.value.replace(/[^0-9]/g,'');
}

let tabChange = function(val){
    let ele = document.querySelectorAll('.otp_verification input');
    if(ele[val-1].value != ''){
      ele[val].focus()
    }else if(ele[val-1].value == ''){
      ele[val-2].focus()
    }   
}

$('.ResendButton').hide();
var countDownDate = new Date("{{Session()->get('timer')}}").getTime();
var now_v = new Date().getTime();
var distance = parseInt(countDownDate) - parseInt(now_v);  
var x = setInterval(function() {
    distance = parseInt(distance) - 1000;  
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);         
    $('.resand_times').html("Resand in "+minutes+':'+seconds+" seconds");
    if(seconds == 0 && minutes == 0){
        $('.ResendButton').show();
        $('.resand_times').hide();
    }
    if (distance < 0) {
        clearInterval(x);
        $('.ResendButton').show();
        $('.resand_times').hide();
    }
}, 1000);

</script>
@stop