@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
   <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
      <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
         <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
               <h5 class="text-dark font-weight-bold my-1 mr-5">
                  View {{Config('constants.GAMES.GAMES_TITLE')}}
               </h5>
               <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                  <li class="breadcrumb-item">
                     <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="{{ route($model.'.index')}}" class="text-muted">    {{Config('constants.GAMES.GAMES_TITLES')}}</a>
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
            <div class="card-header card-header-tabs-line">
               <div class="card-toolbar">
                  <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active hide_me" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
                           <span class="nav-text">
                           {{Config('constants.GAMES.GAMES_TITLE')}} Information
                           </span>
                        </a>
                     </li>
               </div>
            </div>
            <div class="card-body px-0">
               <div class="tab-content px-10">
                  
                  <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Game ID:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{$gamesInfo->game_id ?? ''}}</span>
                        </div>
                     </div>

                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label"> Game Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{$gamesInfo->game_name ?? ''}}</span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Game Image:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              @if(@$gamesInfo->game_image)
                              <div class="text-dark-75 mb-1 font-size-lg">
                                 <a class="fancybox-buttons" data-fancybox-group="button" href="{{Config('constants.USER_KYC_IMAGE_PATH').$gamesInfo->game_image ?? ''}}"><img height="50" width="50" src="{{Config('constants.USER_KYC_IMAGE_PATH').$gamesInfo->game_image ?? ''}}"></a>
                             </div>
                             @endif
                           </span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label"> API URL:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{$gamesInfo->api_url ?? ''}}</span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Created At:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder"> {{ date(config("Reading.date_format"),strtotime($gamesInfo->created_at)) }} </span>
                        </div>
                     </div>
                    
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">status:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              @if($gamesInfo->status == 1)
                              <span class="label label-lg label-light-success label-inline">Activated</span>
                              @else
                              <span class="label label-lg label-light-danger label-inline">Deactivated</span>
                              @endif
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
@stop