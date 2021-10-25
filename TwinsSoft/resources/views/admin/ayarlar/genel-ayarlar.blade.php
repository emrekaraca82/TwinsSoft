<x-app-layout>
<x-slot name="header"></x-slot>

<form class="needs-validation" method="POST" action="{{route('ayarupdate')}}"  novalidate>
@method('PUT')
@csrf

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarSiteUrl">Site Adresi <span class="text-danger">*</span></label>		
		<input type="text" class="form-control" id="ayarlarSiteUrl" name="SiteUrl" value="{{$ayar->SiteUrl}}">						
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarTitle">Site Başlığı <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="ayarlarTitle" name="Title" value="{{$ayar->Title}}">
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarDescription">Site Açıklaması <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="Description" name="Description" value="{{$ayar->Description}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarKeywords">Site Anahtar Kelime <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="Keywords" name="Keywords" value="{{$ayar->Keywords}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarAuthor">Site Yazar <span class="text-danger">*</span></label>
		<input type="text" class="form-control" id="Author" name="Author" value="{{$ayar->Author}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>

<button type="submit" class="btn btn-success">Güncelle</button>	
				
</form>

</x-app-layout>
