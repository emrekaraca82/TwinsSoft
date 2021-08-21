<x-app-layout>
<x-slot name="header"></x-slot>

<div class="row main-content">

<!--Content right-->
	<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
		<h5 class="mb-0"><strong>Api Ayarları</strong></h5>
		<div class="row mt-3">
			<div class="col-sm-12">
				<!--Default bootstrap 4 validation-->
				<div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">
					<form class="needs-validation" id="gonderilenform" action="" method="post" enctype="multipart/form-data" novalidate>
					@foreach($genelayar as $ayar)	
						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="ayarlarRecaptha">Google Recaptha <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarRecaptha" name="ayarlarRecaptha" value="{{$ayar->Recaptha}}">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>

							<div class="col-md-6 mb-2">
								<label for="validationCustom02">Google Map Api <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayarlarMap" name="ayarlarMap" value="{{$ayar->Map}}">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-2">
								<label for="validationCustom03">Google Analystic <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ayaralarAnalystic" name="ayaralarAnalystic" value="{{$ayar->Analystic}}">
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
