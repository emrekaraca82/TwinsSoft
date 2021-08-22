<x-app-layout>
<x-slot name="header"></x-slot>
   <!--Main Content-->

<div class="row main-content">
	<!--Content right-->
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tel</th>
      <th scope="col">Gsm</th>
      <th scope="col">Fax</th>
      <th scope="col">Email</th>
      <th scope="col">Adres</th>  
	  <th scope="col">İl</th>
      <th scope="col">İlçe</th>
      <th scope="col">Çalışma Saatleri</th>     
      <th scope="col">Güncelle</th>     
    </tr>
  </thead>
  @foreach($genelayar as $ayar)		
  <tbody>
    <tr>
      <th scope="row">{{$ayar->id}}</th>
      <td>{{$ayar->Tel}}</td>
      <td>{{$ayar->Gsm}}</td>
      <td>{{$ayar->Fax}}</td>
      <td>{{$ayar->Mail}}</td>
      <td>{{$ayar->Adres}}</td>
	  <td>{{$ayar->Il}}</td>
      <td>{{$ayar->Ilce}}</td>
      <td>{{$ayar->Mesai}}</td>
	  <td>
      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
      Güncelle
      </button>
    </td>
    </tr>
   
  </tbody>
  @endforeach
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Güncelleme Ekranı</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   		<!--Default bootstrap 4 validation-->
		   <div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">
		   <form class="needs-validation" method="POST" action="{{route('update',$ayar->id)}}"  novalidate>
					@method('PUT')
					@csrf			
					@foreach($genelayar as $ayar)
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
					@endforeach
					</form>
				</div>
				<!--/Default bootstrap validation-->
      </div>
    
    </div>
  </div>
</div>

</x-app-layout>
