<x-app-layout>
<x-slot name="header"></x-slot>
<!--Main Content-->

<!--SweetAlert Başarılı Mesaj-->
@include('sweetalert::alert')

<form class="needs-validation" method="POST" action="{{route('update')}}" enctype="multipart/form-data"  novalidate>
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
    <button type="submit" class="btn btn-success">Kaydet</button>
</form>

</x-app-layout>
