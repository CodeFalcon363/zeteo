<div class="row justify-content-center">

	<div class="col-12 col-sm-6 col-md-7 col-lg-8">

		<div class="card shadow clearfix">
			<div class="card-header">
				<h4 class="text-center">
					Account Overview
				</h4>
			</div>

			<div class="card-body overflow-auto">
				<h4>
					Hello  {{Auth::user()->fname}} {{Auth::user()->lname}} 
				</h4>
				<p>
					Your new account is now ready, below you can find your new account overview, to make any changes or further customize your new account, please refer to your profile
				</p>

				<table class="table clearfix responsive-fluid">
					<thead>
						<th>
							First Name
						</th>

						<th>
							Last Name
						</th>
						<th>
							Profile Status
						</th>
					</thead>

					<tbody>
						<tr>
							<td>
								{{Auth::user()->fname}}
							</td>
							<td>
								{{Auth::user()->lname}}
							</td>
							<td>
								Complete
							</td>
						</tr>
					</tbody>

					<thead>
						<th>
							Email
						</th>
						<th>
							Country-Code
						</th>
						<th>
							Telephone
						</th>
					</thead>

					<tbody>
						<td>
							{{Auth::user()->email}}
						</td>
						<td>
							+{{Auth::user()->country_code}}
						</td>
						<td>
							{{Auth::user()->telephone}}
						</td>
					</tbody>

				</table>

				<div class="d-flex justify-content-center py-3 align-items-center">
					<a href="/overview" class="btn btn-lg btn-primary px-3 px-sm-5">
						<i class="fa fa-arrow-right me-3"></i> continue
					</a>
				</div>

			</div>

		</div>

	</div>

</div>