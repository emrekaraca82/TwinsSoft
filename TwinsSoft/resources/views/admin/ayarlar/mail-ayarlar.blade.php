<x-app-layout>
<x-slot name="header"></x-slot>
		
<form class="needs-validation" method="POST" action="{{route('ayarupdate')}}"  novalidate>
@method('PUT')
@csrf		

<div class="form-row">
<div class="col-md-6 mb-2">
	<label for="ayarlarSmtpHost">SMTP Host <span class="text-danger">*</span></label>
	<input type="text" class="form-control" name="SmtpHost" value="{{$ayar->SmtpHost}}">
	<div class="valid-feedback">
		Looks good!
	</div>
</div>

<div class="col-md-6 mb-2">
	<label for="ayarlarSmtpPort">SMTP Port <span class="text-danger">*</span></label>
	<input type="text" class="form-control" name="SmtpPort" value="{{$ayar->SmtpPort}}">
	<div class="valid-feedback">
		Looks good!
	</div>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-2">
	<label for="ayarlarSmtpSecure">SMTP SSL/TLS <span class="text-danger">*</span></label>
	<input type="text" class="form-control" name="SmtpSecure" value="{{$ayar->SmtpSecure}}">
	<div class="invalid-feedback">
		Please provide a valid city.
	</div>
</div>

<div class="col-md-6 mb-2">
	<label for="ayarlarSmtpUser">Mail Adresi <span class="text-danger">*</span></label>
	<input type="text" class="form-control" name="SmtpUser" value="{{$ayar->SmtpUser}}">
	<div class="invalid-feedback">
		Please provide a valid city.
	</div>
</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarSmtpPassword">Şifre <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="SmtpPassword" value="{{$ayar->SmtpPassword}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>
<button type="submit"  class="btn btn-success">Güncelle</button>

</form>
	
</x-app-layout>
