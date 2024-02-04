@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
   <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
      <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
         <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
               <h5 class="text-dark font-weight-bold my-1 mr-5">
                  View {{Config('constants.BATTLES_RESULT.BATTLES_RESULT_TITLE')}}
               </h5>
               <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                  <li class="breadcrumb-item">
                     <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="{{ route($model.'.index')}}" class="text-muted">    {{Config('constants.BATTLES_RESULT.BATTLES_RESULT_TITLES')}}</a>
                  </li>
               </ul>
            </div>
         </div>
         @include("admin.elements.quick_links")
      </div>
   </div>
   <div class="d-flex flex-column-fluid">
      <div class=" container ">
         <div class="card card-custom gutter-b">
            <div class="card-body px-0">
               <div class="tab-content px-10">
                  <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                     <div class="form-group row my-2">
                        <div class="col-5 text-center">
                           <span class="form-control-plaintext font-weight-bolder">
                              <img width="150px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/Avatar2.png'}}">
                           </span>
                           <span class="form-control-plaintext font-weight-bolder">
                              @if($battlesInfo->creator_result == 'win') <img width="30px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/win.png'}}">&nbsp;&nbsp;Winner
                              @else
                              <img width="40px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/lost.png'}}">&nbsp;&nbsp;Loser 
                              @endif
                              &nbsp;&nbsp;<br><a href="{{route('players.show',[base64_encode($creator_details->id)])}}">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                  </g>
                              </svg>&nbsp;&nbsp;{{ $creator_details->vplay_id ?? '' }} <br>
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                      <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                  </g>
                              </svg>&nbsp;&nbsp;{{ $creator_details->mobile ?? '' }}</a>
                           </span>
                        </div>
                        <div class="col-2 text-center">
                           <span class="form-control-plaintext font-weight-bolder">
                              <img width="150px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/vs.png'}}">
                           </span>
                        </div>
                        <div class="col-5 text-center">
                           <span class="form-control-plaintext font-weight-bolder">
                              <img width="150px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/Avatar2.png'}}">
                           </span>
                           <span class="form-control-plaintext font-weight-bolder">
                              @if($battlesInfo->joiner_result == 'win') <img width="40px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/win.png'}}">&nbsp;&nbsp;Winner
                              @else
                              <img width="40px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/lost.png'}}">&nbsp;&nbsp;Loser 
                              @endif
                              &nbsp;&nbsp;<br><a href="{{route('players.show',[base64_encode($joiner_details->id)])}}">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                  </g>
                              </svg>&nbsp;&nbsp;{{ $joiner_details->vplay_id ?? '' }} <br>
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                      <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                  </g>
                              </svg>&nbsp;&nbsp;{{ $joiner_details->mobile ?? '' }}</a>
                           </span>
                        </div>
                     </div>
                     <hr>
                     <div class="form-group row my-2">
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Battle ID:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/battle.png'}}">&nbsp;&nbsp;{{$battlesInfo->battle_id ?? ''}}
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Lobby ID:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                         <rect x="0" y="0" width="24" height="24"/>
                                         <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 C2.99998155,19.0000663 2.99998155,19.0000652 2.99998155,19.0000642 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z" fill="#000000" opacity="0.3"/>
                                         <path d="M13.8,12 C13.1562,12 12.4033,12.7298529 12,13.2 C11.5967,12.7298529 10.8438,12 10.2,12 C9.0604,12 8.4,12.8888719 8.4,14.0201635 C8.4,15.2733878 9.6,16.6 12,18 C14.4,16.6 15.6,15.3 15.6,14.1 C15.6,12.9687084 14.9396,12 13.8,12 Z" fill="#000000" opacity="0.3"/>
                                     </g>
                                 </svg>&nbsp;&nbsp;{{$battlesInfo->LOBBY_ID ?? ''}}
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Admin Comission:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'}}">&nbsp;&nbsp;₹ {{$battlesInfo->admin_commision ?? ''}}
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Reffer Person:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                  </g>
                              </svg>&nbsp;&nbsp;<a href="{{route('players.show',[base64_encode($battlesInfo->reffer_id)])}}">{{$battlesInfo->vplay_id ?? $battlesInfo->reffer_id}}</a>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Reffer Comission:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'}}">&nbsp;&nbsp;₹ {{$battlesInfo->reffer_comission ?? ''}}
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Creator ID:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                  </g>
                              </svg>&nbsp;&nbsp;<a href="{{route('players.show',[base64_encode($creator_details->id)])}}">{{$creator_details->vplay_id ?? $battlesInfo->reffer_id}}</a>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Joiner ID:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                  </g>
                              </svg>&nbsp;&nbsp;<a href="{{route('players.show',[base64_encode($joiner_details->id)])}}">{{$joiner_details->vplay_id ?? ''}}</a>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Creator Result:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    @if($battlesInfo->creator_result == 'win') <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/win.png'}}">&nbsp;&nbsp;WIN
                                    @else
                                    <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/lost.png'}}">&nbsp;&nbsp;LOST 
                                    @endif
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Joiner Result:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    @if($battlesInfo->joiner_result == 'win') <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/win.png'}}">&nbsp;&nbsp;WIN
                                    @else
                                    <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/lost.png'}}">&nbsp;&nbsp;LOST 
                                    @endif
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Entry Fee:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'}}">&nbsp;&nbsp;₹ {{$battlesInfo->entry_fee ?? ''}}
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Prize:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'}}">&nbsp;&nbsp;₹ {{$battlesInfo->prize ?? ''}}
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Game Status:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    @if($battlesInfo->game_status=='1') 
                                       New
                                    @elseif($battlesInfo->game_status=='2')
                                       Running
                                    @elseif($battlesInfo->game_status=='3')
                                       <span class="text text-success">Completed</span>
                                    @endif
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Is Running:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    @if($battlesInfo->is_running=='yes') 
                                    Running
                                    @else
                                    Not Running
                                    @endif
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Winner:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                  </g>
                                 </svg>&nbsp;&nbsp;
                                 <a href="{{route('players.show',[base64_encode($winner->id)])}}"> 
                                 {{$winner->vplay_id ?? ''}}</a>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-5 col-form-label">Creator Screenshot:</label>
                              <div class="col-7 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    @if(@$battlesInfo->creator_screenshot)
                                    <div class="text-dark-75 mb-1 font-size-lg">
                                       <a class="fancybox-buttons" data-fancybox-group="button" href="{{Config('constants.BATTLES_PATH').$battlesInfo->creator_screenshot ?? ''}}"><img height="50" width="50" src="{{Config('constants.BATTLES_PATH').$battlesInfo->creator_screenshot ?? ''}}"></a>
                                   </div>
                                   @else
                                    Not Avaliable
                                   @endif
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-5 col-form-label">Joiner Screenshot:</label>
                              <div class="col-7 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    @if(@$battlesInfo->joiner_screenshot)
                                    <div class="text-dark-75 mb-1 font-size-lg">
                                       <a class="fancybox-buttons" data-fancybox-group="button" href="{{Config('constants.BATTLES_PATH').$battlesInfo->joiner_screenshot ?? ''}}"><img height="50" width="50" src="{{Config('constants.BATTLES_PATH').$battlesInfo->joiner_screenshot ?? ''}}"></a>
                                   </div>
                                   @else
                                    Not Avaliable
                                   @endif
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Loser:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"/>
                                      <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                      <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                  </g>
                                 </svg>&nbsp;&nbsp;
                                 <a href="{{route('players.show',[base64_encode($battlesInfo->loser_id)])}}"> 
                                 {{$loser->vplay_id ?? $battlesInfo->loser_id }}</a>
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Cancel Reason:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    {{$battlesInfo->cancel_reason ??  'Not Avaliable'}}</a>
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Level:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    {{$battlesInfo->label ??  'Not Avaliable'}}</a>
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Battle Created At:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    {{ @$battlesInfo->created_at ? date(config("Reading.date_format")." h:i:s",strtotime($battlesInfo->created_at)) : "Not Avaliable"}}
                                    
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Battle Send Request Date and Time:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    {{ @$battlesInfo->send_request_time ? date(config("Reading.date_format")." h:i:s",strtotime($battlesInfo->send_request_time)) : "Not Avaliable"}}
                                    
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Creator Result Submit on:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    {{ @$battlesInfo->creator_result_time ? date(config("Reading.date_format")." h:i:s",strtotime($battlesInfo->creator_result_time)) : "Not Avaliable"}}
                                    
                                 </span>
                              </div>
                           </div>
                        </div>

                        <div class="col-6">
                           <div class="form-group row my-2">
                              <label class="col-4 col-form-label">Joiner Result Submit on:</label>
                              <div class="col-8 text-center">
                                 <span class="form-control-plaintext font-weight-bolder">
                                    {{ @$battlesInfo->joiner_result_time ? date(config("Reading.date_format")." h:i:s",strtotime($battlesInfo->joiner_result_time)) : "Not Avaliable"}}
                                 </span>
                              </div>
                           </div>
                        </div>


                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop