@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						Edit {{Config('constants.EMAIL_TEMPLATES.EMAIL_TEMPLATE_TITLE')}} </h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{ route($model.'.index')}}" class="text-muted">{{Config('constants.EMAIL_TEMPLATES.EMAIL_TEMPLATES_TITLE')}} </a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<form action="{{route($model.'.update',base64_encode($emailTemplate->id))}}" method="post" class="mws-form">
				@csrf
				@method('PUT')
				<div class="card card-custom gutter-b">
					<div class="card-body">
						<div class="tab-content">
							<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group">
													<lable>Name</lable><span class="text-danger"> * </span>
													<input type="text" name="name" class="form-control form-control-solid form-control-lg @error('name') is-invalid @enderror" value="{{$emailTemplate->name ?? ''}}">
													@if ($errors->has('name'))
													<div class="invalid-feedback">
														{{ $errors->first('name') }}
													</div>
													@endif
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group">
													<lable>Subject</lable><span class="text-danger"> * </span>
													<input type="text" name="subject" class="form-control form-control-solid form-control-lg @error('subject') is-invalid @enderror" value="{{$emailTemplate->subject ?? ''}}">
													@if ($errors->has('subject'))
													<div class="invalid-feedback">
														{{ $errors->first('subject') }}
													</div>
													@endif
												</div>
											</div>
											<div class="col-xl-6" style="display:none;">
												<div class="form-group">
													<lable for="action">Action</lable><span class="text-danger"> * </span>
													<select name="action" class="form-control form-control-solid form-control-lg" id="action">
														<option value="">{{$emailTemplate->action}}</option>
													</select>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group">
													<lable for="Constants">Constants</lable><span class="text-danger"> </span>
													<div class="row">
														<div class="col">
															<select name="constants" class="form-control form-control-solid form-control-lg" onchange="constants(1)" id="constants">
																<option value="">Select One</option>
																@foreach($optionsvalue as $key => $arr)
																<option value="">{{$arr}}</option>
																@endforeach
															</select>
														</div>
														<div class="col-auto">
															<a onclick="return InsertHTML(1)" href="javascript:void(0)" class="btn btn-lg btn-success no-ajax pull-right"><i class="icon-white "></i>{{ trans("Insert Variable") }} </a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="form-group">
													<div id="kt-ckeditor-1-toolbar1"></div>
													<lable>Email Body </lable><span class="text-danger"> * </span>
													<textarea name="body" id="bodyChange" class="form-control form-control-solid form-control-lg  @error('body') is-invalid @enderror" value="{{old('body')}}">
													{{$emailTemplate->body ?? ''}} </textarea>
													@if ($errors->has('body'))
													<div class="invalid-feedback">
														{{ $errors->first('body') }}
													</div>
													@endif
												</div>
												<script src="{{asset('public/admin/js/ckeditor/ckeditor.js')}}"></script>
												<script>
													CKEDITOR.replace(<?php echo 'bodyChange'; ?>, {
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
		</div>
	</div>
	</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type='text/javascript'>
	function InsertHTML(count) {
		var str = document.getElementById('constants_' + count);
		var strUser = str.options[str.selectedIndex].text;

		if (strUser != '') {
			var newStr = '{' + strUser + '}';
			var oEditor = CKEDITOR.instances['body_' + count];
			oEditor.insertHtml(newStr);
		}
	}
</script>
@stop