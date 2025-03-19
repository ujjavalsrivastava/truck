
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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add Trucks</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Trucks</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									
								</div>
							
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">

							<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Card-->
									<div class="card">
										
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
										<div class="row">
                                                                <div class="pt  col-sm-8">
																<label class="required fs-6 fw-semibold mb-2">Vin No</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="vin" name="vin" required  />
																
																<!--end::Input-->
															</div>
															
															<div class="col-sm-4">
																
																<button  type="button" id="kt_modal_add_populate" onclick="populate(this)" class="btn btn-primary" style="margin-top: 40px;">
															<span class="indicator-label">populate</span>
															<span class="indicator-progress">Please wait... 
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														         </button>
																
																<!--end::Input-->
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
										<div class="row">
                                                               
										<div class="col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">Mileage</label>
																<input type="text" class="form-control form-control-solid"  name="mileage" required />
																</div>
															<div class="col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">Engin Hour</label>
																<input type="text" class="form-control form-control-solid"  name="engin_hour" required />
																</div>
															<div class=" col-sm-6">
																<label class=" required fs-6 fw-semibold mb-2">Price</label>
																<input type="text" class="form-control form-control-solid" placeholder="Price.." name="price" required />
																</div>
																<div class="pt col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">Condition</label>
																<select class="form-control" name="condition">
																<option value="used">Used</option>
																	<option value="new" >New</option>
																</select>
																</div>

																<div class="pt col-sm-6">
																<label class="fs-6 fw-semibold mb-2">Images</label>
																<input type="file" class="form-control form-control-solid" multiple  name="images" required />
																</div>

																<div class="pt col-sm-6">
																<label class="required fs-6 fw-semibold mb-2">Name</label>
																<input type="text" class="form-control form-control-solid"   name="name" required />
																</div>

																<div class="pt col-sm-6">
																<label class="fs-6 fw-semibold mb-2">Category</label>
																<select class="form-control" name="category" required>
																@foreach($category as $row)
																<option value="{{$row['_id']}}">{{$row['name']}}</option>
																@endforeach
																
																</select>
																</div>
                                                            </div>
                                                            <div class="row" id="truckDetail">
                                                             
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
	</form>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

                        
                        @endsection

@section('script')
<script>


	async function populate(thisval) {
		
	
         $(thisval).text('Processing...')
		try {



let vin	= $("input[name=vin]").val();

let year	= $("input[name=year]").val();
if(vin ==''){
   errorAlert('Vin No is required');
   return false;
}


$("button[type=submit]").text('processing....');


   var response = await axios.get(`https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVinValues/${vin}?format=json`, {
	   headers: { 'Content-Type': 'application/json' }
   });



   console.log(response.data.Results[0]);

   if (response.status === 200) {
    $(thisval).text('Populate')
	
	$('#kt_modal_add_customer_submit').show();
	
	$("button[type=submit]").text('Submit');
	   let html = ``;

	    if(response.data.Results[0]['ErrorText'] && response.data.Results[0]['ErrorCode'] != '0' ){
			errorAlert(response.data.Results[0]['ErrorText'],15000);
			return;
		}
	  
	   $.each(response.data.Results[0], function(key, value) {

		//const str = "Hello, this is a test string.";
         // const regex = /test/;  // Regular expression to search for "test"
		 const regex = /error/i; // 'i' makes it case-insensitive

        const isError = regex.test(key);
      
           if(!isError){
            if(key != 'VIN'){
			html +=`<div class="pt col-sm-6">
				   <label class="fs-6 fw-semibold mb-2">${camelToSpaced(key)}</label>
				   <input type="text" class="form-control form-control-solid"  name="${firstCharLower(key)}" value="${value}" />
				   </div>`;   
			}
		   }
		  
	});
	$('#truckDetail').html(html)
	   
	  // successAlert(response.data.message);
   } else {
	   errorAlert(response.data.message);
   }
} catch (error) {
   console.error(error);
   errorAlert(error.response.data.message);
}

	}

	function firstCharLower(str) {
    if (!str) return str; // Handle empty string case
    return str.charAt(0).toLowerCase() + str.slice(1);
}

	function camelToSpaced(str) {
    // Add space before uppercase letters that follow lowercase letters or other uppercase letters
    return str
        .replace(/([a-z])([A-Z])/g, '$1 $2')  // Add space between lowercase and uppercase
        .replace(/([A-Z])([A-Z][a-z])/g, '$1 $2')  // Add space between consecutive uppercase followed by lowercase
        .split(' ')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
        .join(' ');
}

$(document).ready(function () {
            document.getElementById("truck-add-form").addEventListener("submit", async function (e) {
           e.preventDefault(); // Prevent form from reloading the page
 
		  
		   try {

$('#kt_modal_add_customer_submit').text('Processing...')


const form = e.target;
const formData = new FormData(form);

// const serializeData = {};
//         formData.forEach((value, key) => {
// 			if(value != ''){
// 				serializeData[key] = value;
// 			}
        
//         });

var response = await axios.post("{{ env('BASEURL').'dealer/trucks' }}", formData, {
	headers: { 'Content-Type': 'multipart/form-data',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
});



console.log(response);
$('#kt_modal_add_customer_submit').text('Submit');
if (response.status === 201) {
	
	window.location.href = "{{url('admin/truck-list')}}";
} else {
	errorAlert(response.data.message);
}
} catch (error) {
	$('#kt_modal_add_customer_submit').text('Submit');
errorAlert(error.response.data.message);
}

   
});
});



</script>

@endsection
