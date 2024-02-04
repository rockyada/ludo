@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Admin Settings</h5>
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
            <form action="{{url('adminpnlx/admin-settings')}}" method="post" class="mws-form" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <h3 class="mb-10 font-weight-bold text-dark">Set Admin Commission and Credentials</h3>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Battle Comission (With Refferal)</label>
                                            <input name="battle_comission_with_referral" class="form-control form-control-solid form-control-lg" value="{{$admin_setting->battle_comission_with_referral ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Refferal Comission</label>
                                            <input name="battle_comission_without_referral" class="form-control form-control-solid form-control-lg" value="{{$admin_setting->battle_comission_without_referral ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Battle Comission (Without Refferal)</label>
                                            <input name="refferal_comission" class="form-control form-control-solid form-control-lg" value="{{$admin_setting->refferal_comission ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Mode</label><span class="text-danger"></span>
                                            <select name="mode" class="form-control form-control-solid form-control-lg  ">
                                            	<option value="1" {{$admin_setting->mode == "1" ? 'selected' : ''}}>Manual RoomCode</option>
												<option value="0" {{$admin_setting->mode == "0" ? 'selected' : ''}}>Auto RoomCode</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div>
                                        <button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                            Update Now
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