<div class="card shadow clearfix h-100">
	<div class="card-header">
		<h4 class="text-center">
			Account Contacts
		</h4>
	</div>

	<div class="card-body">
		<p>
			Manage your contact information and address data below;
		</p>
			<div class="row">
				
				<div class="col-12 col-sm-4">
					<div class="py-3">
						<label>
							Country Code 
						</label>
						<input type="number" name="country_code" class="form-control form-control-lg @error('country_code') is-invalid @enderror" value="{{ old('country_code') }}">
					</div>	
				</div>

				<div class="col-12 col-sm-8">
					<div class="py-3">
						<label>
							Telephone Number
						</label>
						<input type="number" name="telephone" class="form-control form-control-lg @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}">
					</div>	
				</div>

				<div class="col-12">
					<div class="py-3">
						<label>
							Postal Address
						</label>
						<textarea name="postal_address" class="form-control form-control-lg @error('postal_address') is-invalid @enderror">{{ old('postal_address') }}</textarea>
					</div>	
				</div>


			</div>

	</div>

</div>