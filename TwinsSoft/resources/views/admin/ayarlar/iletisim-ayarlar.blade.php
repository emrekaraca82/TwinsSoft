<x-app-layout>
<x-slot name="header"></x-slot>

<form class="needs-validation" method="POST" action="{{route('ayarupdate')}}"  novalidate>
@method('PUT')
@csrf			

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarTel">Telefon Numaranız <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarTel" name="Tel" onkeypress="return isNumberKey(event)" maxlength="11"  value="{{$ayar->Tel}} ">
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarGsm">Cep Telefonu <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarGsm" name="Gsm" onkeypress="return isNumberKey(event)" maxlength="11" value="{{$ayar->Gsm}}">
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarFax">Faks Numaranız <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarFax" name="Fax" onkeypress="return isNumberKey(event)" maxlength="11" value="{{$ayar->Fax}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarMail">Mail Adresi <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarMail" name="Mail" value="{{$ayar->Mail}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarAdres">Adres <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarAdres" name="Adres" value="{{$ayar->Adres}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarIl">İl <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarIl" name="Il" value="{{$ayar->Il}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarIlce">İlçe <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarIlce" name="Ilce" value="{{$ayar->Ilce}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarMesai">Çalışma Saatleri <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarMesai" name="Mesai" value="{{$ayar->Mesai}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>
<button type="submit" class="btn btn-success">Güncelle</button>

</form>
	
</x-app-layout>
