<div class="clearfix nav-cards notif-menu shadow card" id="notif-menu-card">
	<div class="card-header">
		<h4 class="text-center">
			Account Notifications
		</h4>
	</div>

	<div class="card-body">
		<div class="p-4 d-flex justify-content-center align-items-center">
			<h3 class="text-center">
				<i class="fa fa-spinner fa-pulse"></i> </br>
				Loading data...
			</h3>
		</div>

	</div>

	<div class="card-footer d-flex justify-content-center py-3">
		<button class="btn btn-gold btn-md rounded-pill w-75">
			browse all
		</button>
	</div>

</div>




<div class="clearfix nav-cards notif-menu shadow card" id="notif-menu-card">
	<div class="card-header">
		<h4 class="text-center">
			Account Notifications
		</h4>
	</div>

	<div class="card-body">
		<div class="p-4 d-flex justify-content-center align-items-center">
			<h3 class="text-center">
				<i class="fa fa-spinner fa-pulse"></i> </br>
				Loading data...
			</h3>
		</div>

	</div>

	<div class="card-footer d-flex justify-content-center py-3">
		<button class="btn btn-gold btn-md rounded-pill w-75">
			browse all
		</button>
	</div>

</div>





<div class="clearfix nav-cards account-menu shadow card " id="account-menu-card">
	<div class="card-header">
		<h4 class="text-center">
			Account Manager
		</h4>
	</div>

	<div class="card-body">
		<div class="d-flex justify-content-center">
			<img src="/images/icons/user-icon.png" class="shadow rounded-circle user-icon">
		</div>

		<div class="d-flex justify-content-center py-2">
			<a href="/user/profile" class="btn btn-sm btn-gold py-1">manage account</a>
		</div>

		<h4 class="mb-0 text-center">
			Abdirahim Abdi
		</h4>

		<span class="d-block text-center text-primary">
			cespavtech@gmail.com
		</span>

	</div>

		<form action="/logout" method="POST">
			<div class="card-footer d-flex justify-content-center py-3">
				@csrf
				<button class="btn btn-danger btn-md rounded-pill w-75 logout-button" type="submit">
					Logout
				</button>
			</div>
		</form>

</div>



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
  	<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Account Report</h5>
  </div>
  <div class="offcanvas-body">

  	<div class="d-flex p-3 justify-content-center align-items-center">
  		<img src="/images/icons/empty-state.png" class="w-100">
  	</div>
  	<h2 class="text-center">
  		Hooray!
  	</h2>
    <div class="p-3">
      <p class="text-center">
      	There is nothing to report
      </p>
    </div>

    <hr>

    <h4 class="mt-3">
    	Live Support
    </h4>

    <p>
    	You can always stay in touch by clicking below;
    </p>
    <h4>
    	 Status
    </h4>
    <p>
    	<span> <i class="fa fa-spinner fa-spin"></i> updating...</span>
    </p>

    <div class="d-flex justify-content-center align-items-center">
    	<button class="btn btn-lg btn-primary w-75 rounded-pill">
    		<i class="fa fa-message "></i> chat now
    	</button>
    </div>
    

  </div>
</div>