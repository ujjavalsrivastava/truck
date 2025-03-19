
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

	<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Customer</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Customer</li>
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
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
													
													
													<!--begin::Add customer-->
													<a href="{{url('admin/dealer-list/create')}}"  class="btn btn-primary" >Add Dealer </a>
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
														<th class="min-w-125px">Email</th>
														<th class="min-w-125px">Mobile</th>
														<th class="min-w-125px">Image</th>
														<th class="min-w-125px">Address</th>
														<th class="min-w-125px">Status</th>

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
        try{
        const response = await axios.get("{{ env('BASEURL').'dealer' }}",  {
            headers: { 'Content-Type': 'application/json',"Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
       
          var list = ``;
          $.each(response.data, function(key,val) {     
			
			
			
         list += `<tr>
															<td>${val.name} </td>
														<td> ${val.email} </td>
															<td> ${val.mobile} </td>
														<td> <img src="${val.image}" style="height:45px"> </td>
															<td> ${val.address.street} ${val.address.city} ${val.address.state} </td>
																<td> <select class="form-control" onchange="updateStatus('${val._id}',this.value)">`; 
																if(val.status == 'pending' ){
																	 list += `<option >pending </option><option value="approved" >approved </option> <option value="rejected">rejected </option>`;
																}else if(val.status == 'approved'){
																	 list += `<option value="approved" >approved </option> <option value="rejected">rejected </option>`;
																}else if(val.status == 'rejected'){
																	list += `<option value="rejected">rejected </option><option value="approved" >approved </option> `;

																}
																
																 list += `
																 </select>
																 </td>
													</tr>`;
                                                  
             });     
             console.log(list);
             $('.trucklist').html(list);

            } catch (error) {
        console.error(error);
        errorAlert(error.response.data.message);
    }
    }

	async function EditTruck(id,thisval){
		

		const getTruckDetail = await axios.get("{{ env('BASEURL').'dealer/trucks/' }}"+id,  {
            headers: { "Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
		

		const vin = getTruckDetail.data.vin;
		const year = getTruckDetail.data.year;

		$("input[name=vin]").val(vin);
		$("input[name=year]").val(year);
		$("input[name=price]").val(getTruckDetail.data.price);
		$(`select[name^="condition"] option[value="${getTruckDetail.data.condition}"]`).prop("selected", true);
		$(`select[name^="category"] option[value="${getTruckDetail.data.category._id}"]`).prop("selected", true);


  	
	   let html = ``;
	  
	   $.each(getTruckDetail.data, function(key, value) {

		if(key != '_id' && key != 'vin' && key != 'dealer' && key != 'year' && key != 'category' && key != 'images' && key != 'createdAt' && key != '__v' && key != 'inventoryStatus'  )

			html +=`<div class="pt col-sm-6">
				   <label class="fs-6 fw-semibold mb-2">${camelToSpaced(key)}</label>
				   <input type="text" class="form-control form-control-solid"  name="${key}" value="${value}" />
				   </div>`;   
	});
	$('#edittruckDetail').html(html)
	$(`#edit_truck_form`).modal('show');
	  // successAlert(response.data.message);

		
	}

	const updateStatus = async (_id,status) => {

		Swal.fire({
  title: "Do you want to save the Update Status?",
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: "yes",
  denyButtonText: `No`
}).then(async (result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
	const response = await axios.put("{{ env('BASEURL').'dealer/profile' }}?id="+_id, {'status':status}, {
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
	$('#kt_modal_add_populate').hide();
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

if (response.status === 201) {
	 $('#kt_modal_add_customer').modal('hide');
	 $('#kt_modal_add_customer_submit').hide();
	$('#kt_modal_add_populate').show();
	$("button[type=submit]").text('Submit');
	 gettruckList();
	 $('#truckDetail').remove();
	 $('#truck-add-form')[0].reset();
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

async function inventryTruck(id,invstatus) {

	if(invstatus == 'sold'){
       var invstatus = 'available';
	}else{
		var invstatus = 'sold';
	}

	Swal.fire({
  title: "Do you want to "+invstatus,
  showDenyButton: true,
  showCancelButton: false,
  confirmButtonText: "yes",
  denyButtonText: `No`
}).then(async (result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
	try{
	const response = await axios.put("{{ env('BASEURL').'dealer/trucks/' }}"+id,  {inventoryStatus:invstatus},{
            headers: { "Authorization": `Bearer ${localStorage.getItem("access_token")}` }
        });
		if (response.status === 200) {
            gettruckList();
            successAlert(response.data.message);
        } else {
            errorAlert(response.data.message);
        }

	} catch (error) {
		console.error(error);
		errorAlert(error.response.data.message);
		}
  } 
});
}

</script>

@endsection
