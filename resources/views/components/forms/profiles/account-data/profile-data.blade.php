<div class="card shadow clearfix h-100">
	<div class="card-header">
		<h4 class="text-center">
			Personal Profile
		</h4>
	</div>

	<div class="card-body">
		<p>
			Manage your presonal account data below;
		</p>
			<div class="row">
				
				<div class="col-12 col-sm-6">
					<div class="py-3">
						<label>
							First Name
						</label>
						<input type="text" name="fname" class="form-control form-control-lg @error('fname') is-invalid @enderror" value="{{ old('fname') }}">
					</div>	
				</div>

				<div class="col-12 col-sm-6">
					<div class="py-3">
						<label>
							Middle Name
						</label>
						<input type="text" name="mname" class="form-control form-control-lg" value="{{ old('mname') }}">
					</div>	
				</div>

				<div class="col-12 col-sm-6">
					<div class="py-3">
						<label>
							Last Name
						</label>
						<input type="text" name="lname" class="form-control form-control-lg @error('lname') is-invalid @enderror" value="{{ old('lname') }}">
					</div>	
				</div>

				<div class="col-12 col-sm-6">
					<div class="py-3">
						<label>
							Gender
						</label>
						<select class="form-control form-control-lg @error('gender') is-invalid @enderror" name="gender">
							<option value="NULL">
								Click to select
							</option>
							<option value="1">
								Male
							</option>
							<option value="2">
								Female
							</option>
						</select>
					</div>	
				</div>


			</div>

	</div>

</div>