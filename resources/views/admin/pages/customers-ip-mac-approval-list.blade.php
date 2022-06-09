@extends('master')

@section('content')
<div class="container">
<h1>Unapproved  Customers IP & MAC List</h1>
</div>

<!--row start-->
<div class="row">
    <!--column start-->
    &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<form action="{{route('admin.IP&MAC.approvals.list')}}" method="get">
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
      <td><a href="{{route('admin.IP&MAC.approve',$customersIPMAC->id)}}" class="btn btn-danger" style="border-radius:10px; ">Approve</a></td>
  <td><a Style=background-color:#0e0561>{{$customersIPMAC->customer->status ?? ""}}</a></td>
</tr>
@endforeach
</tbody>
@endsection