@if (count($errors) > 0)
	<div class="alert alert-warning alert-dismissible fade show animated fadeInRight" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li style="color:#fff;"><span class="alert-inner--icon"><i class="fe fe-info"></i></span> <span class="alert-inner--text">{{ $error }}</span></li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
@endif

@if (session()->has('flash_error'))
    <div class="alert alert-danger alert-dismissible fade show animated fadeInRight" role="alert">
        @if (is_array(session('flash_error')))
            <ul>
                @foreach (session('flash_error') as $error)
                    <li style="color:#fff;">
                        <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                        <span class="alert-inner--text">{{ $error }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
            <span class="alert-inner--text"><strong>Error!</strong> {{ session('flash_error') }}.</span>
        @endif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif







@if(Session::has('flash_success')) 
	<div class="alert alert-success alert-dismissible fade show animated fadeInRight" role="alert">
		<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
		<span class="alert-inner--text"><strong>Success!</strong> {{ Session::get('flash_success') }}</span>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div>
@endif

<div class="alert alert-danger alert-dismissible fade show mb-0 animated fadeInRight" id="errorNotification" role="alert" style="display: none;">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><span id="errorMessage"></span></span>
	
</div>

<div class="alert alert-success alert-dismissible fade show animated fadeInRight" id="successNotification" role="alert" style="display: none;">
	<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
	<span class="alert-inner--text"><strong>Success! </strong><span id="successMessage"></span></span>
	
</div>


<div class="alert alert-danger alert-dismissible fade show mb-0 animated fadeInRight" id="errorJsNotification" role="alert" style="display: none;">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><span id="errorJsMessage"></span></span>
	
</div>