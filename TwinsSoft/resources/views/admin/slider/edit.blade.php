<x-app-layout>
<x-slot name="header"></x-slot>
	<!--Content right-->
    <div class="col-md-12 col-sm-9 col-xs-12 content pt-2 pl-2">
        <div class="col-sm-12">    
	    <!--Default bootstrap 4 validation-->
        <div class="mt-1 mb-4 p-3 button-container bg-white border shadow-sm">
        <form method="POST" action="{{route('slider.update',[$slider->id])}}" enctype="multipart/form-data">
            @csrf       
            @method('PUT')        

            <div class="form-row">
                
              <div class="col-md-12 mb-2">           
                <a href="{{asset($slider->SliderGorsel)}}" type="button" class="btn btn-info"
                  target="_blank">Görsel Görüntüle</a>             
              </div>

            </div>

            <div class="form-row">

            <div class="col-md-6 mb-2">
                <label for="sliderLinkYazi">Button Yazısı </label>
                <input type="text" class="form-control" name="SliderLinkYazi"
                  value="{{$slider->SliderLinkYazi}}">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-6 mb-2">
                <label for="sliderLinkYazi">Button Link </label>
                <input type="text" class="form-control" name="SliderLink"
                  value="{{$slider->SliderLink}}">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
         
            </div>

            <div class="form-row">

              <div class="col-md-6 mb-2">
                <label for="sliderBaslik">Başlık</label>
                <input type="text" class="form-control" name="SliderBaslik"
                  value="{{$slider->SliderBaslik}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-3 mb-2">
                <label for="sliderSira">Sırası </label>
                <input type="number" class="form-control" name="SliderSira"
                  value="{{$slider->SliderSira}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-3 mb-2">
                <div class="form-group">
                  <label for="sliderDurum">Durum </label>
                  <select class="form-control" name="SliderDurum" required>                
                    <option @if($slider->SliderDurum === 1) selected @endif value="1">Aktif</option>   
                    <option @if($slider->SliderDurum === 0) selected @endif value="0">Pasif</option>  
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
              </div>

              <div class="col-md-6 mb-2">
                <label for="icerikGorsel">Görsel </label>
                <input type="file" class="form-control" name="SliderGorsel" >
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <input type="hidden" name="sliderGorsel" value="">

            </div>           
            <button type="submit" class="btn btn-success">Değişikliği Kaydet</button>
          </form>
        </div>
        <!--/Default bootstrap validation-->
        </div>
    </div>

</x-app-layout>
