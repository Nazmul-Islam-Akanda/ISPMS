@extends('master')

@section('content')
<div class="container">
<h1>Customers List</h1>
</div>

<a href="{{url('admin/add/customers')}}" class="btn btn-primary">Add Customers</a>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Block</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Email</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Connection date</th>
      <th scope="col">Customer type</th>
      <th scope="col">Bill type</th>
      <th scope="col">Package</th>
      <th scope="col">Monthly charge</th>
      <th scope="col">Service charge</th>
      <th scope="col">Lineman Department</th>
      <th scope="col">Lineman</th>
      <th scope="col">Lineman ID</th>
      <th scope="col">Customer Photo</th>
      <th scope="col">Action</th>
      <th scope="col">Status</th>
      <th scope="col">Bill Status</th>

    </tr>
  </thead>

  <tbody>
   {{--@dd($customers)--}} 
  @foreach ($customers as $key=>$customer)
    <tr>
      <th> {{$key+1}} </th>
      <td> {{$customer->block->name}} </td>
      <td> {{$customer->customer_name}} </td>
      <td> {{$customer->address}} </td>
      <td> 0{{$customer->contact_no}} </td>
      <td> {{$customer->email}} </td>
      <td> {{$customer->customer_id}} </td>
      <td> {{$customer->date}} </td>
      <td> {{$customer->customer_type}} </td>
      <td> {{$customer->bill_type}} </td>
      <td> {{$customer->package->name}} </td>
      <td> {{$customer->charge}} </td>
      <td> {{$customer->service_charge}} </td>
      <td> {{$customer->block->user->department->name}} </td>
      <td> {{$customer->block->user->name}} </td>
      <td> {{$customer->block->user->user_id}} </td>
      <td> <img src="{{url('/uploads/'.$customer->image)}}" width="50px" alt="Customer photo"> </td>
      <td>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(230,126,34,1)"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" fill="rgba(231,76,60,1)"/></svg>
  </td>
  <td><a href="#" class="btn btn-danger" style="border-radius:10px; ">active</a></td>
  <td><a href="#" class="btn btn" style="border-radius:10px; background-color:#FF8040; color:white ">Check</a></td>
</tr>
@endforeach
</tbody>
@endsection