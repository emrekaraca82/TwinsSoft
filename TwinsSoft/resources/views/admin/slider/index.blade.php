<x-app-layout>
<x-slot name="header"></x-slot>
 <!--Main Content-->
	<!--Content right-->
	<div class="col-md-12 col-sm-9 col-xs-12 content pt-1 pl-0">
 
		<div class="row mt-3">
			<div class="col-sm-12">

        <!--SweetAlert Başarılı Mesaj-->
        @include('sweetalert::alert')

				<div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
					<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered">
							<thead>
								<tr>
                  <th scope="col">#</th>
                  <th scope="col">Baslik</th>   
                  <th scope="col">Sırası</th>
                  <th scope="col">Durum</th>
                  <th scope="col">Kayıt Tarihi</th>
                  <th scope="col">İşlemler</th>                  
                  </tr>

                  </thead>
                  @foreach($sliderList as $slider)		
                  <tbody>
                    <tr>
                      <th scope="row">{{$slider->id}}</th>
                      <td>{{$slider->SliderBaslik}}</td>   
                      <td>{{$slider->SliderSira}}</td>
                      <td> 
                        @switch($slider->SliderDurum)
                            @case(1)         
                            <span class="badge badge-success">Aktif</span>
                            @break
                            @case(0)
                            <span class="badge badge-danger">Pasif</span>
                            @break     
                        @endswitch
                      </td>   
                      <td>{{$slider->created_at ? $slider->created_at->diffForHumans() : '-' }} </td>  
                        
                    <td>
                      <form method="POST" action="{{ route('slider.destroy', $slider->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <a href="{{route('slider.destroy',$slider->id)}}"  data-toggle="tooltip" title='Delete' class="btn btn-sm btn-danger btn-flat show_confirm"><i class="fa fa-times"></i></a>
                      </form>
                    </td>                    
                    </tr>
                </tbody>
                  @endforeach
                  </table>
					</div>
				</div>
				<!--/Datatable-->
			</div>
		</div>
        </div>

</x-app-layout>