<x-app-layout>
<x-slot name="header"></x-slot>
<!--Main Content-->

<!--SweetAlert Başarılı Mesaj-->
@include('sweetalert::alert')

<div class="row main-content">
	<!--Content right-->
<table class="table content">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Baslik</th>   
      <th scope="col">İçerik</th>
      <th scope="col">Güncelle</th>  
    </tr>
  </thead>
  @foreach($kurumsalList as $kurumsal)		
  <tbody>
    <tr>
      <th scope="row">{{$kurumsal->id}}</th>
      <td>{{$kurumsal->kurumsalBaslik}}</td>   
      <td>{!! Str::limit($kurumsal->kurumsalIcerik,60)!!}</td>
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
         <form class="needs-validation" method="POST" action="{{route('update',$kurumsal->id)}}" enctype="multipart/form-data"  novalidate>
					@method('PUT')
					@csrf		
            <div class="form-row">
              <div class="col-md-12 mb-2">              
                <a href="{{asset($kurumsal->kurumsalGorsel)}}" type="button" class="btn btn-primary"
                  target="_blank">
                  Görsel Görüntüle
                </a>
              
              </div>
            </div>
            @foreach($kurumsalList as $kurumsal)
            <div class="form-row">
            <div class="col-md-6 mb-2">
                <label for="kurumsalGorsel">Görsel </label>
                <input type="file" class="form-control" name="kurumsalGorsel" value="{{$kurumsal->kurumsalGorsel}}">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            

              <div class="col-md-6 mb-2">
                <label for="kurumsalBaslik">Başlık <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="kurumsalBaslik" value="{{$kurumsal->kurumsalBaslik}}">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            @endforeach
            <div class="form-row">
              <div class="col-md-12 mb-2">
                <label for="kurumsalIcerik">İçerik </label>
                <textarea type="text" name="kurumsalIcerik" class="form-control">
                 {{$kurumsal->kurumsalIcerik}}
                </textarea>
                <script>
                  CKEDITOR.replace( 'kurumsalIcerik' );
                </script>
              </div>
              <button type="submit" class="btn btn-success">Güncelle</button>
          </form>
        </div>
        <!--/Default bootstrap validation-->
        </div>
    </div>
  </div>
</div>
</div>

</x-app-layout>
