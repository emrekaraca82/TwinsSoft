<x-app-layout>
<x-slot name="header"></x-slot>
   <!--Main Content-->

<div class="row main-content">
	<!--Content right-->
<table class="table content">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">SiteUrl</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Author</th>     
      <th scope="col">Güncelle</th>     
    </tr>
  </thead>
  @foreach($genelayar as $ayar)		
  <tbody>
    <tr>
      <th scope="row">{{$ayar->id}}</th>
      <td>{{$ayar->SiteUrl}}</td>
      <td>{{$ayar->Title}}</td>
      <td>{{$ayar->Description}}</td>
      <td>{{$ayar->Keywords}}</td>
      <td>{{$ayar->Author}}</td>
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
      <div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">				
					<form class="needs-validation" method="POST" action="{{route('update',$ayar->id)}}"  novalidate>
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
				</div>
      </div>
    
    </div>
  </div>
</div>

</x-app-layout>
