
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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Quotes</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Quotes</li>
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
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														
														<th class="min-w-125px">Buyer Name</th>
														<th class="min-w-125px">Buyer Email</th>
														<th class="min-w-125px">Buyer Phone</th>
                                                        <th class="min-w-125px">Message</th>
													
                                                        <th class="min-w-125px">Status</th>
														@if(session()->get('user')['role'] == 'admin')
														<th class="min-w-125px">Dealer</th>
														@endif
														
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
        const response = await axios.get("{{ env('BASEURL').'dealer/quote-requests' }}",  {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
       console.log(response);
          var list = ``;
          $.each(response.data, function(key,val) {     
			
			var encoded = JSON.stringify(val)
           
         list += `<tr>
															<td>${val.buyerName} </td>
														<td> ${val.buyerEmail} </td>
                                                        <td> ${val.buyerPhone} </td>
                                                        <td> ${val.message} </td>
                                                          <td> ${val.status} </td>`;
														  @if(session()->get('user')['role'] == 'admin')
														list += `<th class="min-w-125px">${val.dealer?.name}</th>`;
														@endif

														list += `												</td>
													</tr>`;
                                                  
             });     
             console.log(list);
             $('.trucklist').html(list);

        
    }

	function EditTruck(id,thisval){
		var data = $(thisval).data('truck');
		$("input[name=name]").val(data.name);
		$("input[name=description]").val(data.description);
		$("input[name=edit_id]").val(data._id);
		$("img[name=image]").attr('src', data.image);
		$(`#kt_modal_add_customer`).modal('show');
		
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
	const response = await axios.delete("{{ env('BASEURL').'truck/type/' }}"+_id,  {
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


		var edit_id = $("input[name=edit_id]").val();

		const form = e.target;
		const formData = new FormData(form);

if(edit_id ==''){


    
        var response = await axios.post("{{ env('BASEURL').'truck/type' }}", formData, {
            headers: { 'Content-Type': 'multipart/form-data',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });

	}else{

		var response = await axios.put("{{ env('BASEURL').'truck/type' }}/"+edit_id, formData, {
            headers: { 'Content-Type': 'multipart/form-data',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });

	}

        console.log(response);

        if (response.status === 200) {
            
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
