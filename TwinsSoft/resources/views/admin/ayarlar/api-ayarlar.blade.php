<x-app-layout>
<x-slot name="header"></x-slot>
 

<form class="needs-validation" method="POST" action="{{route('ayarupdate')}}"  novalidate>
@method('PUT')
@csrf			

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarRecaptha">Google Recaptha <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="Recaptha" value="{{$ayar->Recaptha}}">
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="validationCustom02">Google Map Api <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="Map" value="{{$ayar->Map}}">
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="validationCustom03">Google Analystic <span class="text-danger">*</span></label>
		<input type="text" class="form-control"  name="Analystic" value="{{$ayar->Analystic}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>
		
<button type="submit" class="btn btn-success">Güncelle</button>

</form>
	
</x-app-layout>
