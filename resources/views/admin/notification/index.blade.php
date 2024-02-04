@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Marquee Notification</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            @include("admin.elements.quick_links")
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <form action="{{url('adminpnlx/marquee-notification')}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <h3 class="mb-10 font-weight-bold text-dark">Marquee Notification View</h3>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Notice Text Home Page</label>
                                            <textarea name="notice_text" class="form-control form-control-solid form-control-lg">{{$notification->notice_text ?? ''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Marquee Notification Text</label><span class="text-danger"> * </span><br>
                                            <textarea name="marquee_text" class="form-control form-control-solid form-control-lg">{{$notification->marquee_text ?? ''}}</textarea>
                                            @if ($errors->has('marquee_text'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('marquee_text') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Status</label><span class="text-danger"></span>
                                            <select name="status" class="form-control form-control-solid form-control-lg  ">
                                                <option value="1" {{$notification->status == "1" ? 'selected' : ''}}>Show on Website</option>
                                                <option value="0" {{$notification->status == "0" ? 'selected' : ''}}>Hide From Homepage</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div>
                                        <button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                            Update Marquee Notification
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