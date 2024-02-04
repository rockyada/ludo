<header id="header">
    <div class="row gx-0">
        <div class="col-12 p-0">
            @if(url('/') ==  url()->current())
            <div class="top_header">Commission: 5% ◉ Referral: 2% For All Games</div>
            @endif
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon">
                        <svg onclick="myfunction()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                            width="24" height="24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z">
                            </path>
                        </svg>
                    </span>
                </button>
                <div class="overlay" style="display:none"></div>
                <div class="collapse navbar-collapse">
                    <button class="navbar-toggler menuClose-icon" type="button">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.4 14L0 12.6L5.6 7L0 1.4L1.4 0L7 5.6L12.6 0L14 1.4L8.4 7L14 12.6L12.6 14L7 8.4L1.4 14Z"
                                fill="#909294" />
                        </svg>
                    </button>
                    <div class="mobile_logo">
                        <h3 class="ludo_side_title">{{Config('constants.SITE_TITLE')}}</h3>
                    </div>
                    <div class="hey_side_title">
                        <h3 class="side_bar_hey">Hey,</h3>
                        <img src="https://ludoplayers.com/static/media/hello.a512d06e9ef9c85276f6.webp" alt="hello icon" width="36px">
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">
                                <div>
                                    <img src="https://ludoplayers.com/static/media/play.2f22f88bac8acca85f6a.webp" height="36px" alt="play">
                                    Play
                                </div>
                            </a>
                        </li>
                        @if(!Login())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.signup')}}">
                                <div>
                                    <img src="https://ludoplayers.com/static/media/play.2f22f88bac8acca85f6a.webp" height="36px" alt="play">
                                    Register
                                </div>
                            </a>
                        </li>
                        @endif
                        @if(Login())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.wallet')}}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="36" height="36" fill="currentColor"><path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path></svg>
                                    Wallet
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.history')}}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="36" height="36" fill="currentColor"><path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path><path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path><path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path></svg>
                                    History
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.profile')}}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="36" height="36" fill="currentColor"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path></svg>
                                    Profile
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.referEarn')}}">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="36" height="36" fill="currentColor"><path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"></path></svg>
                                    Refer & Earn
                                </div>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.support')}}">
                                <img src="https://ludoplayers.com/static/media/liveChatOffcanvas.4db8ac024d1cc6d424a3.webp"
                                    height="36px" alt="play">
                                Support
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.lagalTerms')}}">
                                <img src="https://ludoplayers.com/static/media/liveChatOffcanvas.4db8ac024d1cc6d424a3.webp"
                                    height="36px" alt="play">
                                Legal Terms
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
                </a>
                @if(!Login())
                <button type="button" class="btn btn-primary QuestionModels">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                        fill="currentColor" class="me-1">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                        </path>
                        <path
                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                        </path>
                    </svg>
                    Guide
                </button>
                @else
                <div class="notifi_top_box QuestionModels">
                    <div class="wallet_amunt_title">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="green" class="me-2">
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"></path><path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"></path></svg><span>{{Login()->wallet ?? 0}}</span>
                    </div>
                    <a href="#!" class="notification_icon_box">
                        <i class="fas fa-bell"></i>
                        <span class="notifi_io">9</span>
                    </a>
                </div>
                @endif
            </nav>
        </div>
    </div>
</header>