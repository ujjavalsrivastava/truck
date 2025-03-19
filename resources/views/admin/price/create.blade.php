
@extends('admin.layout.master')

@section('title', 'Terms ERP - Dashboard')

@section('style')
<style>
	 .dropdown {
            position: relative;
            display: inline-block;
			z-index: 1;
        }
        .dropdown-button {
          
            color: black;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
           
        }
        .dropdown-content {
			display: none;
    position: absolute;
    background-color: white;
    color: black;
	min-width: 120px;
    right: -121px;
    bottom: -30px;
    border-radius: 5px;
    overflow: hidden;
	box-shadow: 0px 10px 30px 0px rgba(82, 63, 105, 0.05);
        }
        .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }

		.dropdown.btn{
			background: none !important;
		}

		.dropdown.btn:hover,
		.btn.btn-active-light-primary:hover:not(.btn-active){
			background: none !important;
		}

		.pt{
			padding-top: 15px;
		}

	</style>

@endsection
@section('content')

	<!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
    <form class="form"  id="truck-add-form" >
	<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add Price</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Add Price</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									
								</div>
							
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
													<div class="fw-bold me-5">
													<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
                                        <form id="addDealerForm">
										<div class="row">
                                          
                                                                <div class="col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="Name" name="name" required  />
																
																<!--end::Input-->
															</div>
															
															<div class="col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">description</label>
																<input type="text" class="form-control form-control-solid"  name="description" required />
																</div>
															<div class="pt col-sm-6">
																<label class=" required fs-6 fw-semibold mb-2">Price</label>
																<input type="number" class="form-control form-control-solid" placeholder="Price" name="Price" required />
																</div>
															

																
                                                           
                                                            <div class="pt col-sm-6">
                                                            <label class=" required fs-6 fw-semibold mb-2">Features</label>
                                                            <div class="d-flex align-items-center mt-3">
																<!--begin::Option-->
																<label class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
																	<input class="form-check-input" name="features[]" type="checkbox" value="Limited truck listings">
																	<span class="fw-semibold ps-2 fs-6">Limited truck listings</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label class="form-check form-check-custom form-check-inline form-check-solid is-valid">
																	<input class="form-check-input" name="features[]" type="checkbox" value="Basic support">
																	<span class="fw-semibold ps-2 fs-6">Basic support</span>
																</label>
																<!--end::Option-->
															</div>
                                                            </div>
                                                           
															 <div class="pt col-sm-12">
															 
														<button type="submit" id="kt_modal_add_customer_submit"  class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait... 
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														</div>
														</div>
														<!--end::Scroll-->
													</div>
    </form>
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--begin::Modals-->
									
                                     


									
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
    </form>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

                        
                        @endsection

@section('script')
<script>
$(document).ready(function () {
            document.getElementById("truck-add-form").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page
 

    try {


		const form = e.target;
		const formData = new FormData(form);



		var response = await axios.post("{{ env('BASEURL').'truck/pricing-plans' }}/", formData, {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });

	

        console.log(response);

        if (response.status === 201) {
            
            $('#truck-add-form')['0'].reset();
            successAlert(response.data.message);
            
            window.location.href = "url('admin/price-list')";
        } else {
            errorAlert(response.data.message);
        }
    } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
});


document.getElementById("truck-add-form-edit").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page
 

    try {

       var edit_id = $("input[name=edit_id]").val();
		const form = e.target;
		const formData = new FormData(form);



		var response = await axios.put("{{ env('BASEURL').'truck/pricing-plans' }}/"+edit_id, formData, {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });

	

        console.log(response);

        if (response.status === 201) {
            gettruckList();
            $('#kt_modal_edit').modal('hide');
            $('#truck-add-form')['0'].reset();
            successAlert(response.data.message);
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
