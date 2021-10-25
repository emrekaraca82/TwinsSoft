<x-app-layout>
<x-slot name="header"></x-slot>

<form class="needs-validation" method="POST" action="{{route('ayarupdate')}}"  novalidate>
@method('PUT')
@csrf			

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarFacebook">Facebook <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="Facebook" value="{{$ayar->Facebook}}">
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarTwitter">Twitter <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="Twitter" value="{{$ayar->Twitter}}">
		<div class="valid-feedback">
			Looks good!
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarInstgram">İnstagram <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="Instgram" value="{{$ayar->Instgram}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>

	<div class="col-md-6 mb-2">
		<label for="ayarlarYoutube">Youtube <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="Youtube" value="{{$ayar->Youtube}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>

<div class="form-row">
	<div class="col-md-6 mb-2">
		<label for="ayarlarGoogle">Google <span class="text-danger">*</span></label>
		<input type="text" class="form-control" name="Google" value="{{$ayar->Google}}">
		<div class="invalid-feedback">
			Please provide a valid city.
		</div>
	</div>
</div>

<button type="submit"  class="btn btn-success">Güncelle</button>

</form>
			

</x-app-layout>
