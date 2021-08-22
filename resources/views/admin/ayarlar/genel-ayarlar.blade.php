<x-app-layout>
<x-slot name="header"></x-slot>
   <!--Main Content-->

<div class="row main-content">
	<!--Content right-->
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  @foreach($genelayar as $ayar)		
  <tbody>
    <tr>
      <th scope="row">{{$ayar->id}}</th>
      <td>{{$ayar->Title}}</td>
      <td>{{$ayar->Description}}</td>
      <td>{{$ayar->Keywords}}</td>
	  <td><a href="ayarlar-genel/{{$ayar->id}}" class="btn btn-success">Update</a></td>
    </tr>
   
  </tbody>
  @endforeach
</table>
</div>



</x-app-layout>
