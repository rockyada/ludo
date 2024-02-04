<?php $i = 1; ?>
@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Edit
                         {{Config('constants.CMS_MANAGER.CMS_PAGE_TITLE')}} </h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route($modelName.'.index')}}" class="text-muted"> {{Config('constants.CMS_MANAGER.CMS_PAGES_TITLE')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            @include("admin.elements.quick_links")
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <form action="{{route($modelName.'.update',base64_encode($cmsDetails->id))}}" method="POST" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card card-custom gutter-b d-none">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <lable name="page_name">Page Name</lable><span class="text-danger"> * </span>
                                    <input type="text" name="page_name" class="form-control form-control-solid form-control-lg  @error('page_name') is-invalid @enderror" value="{{$cmsDetails->page_name ?? old('page_name')}}">
                                    @if ($errors->has('page_name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('page_name') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-custom gutter-b">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-toolbar border-top">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                @if(!empty($languages))
                                <?php $i = 1; ?>
                                @foreach($languages as $language)
                                <li class="nav-item">
                                    <a class="nav-link {{($i==$language_code)?'active':'' }}" data-toggle="tab" href="#{{$language->title}}">
                                        <span class="symbol symbol-20 mr-3">
                                            <img src="{{url (Config::get('constants.LANGUAGE_IMAGE_PATH').$language->image)}}" alt="">
                                        </span>
                                        <span class="nav-text">{{$language->title}}</span>
                                    </a>
                                </li>
                                <?php $i++; ?>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            @if(!empty($languages))
                            <?php $i = 1; ?>
                            @foreach($languages as $language)
                            <div class="tab-pane fade {{($i==$language_code)?'show active':'' }}" id="{{$language->title}}" role="tabpanel" aria-labelledby="{{$language->title}}">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    @if($i == 1)
                                                    <lable for="{{$language->id}}.title">Page Title</lable><span class="text-danger"> * </span>
                                                    <input type="text" name="data[{{$language->id}}][title]" class="form-control form-control-solid form-control-lg @error('title') is-invalid @enderror" value="{{$multiLanguage[$language->id]['title'] ?? old('title')}}">
                                                    @if ($errors->has('title'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('title') }}
                                                    </div>
                                                    @endif
                                                    @else
                                                    <lable for="{{$language->id}}.title">Page Title</lable><span class="text-danger"> </span>
                                                    <input type="text" name="data[{{$language->id}}][title]" class="form-control form-control-solid form-control-lg" value="{{$multiLanguage[$language->id]['title'] ?? old('title')}}">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <div id="kt-ckeditor-1-toolbar{{$language->id}}"></div>
                                                    @if($i == 1)
                                                    <lable>Description </lable><span class="text-danger"> * </span>
                                                    <textarea id="body_{{$language->id}}" name="data[{{$language->id}}][body]" class="form-control form-control-solid form-control-lg  @error('body') is-invalid @enderror" value="{{$multiLanguage[$language->id]['body'] ?? old('body')}}">
                                                    {{$multiLanguage[$language->id]['body'] ?? old('body')}} </textarea>
                                                    @if ($errors->has('body'))
                                                    <div class="alert invalid-feedback admin_login_alert">
                                                        {{ $errors->first('body') }}
                                                    </div>
                                                    @endif
                                                    @else
                                                    <lable>Description </lable>
                                                    <textarea name="data[{{$language->id}}][body]" id="body_{{$language->id}}" class="form-control form-control-solid form-control-lg">{{$multiLanguage[$language->id]['body'] ?? old('body')}}</textarea>
                                                    @endif
                                                </div>
                                                <script src="{{asset('/public/js/ckeditor/ckeditor.js')}}"></script>
                                                <script>
                                                    CKEDITOR.replace(<?php echo 'body_' . $language->id; ?>, {
                                                        filebrowserUploadUrl: '<?php echo URL()->to('base/uploder'); ?>',
                                                        enterMode: CKEDITOR.ENTER_BR
                                                    });
                                                    CKEDITOR.config.allowedContent = true;
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </div>
                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                            <div>
                                <button button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop