<form method="POST" action="/account/profile/complete/">
	@csrf
	<div class="row align-tems-sm-strech">
		<div class="col-12 col-sm-6 py-2">
			<x-forms.profiles.account-data.profile-data />
		</div>

		<div class="col-12 col-sm-6 py-2">
			<x-forms.profiles.account-data.contact-data />
		</div>


	</div>

	<div class="py-3"></div>

	<div class="row ">
		<div class="col-12 col-sm-auto">
			<x-forms.profiles.account-data.submit-form />
		</div>
	</div>
</form>