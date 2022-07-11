<div class="card shadow clearfix h-100">
	<div class="card-header">
		<h4 class="text-center">
			Account Security
		</h4>
	</div>

	<div class="card-body">

		<div class="d-flex justify-content-center mb-2">
			<img src="/images/icons/security-icon.png" class="rounded-circle shadow" style="width: 9rem;">
		</div>

		<p>
			Manage your account security configurations below;
		</p>

		<h4 class="mt-2">
			Account Login
		</h4>
		<p>
			Update your current login password below;
		</p>

		<form method="POST" action="/account/update/password">
			<div class="py-2">
				<label class="mb-1">
					Current Password
				</label>
				<input type="password" name="old" class="form-control form-control-lg">
			</div>

			<div class="py-2">
				<label class="mb-1">
					New Password
				</label>
				<input type="password" name="new_password" class="form-control form-control-lg">
			</div>

			<div class="py-2">
				<label class="mb-1">
					Confirm Password
				</label>
				<input type="password" name="confirmation" class="form-control form-control-lg">
			</div>

			<div class="py-2">
				<button class="btn btn-primary px-3 px-sm-4">
					<i class="fa fa-check me-1"></i> save
				</button>
			</div>

		</form>

		<h6>
			NOTE:
		</h6>
		<p>
			You may get locked out of your account!
		</p>


		<h5 class="mt-3">
			Account Sessions
		</h5>
		
		<x-users.profiles.browser-sessions />

	</div>

</div>