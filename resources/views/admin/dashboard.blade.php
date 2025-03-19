@extends('admin.layout.master')

@section('title', 'Terms ERP - Dashboard')

@section('style')
<style>
	.card-pd{
		padding: 5rem 2.25rem !important;

	}
	</style>
@endsection
@section('content')

<!--begin::Content wrapper-->


<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"> Dashboard</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="javascript:void(0)" class="text-muted text-hover-primary">Welcome {{session()->get('user')['name']}}..!</a>
											</li>
											<!--end::Item-->
											
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Row-->
									<div class="row gx-5 gx-xl-10 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
											<!--begin::Card widget 16-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #dfffea">
												<!--begin::Header-->
												<div class="card-header pt-5" style="padding: 5rem 2.25rem;">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{count($truckList)}}</span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class=" pt-1 fw-semibold fs-6">Total Trucks</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												
												<!--end::Card body-->
											</div>
											<!--end::Card widget 16-->
											<!--begin::Card widget 7-->
											
											<!--end::Card widget 7-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
											<!--begin::Card widget 17-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #dfffea;">
											
												<!--begin::Header-->
												<div class="card-header pt-5 " style="padding: 5rem 2.25rem;">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{count($custList)}}</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-500 pt-1 fw-semibold fs-6">Total Customer</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->

												<!--end::Card body-->
											</div>
											<!--end::Card widget 17-->
											<!--begin::List widget 25-->
											
											<!--end::LIst widget 25-->
										</div>
										<!--end::Col-->

										<!--begin::Col-->
										<div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
											<!--begin::Card widget 16-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #dfffea;">
												<!--begin::Header-->
												<div class="card-header pt-5" style="padding: 5rem 2.25rem;">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class=" fs-2hx fw-bold  me-2 lh-1 ls-n2">{{count($quoteList)}}</span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class=" pt-1 fw-semibold fs-6">Total Quote</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												
												<!--end::Card body-->
											</div>
											<!--end::Card widget 16-->
											<!--begin::Card widget 7-->
											
											<!--end::Card widget 7-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
											<!--begin::Card widget 17-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #dfffea;">
										
												<!--begin::Header-->
												<div class="card-header pt-5 " style="padding: 5rem 2.25rem;">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
																	<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-3x fw-bold text-gray-900 me-2 lh-1 ls-n2">876</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-500 pt-1 fw-semibold fs-6">Store Views</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->

												<!--end::Card body-->
											</div>
											<!--end::Card widget 17-->
											<!--begin::List widget 25-->
											
											<!--end::LIst widget 25-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
									
										<!--end::Col-->
									</div>
									<!--end::Row-->
									
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5" style="margin-top:-100px;">
										<!--begin::Col-->
										<div class="col-xl-8">
											<!--begin::Table widget 14-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Recent Trucks</span>
														
													</h3>
													<!--end::Title-->
													
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="p-0 pb-3 min-w-175px text-start">Trucks Name</th>
																	<th class="p-0 pb-3 min-w-100px text-start">Trucks Type</th>
																	<th class="p-0 pb-3 min-w-100px text-start">Price</th>
																	<th class="p-0 pb-3 min-w-175px text-start pe-12">Date</th>
																	<th class="p-0 pb-3 w-125px text-start pe-7">Inventory Status</th>
																	
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																@foreach($truckList as $row)
																<tr>
																	
																	<td class="text-start pe-0">
																		<span class="text-gray-500 fw-semibold d-block fs-7">{{$row['name']}}</span>
																	</td>
																	<td class="text-start pe-0">
																		<span class="text-gray-500 fw-semibold d-block fs-7">{{$row['category']['name']}}</span>
																	</td>
																	<td class="text-start pe-0">
																		<span class="text-gray-500 fw-semibold d-block fs-7">{{$row['price']}}</span>
																	</td>
																	<td class="text-start pe-0">
																		<span class="text-gray-500 fw-semibold d-block fs-7">{{date('d/M/Y',strtotime($row['createdAt']))}}</span>
																	</td>
																	<td class="text-start pe-12">
																		<span class="badge py-3 px-4 fs-7 badge-light-primary">{{$row['inventoryStatus']}}</span>
																	</td>
																	
																</tr>
																@endforeach
																
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 14-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Table widget 14-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Recent Leads</span>
														
													</h3>
													<!--end::Title-->
													
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="p-0 pb-3 min-w-175px text-start">Truck Name</th>
																	<th class="p-0 pb-3 min-w-100px text-end">Email</th>
																	
																	<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																@foreach($quoteList as $row)
																<tr>
																<td class="text-start pe-0">
																		<span class="text-gray-500 fw-semibold d-block fs-7">{{$row['buyerName']}}</span>
																	</td>
																	<td class="text-start pe-0">
																		<span class="text-gray-500 fw-semibold d-block fs-7">{{$row['buyerEmail']}}</span>
																	</td>
																</tr>
																@endforeach
																
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 14-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

                        @endsection

@section('script')

@endsection