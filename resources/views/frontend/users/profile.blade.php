@extends('frontend.layout.default')
@section('content')
<div class="ludo_block">
    <div class="landing_new_block">
        <div class="login_registerWrap ">
            <h3 class="login_top_title">Profile</h3>
            <form class="login_form_box" id="profile_image_uploads" enctype="multipart/form-data">
                <div class="upload_imgBox">
                    <div class="upload-img">
                        <img src="{{Login()->image != '' ? Config('constants.USER_IMAGE_ROOT_PATH').Login()->image : asset('public/frontend/custom/img/avatar.svg')}}" alt="">
                    </div>
                        <div class="upload-inputBtn">
                            <label for="uploadinput1" class="upload_btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em"
                                    height="1em" fill="black" style="width: 12px;">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                                    </path>
                                </svg>
                            </label>
                            <input type="file" id="uploadinput1" name="profile_image" accept="image/*" class="d-none">
                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <div class="profile_editeBtn">
                                <input type="text" class="form-control nameShow" disabled="" name="name" value="{{Login()->name ?? ''}}">
                                <div class="profile_button">
                                    <button type="button" class="profile_editbtn userNameEdit">Edit</button>
                                    <button type="button" style="display: none;" class="profile_savebtn userSave">Save</button>
                                </div>
                            </div>
                            <p class="text-danger nameError"></p>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mobile Numbe</label>
                            <input type="text" disabled="" value="{{Login()->mobile ?? ''}}" class="form-control">
                        </div>

                        <div class="kyc-detailsBox Verfide_kyc">
                            <div class="kyc-box"><span class="kyc-detaiStatus">KYC status </span><span
                                    class="kyc-paddingStatus"> Verfide <svg class="kyc-pendding"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                        height="16" fill="red">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                        </path>
                                    </svg>

                                    <svg width="22" height="22" class="kyc-verifde" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.5924 3.20027C9.34888 3.4078 9.22711 3.51158 9.09706 3.59874C8.79896 3.79854 8.46417 3.93721 8.1121 4.00672C7.95851 4.03705 7.79903 4.04977 7.48008 4.07522C6.6787 4.13918 6.278 4.17115 5.94371 4.28923C5.17051 4.56233 4.56233 5.17051 4.28923 5.94371C4.17115 6.278 4.13918 6.6787 4.07522 7.48008C4.04977 7.79903 4.03705 7.95851 4.00672 8.1121C3.93721 8.46417 3.79854 8.79896 3.59874 9.09706C3.51158 9.22711 3.40781 9.34887 3.20027 9.5924C2.67883 10.2043 2.4181 10.5102 2.26522 10.8301C1.91159 11.57 1.91159 12.43 2.26522 13.1699C2.41811 13.4898 2.67883 13.7957 3.20027 14.4076C3.40778 14.6511 3.51158 14.7729 3.59874 14.9029C3.79854 15.201 3.93721 15.5358 4.00672 15.8879C4.03705 16.0415 4.04977 16.201 4.07522 16.5199C4.13918 17.3213 4.17115 17.722 4.28923 18.0563C4.56233 18.8295 5.17051 19.4377 5.94371 19.7108C6.278 19.8288 6.6787 19.8608 7.48008 19.9248C7.79903 19.9502 7.95851 19.963 8.1121 19.9933C8.46417 20.0628 8.79896 20.2015 9.09706 20.4013C9.22711 20.4884 9.34887 20.5922 9.5924 20.7997C10.2043 21.3212 10.5102 21.5819 10.8301 21.7348C11.57 22.0884 12.43 22.0884 13.1699 21.7348C13.4898 21.5819 13.7957 21.3212 14.4076 20.7997C14.6511 20.5922 14.7729 20.4884 14.9029 20.4013C15.201 20.2015 15.5358 20.0628 15.8879 19.9933C16.0415 19.963 16.201 19.9502 16.5199 19.9248C17.3213 19.8608 17.722 19.8288 18.0563 19.7108C18.8295 19.4377 19.4377 18.8295 19.7108 18.0563C19.8288 17.722 19.8608 17.3213 19.9248 16.5199C19.9502 16.201 19.963 16.0415 19.9933 15.8879C20.0628 15.5358 20.2015 15.201 20.4013 14.9029C20.4884 14.7729 20.5922 14.6511 20.7997 14.4076C21.3212 13.7957 21.5819 13.4898 21.7348 13.1699C22.0884 12.43 22.0884 11.57 21.7348 10.8301C21.5819 10.5102 21.3212 10.2043 20.7997 9.5924C20.5922 9.34887 20.4884 9.22711 20.4013 9.09706C20.2015 8.79896 20.0628 8.46417 19.9933 8.1121C19.963 7.95851 19.9502 7.79903 19.9248 7.48008C19.8608 6.6787 19.8288 6.278 19.7108 5.94371C19.4377 5.17051 18.8295 4.56233 18.0563 4.28923C17.722 4.17115 17.3213 4.13918 16.5199 4.07522C16.201 4.04977 16.0415 4.03705 15.8879 4.00672C15.5358 3.93721 15.201 3.79854 14.9029 3.59874C14.7729 3.51158 14.6511 3.40781 14.4076 3.20027C13.7957 2.67883 13.4898 2.41811 13.1699 2.26522C12.43 1.91159 11.57 1.91159 10.8301 2.26522C10.5102 2.4181 10.2043 2.67883 9.5924 3.20027ZM16.3735 9.86314C16.6913 9.5453 16.6913 9.03 16.3735 8.71216C16.0557 8.39433 15.5403 8.39433 15.2225 8.71216L10.3723 13.5624L8.77746 11.9676C8.45963 11.6498 7.94432 11.6498 7.62649 11.9676C7.30866 12.2854 7.30866 12.8007 7.62649 13.1186L9.79678 15.2889C10.1146 15.6067 10.6299 15.6067 10.9478 15.2889L16.3735 9.86314Z"
                                            fill="#198754" />
                                    </svg>
                                </span></div>
                            <div>
                                <button class="kyc-completeBtn">complete KYC</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="login_registerWrap ">
        <h3 class="login_top_title">Metrics</h3>
        <div class="login_form_box">
            <div class="row g-2">
                <div class="col-6">
                    <div class="login_registerWrap metrics_inBox">
                        <h3 class="login_top_title"><img src="{{asset('public/frontend/img/metrics-in1.webp')}}" class="metrics-in1"
                                alt=""> Games Played</h3>
                        <div class="login_form_box">
                            <span class="metrics-value">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="login_registerWrap metrics_inBox">
                        <h3 class="login_top_title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="currentColor"><path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"></path><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg> Chips Won</h3>
                        <div class="login_form_box">
                            <span class="metrics-value">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="login_registerWrap metrics_inBox">
                        <h3 class="login_top_title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="currentColor"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path></svg> Referral Earning</h3>
                        <div class="login_form_box">
                            <span class="metrics-value">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="login_registerWrap metrics_inBox">
                        <h3 class="login_top_title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="currentColor"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path></svg> Penalty</h3>
                        <div class="login_form_box">
                            <span class="metrics-value">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logoutButton">
        <a href="#!" class="logoutBTn">Logout</a>
    </div>
</div>
@stop

@section('js')
<script type="text/javascript">
    $('body').on("click",".userNameEdit",function(){
        $(this).hide();
        $('.nameShow').attr('disabled',false);
        $('.userSave').show();
    });

    $('body').on("click",".userSave",function(){
        var name = $('.nameShow').val();
        if(name){
            $('.nameError').html('');
            $('.loader-wrapper').show();
            $.ajax({
                url: '{{route("auth.userProfileUpdate")}}',
                type: 'POST',
                data: {_token:_token,name:name},
                success: function(response) {
                    $('.loader-wrapper').hide();
                    $('.userSave').hide();
                    $('.userNameEdit').show();
                    $('.nameShow').attr('disabled',true);
                }
            });
        }else{
            $('.nameError').html("This field is required.");
        }
    });


    $("body").on("change", "#uploadinput1", function () {
        var form_data = new FormData($('#profile_image_uploads')[0]);
        form_data.append('_token', _token);
        $('.loader-wrapper').show();
        $.ajax({
            url: '{{ route("auth.profileImageRequests") }}',
            type: 'POST',
            data: form_data,
            processData: false,
            contentType: false,
            success: function (response) {
                location.reload();
            },
            error: function (error) {
                if (error.responseJSON && error.responseJSON.errors) {
                    toastr.error(error.responseJSON.errors.profile_image[0]);
                }
                $('.loader-wrapper').hide();
            }
        });
    });

</script>
@stop