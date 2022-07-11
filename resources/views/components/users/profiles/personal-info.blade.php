<div class="card shadow clearfix h-100">
	<div class="card-header">
		<h4 class="text-center">
			Personal Information
		</h4>
	</div>

	<div class="card-body">

		<p>
			Manage your personal profile information below;
		</p>

		<div class="py-3 d-flex justify-content-center">
			<button class="btn btn-clear" type="button">
				<img src="{{Auth::user()->image_url ?? ''}}" class="rounded shadow">
			</button>
			
		</div>

		<h4 class="text-center">
			{{Auth::user()->fname ?? ''}} {{Auth::user()->mname ?? ''}} {{Auth::user()->lname ?? ''}}
		</h4>
		<div class="d-flex justify-content-center">
			<button class="py-0 btn btn-sm px-3 btn-primary"><i class="fa fa-edit me-1"></i> edit</button>
		</div>
		<hr>
		<h4 class="text-bold">
			Account Contacts
		</h4>
		<h5 class="mt-3">
			Email Address
		</h5>
		<p>
			Your current email address was confirmed on <span class="text-primary">{{Auth::user()->email_verified_at ?? ''}}</span>
		</p>
		<p class="text-underline">
			<b class="me-1 me-sm-2">Current:</b> {{Auth::user()->email ?? ''}}
		</p>
		
		<h5 class="mt-3">
			Telephone Number
		</h5>
		<p>
			Your current telephone number is: <span class="text-primary">not confirmed</span>
		</p>
		<p class="text-underline">
			<b class="me-1 me-sm-2">Current:</b> +{{Auth::user()->country_code ?? ''}}-{{Auth::user()->telephone ?? ''}}
		</p>
		<button class="btn mt-2 btn-sm py-0 btn-primary">
			<i class="fa fa-edit me-1"></i> edit
		</button>

		<h5 class="mt-3">
			Postal Address
		</h5>
		<div class="py-3">
			<form action="/account/update/address">
				<textarea class="form-control form-control-lg" style="resize: none;">{{Auth::user()->postal_address ?? ''}}</textarea>
				<hr>
				<button class="btn btn-primary px-3 px-sm-4">
					<i class="fa fa-check me-1"></i> update 
				</button>
			</form>
		</div>

	</div>

</div>