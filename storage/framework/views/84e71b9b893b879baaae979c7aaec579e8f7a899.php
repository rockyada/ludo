<?php $__env->startSection('content'); ?>
 <!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div
			class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						<?php echo e($sectionName); ?> </h5>
					<!--end::Page Title-->

					<!--begin::Breadcrumb-->
					<ul
						class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="<?php echo e(route('dashboard')); ?>" class="text-muted">Dashboard</a>
						</li>
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page Heading-->
			</div>
			<!--end::Info-->

			<?php echo $__env->make("admin.elements.quick_links", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</div>
	<!--end::Subheader-->

	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
			<?php echo e(Form::open(['method' => 'get','role' => 'form','route' => "$modelName.index",'class' => 'kt-form kt-form--fit mb-0','autocomplete'=>"off"])); ?>

			<?php echo e(Form::hidden('display')); ?>

			<div class="row">
				<div class="col-12">
					<div class="card card-custom card-stretch card-shadowless">
						<div class="card-header">
							<div class="card-title">

							</div>
							<div class="card-toolbar">
								<a href="javascript:void(0);" class="btn btn-primary dropdown-toggle mr-2"
									data-toggle="collapse" data-target="#collapseOne6">
									Search
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="accordion accordion-solid accordion-toggle-plus"
								id="accordionExample6">
								<div id="collapseOne6" class="collapse <?php echo !empty($searchVariable) ? 'show' : ''; ?>" data-parent="#accordionExample6">
									<div>
											<div class="row mb-6">
											

												<div class="col-lg-3 mb-lg-5 mb-6">
													<label>Date From</label>
													<div class="input-group date" id="datepickerfrom" data-target-input="nearest">
														<?php echo e(Form::text('date_from',((isset($searchVariable['date_from'])) ? $searchVariable['date_from'] : ''), ['class' => ' form-control datetimepicker-input','placeholder'=>'Date To','data-target'=>'#datepickerfrom','data-toggle'=>'datetimepicker'])); ?>

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
														<?php echo e(Form::text('date_to',((isset($searchVariable['date_to'])) ? $searchVariable['date_to'] : ''), ['class' => ' form-control  datetimepicker-input','placeholder'=>'Date To','data-target'=>'#datepickerto','data-toggle'=>'datetimepicker'])); ?>

														<div class="input-group-append">
															<span class="input-group-text">
																<i class="ki ki-calendar"></i>
															</span>
														</div>
													</div>
												</div>

                                                <div class="col-lg-3 mb-lg-5 mb-6">
                                                <label>View status</label>
                                                <?php echo e(Form::select('is_read',[''=>trans('All'),'1'=>'Read','0'=>'Unread'],((isset($searchVariable['is_read'])) ? $searchVariable['is_read'] : ''), ['class' => 'form-control select2init'])); ?>

                                            	</div>

												<div class="col-lg-3 mb-lg-5 mb-6">
                                                <label>Status</label>
                                                <?php echo e(Form::select('status',[''=>trans('All'),'open'=>'Open','on_going'=>'On Going','close'=>'Close'],((isset($searchVariable['status'])) ? $searchVariable['status'] : ''), ['class' => 'form-control select2init'])); ?>

                                            	</div>
												
											</div>

											<div class="row mt-8">
												<div class="col-lg-12">
													<button class="btn btn-primary btn-primary--icon"
														id="kt_search">
														<span>
															<i class="la la-search"></i>
															<span>Search</span>
														</span>
													</button>
													&nbsp;&nbsp;
													
													<a href='<?php echo e(route("$modelName.index")); ?>'  class="btn btn-secondary btn-secondary--icon">
														<span>
															<i class="la la-close"></i>
															<span>Clear Search</span>
														</span>
													</a>

													<a href="<?php echo e(URL::to('adminpnlx/contact-us-enquiry').'?status=archive'); ?>" class=" mx-3 btn btn-secondary btn-info">
														<span>
														
															<span>View Archive</span>
														</span>
													</a>

												</div>
											</div>
										
										<!--begin: Datatable-->
										<hr>
									</div>
								</div>
							</div>
							<div class="dataTables_wrapper ">
								<div class="table-responsive">
									<table
										class="table dataTable table-head-custom table-head-bg table-borderless table-vertical-center"
										id="taskTable">
										<thead>
											<tr class="text-uppercase">
												<th class="<?php echo e((($sortBy == 'name' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'name' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
													<?php echo e(link_to_route(
														"$modelName.index",
														trans("Name"),
														array(
														'sortBy' => 'name',
														'order' => ($sortBy == 'name' && $order == 'desc') ? 'asc' : 'desc',
														$query_string
														)
														)); ?>

												</th>
												<th class="<?php echo e((($sortBy == 'email' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'email' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
													<?php echo e(link_to_route(
														"$modelName.index",
														trans("Email"),
														array(
														'sortBy' => 'email',
														'order' => ($sortBy == 'email' && $order == 'desc') ? 'asc' : 'desc',
														$query_string
														)
														)); ?>

												</th>


                                                <th class="<?php echo e((($sortBy == 'mobile_number' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'mobile_number' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
													<?php echo e(link_to_route(
														"$modelName.index",
														trans("Mobile Number"),
														array(
														'sortBy' => 'mobile_number',
														'order' => ($sortBy == 'mobile_number' && $order == 'desc') ? 'asc' : 'desc',
														$query_string
														)
														)); ?>

												</th>

											
												<th class="<?php echo e((($sortBy == 'subject' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'subject' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
													<?php echo e(link_to_route(
														"$modelName.index",
														trans("Subject"),
														array(
														'sortBy' => 'subject',
														'order' => ($sortBy == 'subject' && $order == 'desc') ? 'asc' : 'desc',
														$query_string
														)
														)); ?>

												</th>
												<th class="<?php echo e((($sortBy == 'status' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'status' && $order == 'asc') ? 'sorting_asc' : 'sorting'))); ?>">
													<?php echo e(link_to_route(
														"$modelName.index",
														trans("Status"),
														array(
														'sortBy' => 'status',
														'order' => ($sortBy == 'status' && $order == 'desc') ? 'asc' : 'desc',
														$query_string
														)
														)); ?>

												</th>
												
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if(!$results->isEmpty()): ?>
												<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr>
												
														<td>
																<div class="text-dark-75 mb-1 font-size-lg">
																	<?php echo e(!empty($result->name)?ucfirst($result->name):''); ?>

																</div>
														
														</td>
														<td>
														
																<div class="text-dark-75 mb-1 font-size-lg">
																	<?php echo e(!empty($result->email)?$result->email:''); ?>

																</div>
														
														</td>


                                                        <td>
														
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                <?php echo e(!empty($result->mobile_number)?$result->mobile_number:''); ?>

                                                            </div>
                                                    
                                                    </td>


														<td>
														
																<div class="text-dark-75 mb-1 font-size-lg">
																	<?php echo e(!empty($result->subject)?$result->subject:''); ?>

																</div>
														
														</td>

                                                        <td>
														<?php if($result->status == 'archive'): ?>
														<span class="label label-lg label-light-danger label-inline mb-1">Archive</span>	
														<?php else: ?>
															
																<?php if($result->status=='open'): ?>
																<span class="label label-lg label-light-success label-inline mb-1">Open</span>
																<?php elseif($result->status=='on_going'): ?>
																<span class="label label-lg label-light-warning label-inline mb-1">On Going</span>
																<?php elseif($result->status=='close'): ?>
																<span class="label label-lg label-light-danger label-inline mb-1">Closed</span>
																<?php endif; ?>
																<br>
																<?php if($result->is_read==1): ?>
																<span class="label label-lg label-light-success label-inline">Read</span>
																<?php else: ?>
																<span class="label label-lg label-light-danger label-inline">Unread</span>
																<?php endif; ?>
																
														<?php endif; ?>
                                                        </td>
														
														<td>

														<a href='<?php echo e(route("$modelName.view","$result->id")); ?>'
																class="btn btn-icon btn-light btn-hover-primary btn-sm"
																data-toggle="tooltip" data-placement="top"
																data-container="body" data-boundary="window" title=""
																data-original-title="View">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink"
																		width="24px" height="24px" viewBox="0 0 24 24"
																		version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path
																				d="M12.8434797,16 L11.1565203,16 L10.9852159,16.6393167 C10.3352654,19.064965 7.84199997,20.5044524 5.41635172,19.8545019 C2.99070348,19.2045514 1.55121603,16.711286 2.20116652,14.2856378 L3.92086709,7.86762789 C4.57081758,5.44197964 7.06408298,4.00249219 9.48973122,4.65244268 C10.5421727,4.93444352 11.4089671,5.56345262 12,6.38338695 C12.5910329,5.56345262 13.4578273,4.93444352 14.5102688,4.65244268 C16.935917,4.00249219 19.4291824,5.44197964 20.0791329,7.86762789 L21.7988335,14.2856378 C22.448784,16.711286 21.0092965,19.2045514 18.5836483,19.8545019 C16.158,20.5044524 13.6647346,19.064965 13.0147841,16.6393167 L12.8434797,16 Z M17.4563502,18.1051865 C18.9630797,18.1051865 20.1845253,16.8377967 20.1845253,15.2743923 C20.1845253,13.7109878 18.9630797,12.4435981 17.4563502,12.4435981 C15.9496207,12.4435981 14.7281751,13.7109878 14.7281751,15.2743923 C14.7281751,16.8377967 15.9496207,18.1051865 17.4563502,18.1051865 Z M6.54364977,18.1051865 C8.05037928,18.1051865 9.27182488,16.8377967 9.27182488,15.2743923 C9.27182488,13.7109878 8.05037928,12.4435981 6.54364977,12.4435981 C5.03692026,12.4435981 3.81547465,13.7109878 3.81547465,15.2743923 C3.81547465,16.8377967 5.03692026,18.1051865 6.54364977,18.1051865 Z"
																				fill="#000000" />
																		</g>
																	</svg>
																</span>
															</a>
														
															<?php if($result->status == 'open'): ?>

															<a title="Mark as Close" href='<?php echo e(route("$modelName.status",array($result->id,'close'))); ?>' class="btn btn-icon btn-light btn-hover-success btn-sm status_any_item" data-toggle="tooltip" data-placement="top"
																	data-container="body" data-boundary="window"
																	data-original-title="Activate">
																	<span class="svg-icon svg-icon-md svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
																		</g>
																		</svg>
																	</span>
																</a> 

																<a  title="Mark as On Going" href='<?php echo e(route("$modelName.status",array($result->id,'on_going'))); ?>' class="btn btn-icon btn-light btn-hover-danger btn-sm status_any_item" data-toggle="tooltip" data-placement="top"
																	data-container="body" data-boundary="window"
																	data-original-title="Deactivate">
																	<span class="svg-icon svg-icon-md svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="#000000"/>
																		</g>
																		</svg>
																	</span>
																</a>
														
																

																<?php elseif($result->status == 'on_going'): ?>
																<a title="Mark as Close" href='<?php echo e(route("$modelName.status",array($result->id,'close'))); ?>' class="btn btn-icon btn-light btn-hover-success btn-sm status_any_item" data-toggle="tooltip" data-placement="top"
																	data-container="body" data-boundary="window"
																	data-original-title="Activate">
																	<span class="svg-icon svg-icon-md svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
																		</g>
																		</svg>
																	</span>
																</a> 
																<?php elseif($result->status == 'close'): ?>
																<a  title="Click To Archive" href='<?php echo e(route("$modelName.status",array($result->id,'archive'))); ?>' class="btn btn-icon btn-light btn-hover-danger btn-sm status_any_item" data-toggle="tooltip" data-placement="top"
																	data-container="body" data-boundary="window"
																	data-original-title="Deactivate">
																	<span class="svg-icon svg-icon-md svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000"/>
																		</g>
																		</svg>
																	</span>
																</a>

															<?php endif; ?>
	
														</td>	
														
														
													</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
											<?php else: ?>
												<tr>
													<td colspan="6" style="text-align:center;"> <?php echo e(trans("Record not found.")); ?></td>
												</tr>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<?php echo $__env->make('pagination.default', ['results' => $results], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php echo e(Form::close()); ?> 
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->

<script>
	$(document).ready(function () {
		$('#datepickerfrom').datetimepicker({
			format: 'YYYY-MM-DD'
		});
		$('#datepickerto').datetimepicker({
			format: 'YYYY-MM-DD'
		});
		
		
    });
	function page_limit() {
		$("form").submit();
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ludo_king\resources\views/admin/ContactQuery/index.blade.php ENDPATH**/ ?>