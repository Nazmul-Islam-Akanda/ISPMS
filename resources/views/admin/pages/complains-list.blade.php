@extends('master')

@section('content')
<div class="container">
<h1>Complains List</h1>
</div>

<!--row start-->
<div class="row">
    <!--column start-->
    &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<form action="{{route('admin.complains.list')}}" method="get">
  <input style="border:#BBBDBF; border-width:2px; border-style:solid" type="text" class="form-control" name="search" placeholder="Search here...">
</div>

<div class="col-xs-3">
<button type="submit" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M16 2l5 5v14.008a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 21.008V2.992C3 2.444 3.445 2 3.993 2H16zm-2.471 12.446l2.21 2.21 1.415-1.413-2.21-2.21a4.002 4.002 0 0 0-6.276-4.861 4 4 0 0 0 4.861 6.274zm-.618-2.032a2 2 0 1 1-2.828-2.828 2 2 0 0 1 2.828 2.828z"/></svg></button>
</form>
</div>

&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-3">
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
</div>
<!--column end-->
</div>
<!--row end-->

@if($key)
<h3>You are searching for {{$key}}--Found {{$complains->count()}} result </h3>
@endif

<div class="container-fluid">
<div class="row">
<div class="col-xs-6">

</div>
  <div class="col-xs-6">
  
</div>
</div>
</div>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Complain</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Resolver</th>
      <th scope="col">Resolver Id</th>
      <th scope="col">Actions</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    {{--@dd($complains)--}}
@foreach ($complains as $key=>$complain)
    <tr>
      <th> {{$key+1}} </th>
      <td> {{$complain->complain}} </td>
      <td> {{$complain->customer_id}} </td>
      <td> {{$complain->user->name}} </td>
      <td> {{$complain->user->user_id}} </td>
    <td>
   <a href="{{route('admin.complains.delete',$complain->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" fill="rgba(231,76,60,1)"/></svg></a>
  </td> 
  <td> 
  @if($complain->status=='Hold')
    <a href="{{route('admin.complains.status',$complain->id)}}" class="btn btn-danger" style="border-radius:10px; ">{{$complain->status}}</a> 
    @elseif($complain->status=='Processing')
    <a href="{{route('admin.complains.status',$complain->id)}}" class="btn btn-danger" style="border-radius:10px; background-color:#787000;">{{$complain->status}}</a> 
    @elseif($complain->status=='Completed')
    <a href="{{route('admin.complains.status',$complain->id)}}" class="btn btn-danger" style="border-radius:10px; background-color:#009200;">{{$complain->status}}</a> 
    @endif
  </td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection