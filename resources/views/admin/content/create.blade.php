<x-app-layout>
<x-slot name="header"></x-slot>

  <!--Content right-->
  <div class="col-md-12 col-sm-9 col-xs-12 content pt-2 pl-2">
      <div class="col-sm-12">
        <!--Default bootstrap 4 validation-->
        <div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">
        <form method="POST" action="{{route('content.store')}}" enctype="multipart/form-data">
            @csrf      
            <div class="form-row">  

              <div class="col-md-6 mb-2">
                <label for="icerikKeyword"> Anahtar Kelime </label>
                <input type="text" class="form-control" name="icerikKeyword"
                  value="">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-6 mb-2">
                <label for="icerikLink">İcerik Link </label>
                <input type="text" class="form-control" name="icerikLink"
                  value="">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            
            </div>

            <div class="form-row">

            <div class="col-md-6 mb-2">
                <label for="icerikBaslik">Başlık</label>
                <input type="text" class="form-control" name="icerikBaslik"
                  value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-3 mb-2">
                <label for="icerikSira">Sırası</label>
                <input type="number" class="form-control" name="icerikSira"
                  value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-3 mb-2">
                <div class="form-group">
                  <label for="icerikDurum">Durum </label>
                  <select class="form-control" name="icerikDurum" required>
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
              </div>

              <div class="col-md-6 mb-2">
                <label for="icerikGorsel">Görsel </label>
                <input type="file" class="form-control" name="icerikGorsel">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <input type="hidden" name="icerikGorsel" value="">

              <div class="col-md-12 mb-2">
                <label for="icerikDetay">İçerik </label>
                <textarea type="text"  name="icerikDetay" class="form-control">
                
                </textarea>
                <script>
                  CKEDITOR.replace('icerikDetay');
                </script>
              </div>

            </div>           
            <button type="submit" class="btn btn-success"> Kaydet </button>
          </form>
        </div>
        <!--/Default bootstrap validation-->
        </div>
    </div>



</x-app-layout>