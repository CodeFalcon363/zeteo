<div class="container-fluid contents py-3">

	@if (Auth::user()->role == 1)
	<x-users.admins.account-overview />
	@endif
	@if (Auth::user()->role == 2)
	<x-users.docs.account-overview />
	@endif
	@if (Auth::user()->role == 3)
	<x-users.clients.account-overview />
	@endif

</div>