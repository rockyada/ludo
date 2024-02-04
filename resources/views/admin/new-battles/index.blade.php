@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        {{Config('constants.NEW_BATTLES.NEW_BATTLES_TITLES')}}
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
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Battle Id</label>
                                                    <input type="text" class="form-control" name="battle_id" placeholder="Battle Id" value="{{$searchVariable['battle_id'] ?? '' }}">
                                                </div>
                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                    <label>Battle Creator</label>
                                                    <input type="text" class="form-control" name="vplay_id" placeholder="Battle Creator" value="{{$searchVariable['vplay_id'] ?? '' }}">
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
                                                    <th class="{{(($sortBy == 'battle_id' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'battle_id' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'battle_id',
                                                    'order' => ($sortBy == 'battle_id' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))}}">Battle Id</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'vplay_id' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'vplay_id' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'vplay_id',
                                                    'order' => ($sortBy == 'vplay_id' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))}}">Battle Creator</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'entry_fee' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'entry_fee' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'entry_fee',
                                                    'order' => ($sortBy == 'entry_fee' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))}}">Entry Fee</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'prize' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'prize' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'prize',
                                                    'order' => ($sortBy == 'prize' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))}}">Winning Price</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'LOBBY_ID' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'LOBBY_ID' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'LOBBY_ID',
                                                    'order' => ($sortBy == 'LOBBY_ID' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))}}">Room Code</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'game_name' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'game_name' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'game_name',
                                                    'order' => ($sortBy == 'game_name' && $order == 'desc') ? 'asc' : 'desc',   
                                                    $query_string))}}">Ludo Type</a>
                                                    </th>
                                                    <th class="{{(($sortBy == 'created_at' && $order == 'des') ? 'sorting_desc' : (($sortBy == 'created_at' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
                                                    <a href="{{route($model.'.index',array( 'sortBy' => 'created_at',
                                                    'order' => ($sortBy == 'created_at' && $order == 'desc') ? 'asc' : 'desc',  
                                                    $query_string))}}">Added On</a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!$results->isEmpty())
                                                @foreach($results as $result)
                                                <tr>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/battle.png'}}">&nbsp;&nbsp; {{ $result->battle_id ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            <a href="{{route('players.show',base64_encode($result->user_id))}}">{{ $result->vplay_id ?? '' }}</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'}}">&nbsp;&nbsp;₹ {{ $result->entry_fee ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg"><img width="20px" src="{{Config('constants.WEBSITE_URL').'public/admin/img/global-rupeeIcon.png'}}">&nbsp;&nbsp;₹ {{ $result->prize ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">{{ $result->LOBBY_ID ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">{{ $result->game_name ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark-75 mb-1 font-size-lg">
                                                            {{ date(config("Reading.date_format")." h:i:s" ,strtotime($result->created_at)) }}
                                                        </div>
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