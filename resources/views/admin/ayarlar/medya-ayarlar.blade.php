<x-app-layout>
<x-slot name="header"></x-slot>

<div class="row main-content">
	<!--Content right-->
	<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
		<h5 class="mb-0"><strong>Sosyal Medya Ayarları</strong></h5>
		<div class="row mt-3">
			<div class="col-sm-12">
				<!--Default bootstrap 4 validation-->
				<div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">
					<form class="needs-validation" id="gonderilenform" action="" method="post" enctype="multipart/form-data" novalidate>
					@foreach($genelayar as $ayar)	
						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarFacebook">Facebook <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarFacebook" name="ayarlarFacebook" value="{{$ayar->Facebook}}">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarTwitter">Twitter <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarTwitter" name="ayarlarTwitter" value="{{$ayar->Twitter}}">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarInstgram">İnstagram <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarInstgram" name="ayarlarInstgram" value="{{$ayar->Instgram}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="ayarlarYoutube">Youtube <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarYoutube" name="ayarlarYoutube" value="{{$ayar->Youtube}}">
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarGoogle">Google <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarGoogle" name="ayarlarGoogle" value="{{$ayar->Google}}">
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
