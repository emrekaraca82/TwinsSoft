<x-app-layout>
<x-slot name="header"></x-slot>
   <!--Main Content-->

<div class="row main-content">
	<!--Content right-->
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Recaptha</th>
      <th scope="col">Map Api</th>
      <th scope="col">Analystic</th>    
	  <th scope="col">Güncelle</th> 
    </tr>
  </thead>
  @foreach($genelayar as $ayar)		
  <tbody>
    <tr>
      <th scope="row">{{$ayar->id}}</th>
      <td>{{$ayar->Recaptha}}</td>
      <td>{{$ayar->Map}}</td>
      <td>{{$ayar->Analystic}}</td>    
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
		@endforeach
		</form>
	</div>
	<!--/Default bootstrap validation-->
    </div>
  </div>
</div>
</div>
</x-app-layout>
