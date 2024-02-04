@extends('frontend.layout.default')
@section('content')
<div class="ludo_block">
    <div class="landing_new_block">
        <div class="wallet_back_btn">
            <a href="#!" class="submit_btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path></svg>
                Back
            </a>
            <a href="index.html" class="btn-primary">wallet history
            </a>
        </div>
        
        <div class="login_registerWrap ">
            <h3 class="login_top_title">deposit chips</h3>
           <div class="login_form_box">
             <div class="spin_and_winBox">
                यह चिप्स Spin & Win एवं Buy की गई चिप्स है इनसे सिर्फ़ गेम खेले जा सकते है ॥ Bank या UPI में निकाला नहीं जा सकता है
             </div>

             <div class="chips_nuBox">
                Chips
                <span>13.00</span>
             </div>

             <button type="button" class="submit_btn">Add</button>

           </div>
           </div>
        <div class="login_registerWrap ">
            <h3 class="login_top_title">winning chips</h3>
           <div class="login_form_box">
             <div class="spin_and_winBox">
                यह चिप्स गेम से जीती हुई एवं रेफरल से कमाई हुई है इन्हें Bank या UPI में निकाला जा सकता है ॥ इन चिप्स से गेम भी खेला जा सकता है
             </div>

             <div class="chips_nuBox">
                Chips
                <span>200.00</span>
             </div>

             <button type="button" class="submit_btn">withdrow</button>

           </div>
           </div>
    </div>
</div>
@stop