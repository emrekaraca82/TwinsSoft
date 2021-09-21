<x-app-layout>
<x-slot name="header"></x-slot>
<!--Main Content-->
	<!--Content right-->
	<div class="col-md-12 col-sm-9 col-xs-12 content pt-1 pl-0">
		
		<div class="row mt-3">
			<div class="col-sm-12">
                <!--SweetAlert Başarılı Mesaj-->
                @include('sweetalert::alert')
				<!--Datatable-->
				<div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
					<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Başlık</th>
                                    <th>Detay</th>
									<th>Sırası</th>
									<th>Durum</th>
									<th>Kayıt Tarih</th>
									<th style="width: 200px;">İşlemler</th>
								</tr>
							</thead>
                            @foreach($contentList as $content)		
                            <tbody>
                                <tr>
                                <th scope="row">{{$content->id}}</th>
                                <td>{{$content->icerikBaslik}}</td>   
                                <td>{!! Str::limit($content->icerikDetay,60)!!}</td>   
                                <td>{{$content->icerikSira}}</td>
                                <td> 
                                    @switch($content->icerikDurum)
                                        @case(1)         
                                        <span class="badge badge-success">Aktif</span>
                                        @break
                                        @case(0)
                                        <span class="badge badge-danger">Pasif</span>
                                        @break     
                                    @endswitch
                                </td>   
                                <td>{{$content->created_at ? $content->created_at->diffForHumans() : '-'}}</td>      
                                <td>
                                <form method="POST" action="{{ route('content.destroy', $content->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <a href="{{route('content.edit',$content->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('content.destroy',$content->id)}}"  data-toggle="tooltip" title='Delete' class="btn btn-sm btn-danger btn-flat show_confirm"><i class="fa fa-times"></i></a>
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
