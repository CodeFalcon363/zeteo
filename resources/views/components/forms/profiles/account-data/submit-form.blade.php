<div class="card clearfix shadow">
	<div class="card-body">
		<div class="border p-2 rounded mb-2">
				
				<h4 class="text-primary text-bold text-uppercase">
					account type
				</h4>
				<p>
					Please select your prefered account type:
				</p>
				<p>
					Select necessary account type to avoid service disruption!
				</p>

				<select class="form-control form-control-lg @error('account_type') is-invalid @enderror" name="account_type">
					<option value="o">
						Click to select
					</option>
					<option value="2">
						Doctor
					</option>
					<option value="3">
						Patient
					</option>
				</select>

				<label class="mt-2">
					<b>Doctor</b>
				</label>
				<span class="mb-2 d-block">
					Engage with your patients/clients online
				</span>

				<label>
					<b>Patient</b>
				</label>
				<span class="mb-2 d-block">
					Engage with your doctor online
				</span>

		</div>

		<h4 class="text-danger text-bold text-uppercase">
			please note:
		</h4>
		<p>
			Make sure all the required fields [<span class="small text-primary"> marked (*)</span>], are completed before proceeding
		</p>
		<div class="my-2">
			<button class="btn btn-lg btn-primary px-3 px-sm-5">
				Continue <i class="fa fa-arrow-right"></i>
			</button>
		</div>
	</div>
</div>