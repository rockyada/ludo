@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        {{Config('constants.WITHDAW_REQUEST.WITHDAW_REQUEST_TITLE')}}
                    </h5>
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
            <form action="{{route($model.'.index')}}" method="get" class="kt-form kt-form--fit mb-0" autocomplete="off">
                <input type="hidden" name="display">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card card-custom card-stretch card-shadowless">
                            <div class="card-header">
                                <div class="card-title">

                                </div>
                                <div class="card-toolbar">
                                    <a href="javascript:void(0);" class="btn btn-primary dropdown-toggle mr-2" data-toggle="collapse" data-target="#collapseOne6">
                                        Search
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                                    <div id="collapseOne6" class="collapse <?php echo !empty($searchVariable) ? 'show' : ''; ?>" data-parent="#accordionExample6">
                                        <div>
                                            <div class="row mb-6">
                                                <div class="col-lg-3  mb-lg-5 mb-6">
                                                  
                                                    <label>Status</label>
                                                    <select name="status" class="form-control select2init"
                                                        value="{{ $searchVariable['status'] ?? '' }}">
                                                        <option value="">All</option>
                                                        <option value="success"
                                                            {{ isset($searchVariable['status']) && $searchVariable['status'] == "success" ? 'selected' : '' }}>
                                                            Success</option>
                                                        <option value="process"
                                                            {{ isset($searchVariable['status']) && $searchVariable['status'] == "process" ? 'selected' : '' }}>
                                                            Process</option>
                                                        <option value="reject"
                                                            {{ isset($searchVariable['status']) && $searchVariable['status'] == "reject" ? 'selected' : '' }}>
                                                            Reject</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>User Id</label>
                                                    <input type="text" class="form-control" name="vplay_id" placeholder="User Id" value="{{$searchVariable['vplay_id'] ?? '' }}">
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Mobile</label>
                                                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{$searchVariable['mobile'] ?? '' }}">
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Date From</label>
                                                    <div class="input-group date" id="datepickerfrom" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" name="date_from" placeholder="Date From" data-target="#datepickerfrom" data-toggle="datetimepicker" value="{{$searchVariable['date_from'] ?? ''}}">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="ki ki-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Date To</label>
                                                    <div class="input-group date" id="datepickerto" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" name="date_to" placeholder="Date to" data-target="#datepickerto" data-toggle="datetimepicker" value="{{$searchVariable['date_to'] ?? ''}}">

                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="ki ki-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row mt-8">
                                                <div class="col-lg-12">
                                                    <button class="btn btn-primary btn-primary--icon" id="kt_search">
                                                        <span>
                                                            <i class="la la-search"></i>
                                                            <span>Search</span>
                                                        </span>
                                                    </button>
                                                    &nbsp;&nbsp;
                                                    <a href='{{ route("$model.index")}}' class="btn btn-secondary btn-secondary--icon">
                                                        <span>
                                                            <i class="la la-close"></i>
                                                            <span>Clear Search</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataTables_wrapper ">
                                    <div class="table-responsive">
                                        <table class="table dataTable table-head-custom table-head-bg table-borderless table-vertical-center" id="taskTable">
                                            <thead>
                                                <tr class="text-uppercase">
                                                    <th>Request ID</th>
                                                    <th class="{{(($sortBy == 'vplay_id' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'vplay_id' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'vplay_id',
                                                    'order' => ($sortBy == 'vplay_id' && $order == 'desc') ? 'asc' : 'desc',    
                                                    $query_string))}}">User Id</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'mobile' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'mobile' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'mobile',
                                                    'order' => ($sortBy == 'mobile' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))}}">Mobile</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'amount' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'amount' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'amount',
                                                    'order' => ($sortBy == 'amount' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))}}">Amount</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'get_amount_via' && $order == 'des') ? 'sorting_desc' : (($sortBy == 'get_amount_via' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'get_amount_via',
                                                    'order' => ($sortBy == 'get_amount_via' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))}}">Payment Via</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'status' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'status' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'status',
                                                    'order' => ($sortBy == 'status' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))}}"> Status</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'created_at' && $order == 'des') ? 'sorting_desc' : (($sortBy == 'created_at' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'created_at',
                                                    'order' => ($sortBy == 'created_at' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))}}">Added On</a>
                                                    </th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!$results->isEmpty())
                                                @foreach($results as $result)
                                                <tr>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">#{{ $result->id ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            <a href="{{route('players.show',base64_encode($result->user_id))}}">{{ $result->vplay_id ?? '' }}</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            {{ $result->mobile ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><img width="25px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'}}">&nbsp;&nbsp;
                                                            {{ $result->amount ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            {{ $result->get_amount_via ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if($result->status == "success")
                                                        <span class="label label-lg label-light-success label-inline">Success</span>
                                                        @elseif($result->status == "process")
                                                        <span class="label label-lg label-light-warning label-inline">Process</span>
                                                        @else
                                                        <span class="label label-lg label-light-danger label-inline">Reject</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            {{ date(config("Reading.date_format"),strtotime($result->created_at)) }}
                                                        </div>
                                                    </td>
                                                    <td class="text-right pr-2">
                                                        @if($result->status == "process")
                                                        <a title="Click To Block" href='{{route($model.".status",array($result->id,1))}}'>
                                                            <span class="label label-lg label-light-success label-inline">
                                                               Approved
                                                            </span>
                                                        </a>
                                                        <a title="Click To Activate" href='{{route($model.".status",array($result->id,0))}}'>
                                                            <span class="label label-lg label-light-danger label-inline">
                                                                Reject
                                                            </span>
                                                        </a>
                                                        @endif
                                                        <a href="{{route($model.'.show',base64_encode($result->id))}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" data-toggle="tooltip" data-placement="top" data-container="body" data-boundary="window" title="" data-original-title="View">
                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M12.8434797,16 L11.1565203,16 L10.9852159,16.6393167 C10.3352654,19.064965 7.84199997,20.5044524 5.41635172,19.8545019 C2.99070348,19.2045514 1.55121603,16.711286 2.20116652,14.2856378 L3.92086709,7.86762789 C4.57081758,5.44197964 7.06408298,4.00249219 9.48973122,4.65244268 C10.5421727,4.93444352 11.4089671,5.56345262 12,6.38338695 C12.5910329,5.56345262 13.4578273,4.93444352 14.5102688,4.65244268 C16.935917,4.00249219 19.4291824,5.44197964 20.0791329,7.86762789 L21.7988335,14.2856378 C22.448784,16.711286 21.0092965,19.2045514 18.5836483,19.8545019 C16.158,20.5044524 13.6647346,19.064965 13.0147841,16.6393167 L12.8434797,16 Z M17.4563502,18.1051865 C18.9630797,18.1051865 20.1845253,16.8377967 20.1845253,15.2743923 C20.1845253,13.7109878 18.9630797,12.4435981 17.4563502,12.4435981 C15.9496207,12.4435981 14.7281751,13.7109878 14.7281751,15.2743923 C14.7281751,16.8377967 15.9496207,18.1051865 17.4563502,18.1051865 Z M6.54364977,18.1051865 C8.05037928,18.1051865 9.27182488,16.8377967 9.27182488,15.2743923 C9.27182488,13.7109878 8.05037928,12.4435981 6.54364977,12.4435981 C5.03692026,12.4435981 3.81547465,13.7109878 3.81547465,15.2743923 C3.81547465,16.8377967 5.03692026,18.1051865 6.54364977,18.1051865 Z" fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="6" style="text-align:center;"> {{ trans("Record not found.") }}</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    @include('pagination.default', ['results' => $results])
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