

@extends('admin.layout.master')

@section('title', 'Terms ERP - Dashboard')

@section('style')


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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"></h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Pricing</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											
											
										</div>
										<!--end::Filter menu-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Pricing card-->
									<div class="card" id="kt_pricing">
										<!--begin::Card body-->
										<div class="card-body p-lg-17">
											<!--begin::Plans-->
											<div class="d-flex flex-column">
												<!--begin::Heading-->
												<div class="mb-13 text-center">
													<h1 class="fs-2hx fw-bold mb-5">Choose Your Plan</h1>
													<div class="text-gray-600 fw-semibold fs-5">If you need more info about our pricing, please check 
													<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
												</div>
												<!--end::Heading-->
												
												<!--begin::Row-->
												<div class="row g-10">
                                                    @foreach($price as $row)
													<!--begin::Col-->
													<div class="col-xl-4">
														<div class="d-flex h-100 align-items-center">
															<!--begin::Option-->
															<div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
																<!--begin::Heading-->
																<div class="mb-7 text-center">
																	<!--begin::Title-->
																	<h1 class="text-gray-900 mb-5 fw-bolder">{{ucwords($row['name'])}}</h1>
																	<!--end::Title-->
																	<!--begin::Description-->
																	<div class="text-gray-600 fw-semibold mb-5">{{ucwords($row['description'])}}</div>
																	<!--end::Description-->
																	<!--begin::Price-->
																	<div class="text-center">
																		<span class="mb-2 text-primary">$</span>
																		<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">{{$row['price']}}</span>
																		<span class="fs-7 fw-semibold opacity-50">/ 
																		<span data-kt-element="period">Mon</span></span>
																	</div>
																	<!--end::Price-->
																</div>
																<!--end::Heading-->
																<!--begin::Features-->
																<div class="w-100 mb-10">
																	<!--begin::Item-->
                                                                    @foreach($row['features'] as $f)
																	<div class="d-flex align-items-center mb-5">
																		<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">{{$f}}</span>
																		<i class="ki-duotone ki-check-circle fs-1 text-success">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
                                                                    @endforeach
																	<!--end::Item-->
															
																	<!--end::Item-->
																</div>
																<!--end::Features-->
																<!--begin::Select-->
																<a href="#" class="btn btn-sm btn-primary">Select</a>
																<!--end::Select-->
															</div>
															<!--end::Option-->
														</div>
													</div>
													<!--end::Col-->
                                                    @endforeach
													
												</div>
												<!--end::Row-->
											</div>
											<!--end::Plans-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Pricing card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

                        <!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create App</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="priceForm">
									<!--begin::Step 1-->
									<div class="current" data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												

                                                <!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
													<span class="required">Name</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="name" class="form-control form-control-lg form-control-solid"  placeholder="" value="" />
												<!--end::Input-->

                                                <!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
													<span class="required">Description</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="description" class="form-control form-control-lg form-control-solid"  placeholder="" value="" />
												<!--end::Input-->

                                                <!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
													<span class="required">Price</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="number" class="form-control form-control-lg form-control-solid" name="price" placeholder=""  />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Category</span>
													
												</label>
												<!--end::Label-->
												<!--begin:Options-->
												<div class="fv-row">
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-compass fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Up to 25 truck listings</span>
																<span class="fs-7 text-muted">Up to 25 truck listings</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" name="features[]" value="Up to 25 truck listings" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->

                                                    <!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-compass fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Priority email support</span>
																<span class="fs-7 text-muted">Priority email support</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" name="features[]" value="Priority email support" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->

													
													
												</div>
												<!--end:Options-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 1-->

									<!--end::Step 5-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div class="me-2">
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<i class="ki-duotone ki-arrow-left fs-3 me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Back</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
									    <div>
											
											<button type="submit" class="btn btn-lg btn-primary" >Submit 
											<i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></button>
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
                        @endsection

@section('script')
<script>

$(document).ready(function () {
            document.getElementById("priceForm").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page

    const form = e.target;
    const formData = new FormData(form);


    try {
        const response = await axios.post("{{ env('BASEURL').'truck/pricing-plans' }}", formData, {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });

        console.log(response);

        if (response.status === 201) {
            
            successAlert(response.data.message);
            window.location.reload();
            
        } else {
            errorAlert(response.data.message);
        }
    } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
});
});


    </script>
@endsection