@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Edit Customers IP & MAC Address</h1>


@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('admin.customers-IP-MAC.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.customers-IP-MAC.update',$customersIPMAC->id)}}" method='post'>
    @method('put')
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Customer Name</label>
            <select name="customer_name" class="form-control" id="exampleFormControlSelect1">
            @foreach ($customers as $customer)
                    <option
                    @if($customer->id==$customersIPMAC->customer_name_id)
                    selected
                    @endif
                    value="{{$customer->id}}"> {{$customer->customer_name}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Customer ID</label>
            <select name="customer_id" class="form-control" id="exampleFormControlSelect1">
            @foreach ($customers as $customer)
                    <option
                    @if($customer->id==$customersIPMAC->customer_id_id)
                    selected
                    @endif
                    value="{{$customer->id}}"> {{$customer->customer_id}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Connection Type</label>
            <select name="connection_type" class="form-control" id="exampleFormControlSelect1">
            <option {{ ($customersIPMAC->connection_type) == 'Dedicated' ? 'selected' : '' }}  value="Dedicated">Dedicated</option>
            <option {{ ($customersIPMAC->connection_type) == 'Shared' ? 'selected' : '' }}  value="Shared">Shared</option>
            </select>
    </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
    <!--column start-->
    <div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">IP address</label>
    <input name="ip" value="{{$customersIPMAC->ip}}" placeholder='Client IP address' type="string" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">MAC address</label>
    <input name="mac" value="{{$customersIPMAC->mac}}" placeholder='Client MAC address' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">

</div>
<!--column end-->
</div>
<!--row end-->


  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
<!--fluid-container end-->

</div>
<!--container end-->
@endsection