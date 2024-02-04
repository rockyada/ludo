@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Edit {{Config('constants.GAMES.GAMES_TITLE')}}</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route($model.'.index')}}" class="text-muted"> {{Config('constants.GAMES.GAMES_TITLES')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            @include("admin.elements.quick_links")
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="{{route($model.'.update',[$game_id])}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <h3 class="mb-10 font-weight-bold text-dark">
                                    {{Config('constants.GAMES.GAMES_TITLE')}} Information
                                </h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Game Name</label><span class="text-danger"> * </span><br>
                                            <input type="text" name="game_name" class="form-control form-control-solid form-control-lg  @error('game_name') is-invalid @enderror" value="{{$gamesInfo->game_name ?? ''}}">
                                            @if ($errors->has('game_name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('game_name') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>API URL</label>
                                            <input type="url" name="api_url" class="form-control form-control-solid form-control-lg  @error('api_url') is-invalid @enderror" value="{{$gamesInfo->api_url ?? ''}}">
                                            @if ($errors->has('api_url'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('api_url') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Game Image</label><span class="text-danger"> * </span><br>
                                            <input type="file" name="game_image" class="form-control form-control-solid form-control-lg  @error('game_image') is-invalid @enderror">
                                            @if ($errors->has('game_image'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('game_image') }}
                                            </div>
                                            @endif
                                        </div>
                                        @if(@$gamesInfo->game_image)
                                          <div class="text-dark-75 mb-1 font-size-lg">
                                             <a class="fancybox-buttons" data-fancybox-group="button" href="{{Config('constants.GAMES_IMAGE_PATH').$gamesInfo->game_image ?? ''}}"><img height="50" width="50" src="{{Config('constants.GAMES_IMAGE_PATH').$gamesInfo->game_image ?? ''}}"></a>
                                         </div>
                                         @endif
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div>
                                        <button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop