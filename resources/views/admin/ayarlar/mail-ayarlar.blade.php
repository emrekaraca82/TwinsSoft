<x-app-layout>
<x-slot name="header"></x-slot>
<div class="row main-content">
	<!--Content right-->
	<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
		<h5 class="mb-0"><strong>Mail Ayarları</strong></h5>
		<div class="row mt-3">
			<div class="col-sm-12">
				<!--Default bootstrap 4 validation-->
				<div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">
				@foreach($genelayar as $ayar)	
					<form class="needs-validation" id="gonderilenform" action="" method="post" enctype="multipart/form-data" novalidate>
						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarSmtpHost">SMTP Host <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarSmtpHost" name="ayarlarSmtpHost" value="{{$ayar->SmtpHost}}">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarSmtpPort">SMTP Port <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarSmtpPort" name="ayarlarSmtpPort" value="{{$ayar->SmtpPort}}">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarSmtpSecure">SMTP SSL/TLS <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarSmtpSecure" name="ayarlarSmtpSecure" value="{{$ayar->SmtpSecure}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarSmtpUser">Mail Adresi <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarSmtpUser" name="ayarlarSmtpUser" value="{{$ayar->SmtpUser}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarSmtpPassword">Şifre <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarSmtpPassword" name="ayarlarSmtpPassword" value="{{$ayar->SmtpPassword}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>
						</div>
					    <button type="submit" name="submit" class="btn btn-success">Güncelle</button>
					@endforeach
					</form>
				</div>
				<!--/Default bootstrap validation-->
			</div>
		</div>
	</div>
</div>


</x-app-layout>
