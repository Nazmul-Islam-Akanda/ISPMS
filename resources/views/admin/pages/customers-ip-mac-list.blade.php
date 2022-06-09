@extends('master')

@section('content')
<div class="container">
<h1>Customers IP & MAC List</h1>
</div>

<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-3">
<a href="{{route('admin.add-customers-IP-MAC')}}" class="btn btn-primary">Add Customers IP & MAC Address</a>
</div>

<div class="col-md-3">
<form action="{{route('admin.customers-IP-MAC.list')}}" method="get">
  <input style="border:#BBBDBF; border-width:2px; border-style:solid" type="text" class="form-control" name="search" placeholder="Search here...">
</div>

<div class="col-xs-3">
<button type="submit" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M16 2l5 5v14.008a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 21.008V2.992C3 2.444 3.445 2 3.993 2H16zm-2.471 12.446l2.21 2.21 1.415-1.413-2.21-2.21a4.002 4.002 0 0 0-6.276-4.861 4 4 0 0 0 4.861 6.274zm-.618-2.032a2 2 0 1 1-2.828-2.828 2 2 0 0 1 2.828 2.828z"/></svg></button>
</form>
</div>

&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-3">
@if(session()->get('msg'))
<p class="alert alert-success" style="color:red">
  <b>{{session()->get('msg')}}</b>
</p>
@endif
</div>
<!--column end-->
</div>
<!--row end-->

@if($key)
<h3>You are searching for {{$key}}--Found {{$customersIPMACs->count()}} result </h3>
@endif

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Connection Type</th>
      <th scope="col">IP address</th>
      <th scope="col">MAC Address</th>
      <th scope="col">Action</th>
      <th scope="col">Status</th>

    </tr>
  </thead>

  <tbody>
  {{--@dd($customersIPMACs)--}}
  @foreach ($customersIPMACs as $key=>$customersIPMAC)
    <tr>
      <th> {{$key+1}} </th>
      <td> {{$customersIPMAC->customer->customer_name ?? ""}} </td>
      <td> {{$customersIPMAC->customer->customer_id ?? ""}} </td>
      <td> {{$customersIPMAC->connection_type}} </td>
      <td> {{$customersIPMAC->ip}} </td>
      <td> {{$customersIPMAC->mac}} </td>
      <td>
        <a href="{{route('admin.customers-IP-MAC.edit',$customersIPMAC->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(230,126,34,1)"/></svg></a>
    <a href="{{route('admin.customers-IP-MAC.delete',$customersIPMAC->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" fill="rgba(231,76,60,1)"/></svg></a>
  </td>
  <td><a Style=background-color:#0e0561>{{$customersIPMAC->customer->status ?? ""}}</a></td>
</tr>
@endforeach
</tbody>
@endsection