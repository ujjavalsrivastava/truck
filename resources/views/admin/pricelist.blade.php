
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

	</style>

@endsection
@section('content')

	<!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

	                           <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"> Price List</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Price List</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
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
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
													
													
													<!--begin::Add customer-->
													<a href="{{url('price-list/create')}}" type="button" class="btn btn-primary" >Add Price</a>
													<!--end::Add customer-->
												</div>
												<!--end::Toolbar-->
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
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														
														<th class="min-w-125px"> Name</th>
														<th class="min-w-125px">description</th>
														<th class="min-w-125px">price</th>
                                                     
														<th class="min-w-125px">Actions</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600 trucklist">
													
												
												</tbody>
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--begin::Modals-->
									<!--begin::Modal - Customers - Add-->
									<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form"  id="truck-add-form" data-kt-redirect="apps/customers/list.html">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_customer_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">Add Price</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div  onclick="closeModal('kt_modal_add_customer')" id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
															<i class="ki-duotone ki-cross fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="name"  />
																
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															
															<!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Description</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="description" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->

                                                            <!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Price</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="price" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->

                                                            <div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Features</label>
																<!--end::Label-->
															
															</div>

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
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait... 
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Modal footer-->
												</form>
												<!--end::Form-->
											</div>
										</div>
									</div>
									<!--end::Modal - Customers - Add-->

                                    <!--begin::Modal - Customers - Add-->
									<div class="modal fade" id="kt_modal_edit" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form"  id="truck-add-form-edit" >
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_customer_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">Edit Price</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div  onclick="closeModal('kt_modal_edit')" id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
															<i class="ki-duotone ki-cross fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="name" id="edit_name"  />
																<input type="hidden" name="edit_id">
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															
															<!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Description</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="description" id="edit_description" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->

                                                            <!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Price</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="price" id="edit_price" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->

                                                            <div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold mb-2">Features</label>
																<!--end::Label-->
															
															</div>

                                                            <div class="d-flex align-items-center mt-3 feturelist">
																<!--begin::Option-->
																<label class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
																	<input class="form-check-input" name="features[]" type="checkbox" value="Limited truck listings">
																	<span class="fw-semibold ps-2 fs-6">Limited truck listings</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<!-- <label class="form-check form-check-custom form-check-inline form-check-solid is-valid">
																	<input class="form-check-input" name="features[]" type="checkbox" value="Basic support">
																	<span class="fw-semibold ps-2 fs-6">Basic support</span>
																</label> -->
																<!--end::Option-->
															</div>
															
															
														</div>
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait... 
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Modal footer-->
												</form>
												<!--end::Form-->
											</div>
										</div>
									</div>
									<!--end::Modal - Customers - Add-->
									
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

                        
                        @endsection

@section('script')
<script>
document.addEventListener("DOMContentLoaded", function () {
    gettruckList();
});
    const gettruckList = async()=>{
        const response = await axios.get("{{ env('BASEURL').'truck/pricing-plans' }}",  {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
       
          var list = ``;
          $.each(response.data, function(key,val) {     
			
			var encoded = JSON.stringify(val)
           
         list += `<tr>
															<td>${val.name} </td>
														<td> ${val.description} </td>
                                                        <td> ${val.price} </td>
                                                       
														<td >
									
 <div class="dropdown btn btn-sm btn-light btn-flex btn-center btn-active-light-primary px-0">
        <button class="dropdown-button">Action</button>
        <div class="dropdown-content">
            <a href="javascript:void(0)" data-truck='${encoded}' onclick="EditTruck('${val._id}',this)">Edit </a>
            <a href="javascript:void(0)" onclick="deleteTruck('${val._id}')">Delete </a>
            
        </div>
    </div>
													    </td>														</td>
													</tr>`;
                                                  
             });     
             console.log(list);
             $('.trucklist').html(list);

        
    }

	function EditTruck(id,thisval){
		var data = $(thisval).data('truck');
		$("#edit_name").val(data.name);
		$("#edit_description").val(data.description);
		$("input[name=edit_id]").val(data._id);
        $("#edit_price").val(data.price);
		
		$(`#kt_modal_edit`).modal('show');

        var list = ``;
          $.each(data.features, function(key,val) {     

        list +=`<label class="form-check form-check-custom form-check-inline form-check-solid me-5 is-valid">
																	<input class="form-check-input" name="features[]" type="checkbox" checked value="${val}">
																	<span class="fw-semibold ps-2 fs-6">${val}</span>
																</label>`;
         });     
             console.log(list);
             $('.feturelist').html(list);
		
	}

	const deleteTruck = async (_id) => {

		Swal.fire({
  title: "Do you want to save the Delete?",
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: "yes",
  denyButtonText: `No`
}).then(async (result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
	const response = await axios.delete("{{ env('BASEURL').'truck/pricing-plans/' }}"+_id,  {
            headers: { "Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
		if (response.status === 200) {
            gettruckList();
            successAlert(response.data.message);
        } else {
            errorAlert(response.data.message);
        }
  } 
});
		
	}

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
            gettruckList();
            $('#kt_modal_add_customer').modal('hide');
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
