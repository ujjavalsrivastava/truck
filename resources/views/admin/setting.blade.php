
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
	<form id="addDealerForm">
	<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Store Setting</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Setting</li>
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
												Store Setting
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
                                            
										             <div class="row">
                                          
                                                                <div class="col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="Name" value="{{@$setting['store']['name']}}" name="store['name']" required  />
																<input type="hidden" name="edit_id" id="edit_id" value="{{@$setting['_id']}}">
																<!--end::Input-->
															</div>
															
															<div class="col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">Email</label>
																<input type="text" class="form-control form-control-solid" value="{{@$setting['store']['email']}}" name="store['email']" required />
																</div>
															    <div class="pt col-sm-6">
																<label class=" required fs-6 fw-semibold mb-2">Mobile</label>
																<input type="text" class="form-control form-control-solid" placeholder="Mobile" value="{{@$setting['store']['mobile']}}" name="store['mobile']" required />
																</div>
																<div class="pt col-sm-6">
																<label class=" required fs-6 fw-semibold mb-2">Address</label>
																<input type="text" class="form-control form-control-solid" placeholder="Mobile" value="{{@$setting['store']['address']}}" name="store['address']" required />
																</div>
															

																<div class="pt col-sm-6">
																<label class="fs-6 fw-semibold mb-2">Image</label>
																<input type="file" class="form-control form-control-solid"  name="logo"   />
                                                               
																</div>

																<div class="pt col-sm-12">
																<label class=" required fs-6 fw-semibold mb-2">Descripation</label>
																<textarea  class="form-control form-control-solid"   name="store['description']" required >{{@$setting['store']['description']}}</textarea>
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
                                              
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->

									
									<!--begin::Modals-->

									
									
                                     


									
									<!--end::Modals-->
								</div>

								<br/>

								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												Add Customer Damain
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
                                                
										             <div class="row">
                                          
                                                                <div class="col-sm-12">
																<label class="required fs-6 fw-semibold mb-2">Store Link </label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="Store" value="{{@$setting['domain']['storeLink']}}"  name="domain[storeLink]" required  />
																
																<!--end::Input-->
															</div>
															
															<div class="pt col-sm-12">
																<label class="required fs-6 fw-semibold mb-2">Add Customer Domain</label>
																<input type="text" class="form-control form-control-solid"  name="domain[name]" value="{{@$setting['domain']['name']}}" required />
																</div>
															   
																<div class="pt col-sm-12">
																<label class="required fs-6 fw-semibold mb-2">URL</label>
																<input type="text" class="form-control form-control-solid"  name="domain[url]" value="{{@$setting['domain']['url']}}" required />
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
                                              
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->

									
									<!--begin::Modals-->

									
									
                                     


									
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
							</form>
						</div>
						<!--end::Content wrapper-->

                        
                        @endsection

@section('script')
<script>

  



$(document).ready(function () {
            document.getElementById("addDealerForm").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page
 
		  
           try {
            const form = e.target;
            const formData = new FormData(form);

			var response = ``;
			
if($('#edit_id').val() == ''){
	 response = await axios.post("{{ env('BASEURL').'settings' }}", formData, {
            headers: { 'Content-Type': 'multipart/form-data',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
}else{
	 response = await axios.put("{{ env('BASEURL').'settings' }}", formData, {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
}
      

        console.log(response);

        if (response.status === 201) {
           // Trigger modal close
            successAlert(response.data.message);
			window.reload();
            
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
