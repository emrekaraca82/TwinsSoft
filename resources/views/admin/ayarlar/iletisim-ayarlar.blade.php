<x-app-layout>
<x-slot name="header"></x-slot>

<div class="row main-content">
	<!--Content right-->
	<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
		<h5 class="mb-0"><strong>İletisim Ayarlar</strong></h5>
		<div class="row mt-3">
			<div class="col-sm-12">
				<!--Default bootstrap 4 validation-->
				<div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">
					<form class="needs-validation" id="gonderilenform" action="" method="post" enctype="multipart/form-data" novalidate>
					@foreach($genelayar as $ayar)
						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarTel">Telefon Numaranız <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarTel" name="ayarlarTel" onkeypress="return isNumberKey(event)" maxlength="11"  value="{{$ayar->Tel}} ">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarGsm">Cep Telefonu <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarGsm" name="ayarlarGsm" onkeypress="return isNumberKey(event)" maxlength="11" value="{{$ayar->Gsm}}">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarFax">Faks Numaranız <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarFax" name="ayarlarFax" onkeypress="return isNumberKey(event)" maxlength="11" value="{{$ayar->Fax}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarMail">Mail Adresi <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarMail" name="ayarlarMail" value="{{$ayar->Mail}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarAdres">Adres <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarAdres" name="ayarlarAdres" value="{{$ayar->Adres}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarIl">İl <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarIl" name="ayarlarIl" value="{{$ayar->Il}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarIlce">İlçe <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarIlce" name="ayarlarIlce" value="{{$ayar->Ilce}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarMesai">Çalışma Saatleri <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarMesai" name="ayarlarMesai" value="{{$ayar->Mesai}}">
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
