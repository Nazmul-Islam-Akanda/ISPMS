@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Edit Customers</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

<!--server side validation start-->
{{--@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif--}}
<!--server side validation end-->

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;


<a href="{{url('admin/customers-list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.customers-IP-MAC.update',$customer->id)}}" method='post' enctype="multipart/form-data">
@method('put')
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Block</label>
            <select name="block" class="form-control" id="exampleFormControlSelect1">
            @foreach ($blocks as $block)
                    <option
                    @if($block->id==$customer->block_id)
                    selected
                    @endif
                    value="{{$block->id}}"> {{$block->name}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Customer Name</label>
    <input name="customer_name" value="{{$customer->customer_name}}" placeholder='Enter client name' type="string" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input name="address" value="{{$customer->address}}" placeholder='Enter customer address' type="string" class="form-control" id="" required>
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
    <label for="" class="form-label">Contact No.</label>
    <input name="contact_no" value="0{{$customer->contact_no}}" placeholder='Enter client number' type="number" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" value="{{$customer->email}}" placeholder='Enter customer email' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Connection Date</label>
    <input name="date" value="{{$customer->date}}" placeholder='Connection date here' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
<!--column start-->
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Customer Type</label>
            <select name="customer_type" class="form-control" id="exampleFormControlSelect1">
            <option {{ ($customer->customer_type) == 'Home' ? 'selected' : '' }}  value="Home">Home</option>
            <option {{ ($customer->customer_type) == 'Office' ? 'selected' : '' }}  value="Office">Office</option>
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Bill Type</label>
            <select name="bill_type" class="form-control" id="exampleFormControlSelect1">
            <option {{ ($customer->bill_type) == 'Prepaid' ? 'selected' : '' }}  value="Prepaid">Prepaid</option>
            <option {{ ($customer->bill_type) == 'Post paid' ? 'selected' : '' }}  value="Post paid">Post paid</option>
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Package</label>
            <select name="package" class="form-control" id="exampleFormControlSelect1">
            @foreach ($packages as $package)
                    <option
                    @if($package->id==$customer->package_id)
                    selected
                    @endif
                    value="{{$package->id}}"> {{$package->name}} </option>
                    @endforeach
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
    <label for="exampleInputEmail1" class="form-label">Monthly Charge</label>
    <input name="charge" value="{{$customer->charge ?? $customer->package->price}}" placeholder='Monthly bill' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Service Charge</label>
    <input name="service_charge" value="{{$customer->service_charge}}" placeholder='Enter connection charge' type="number" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Lineman Department</label>
            <select name="department" class="form-control" id="exampleFormControlSelect1">
            @foreach ($departments as $department)
                    <option
                    @if($department->id==$customer->department_id)
                    selected
                    @endif
                    value="{{$department->id}}"> {{$department->name}} </option>
                    @endforeach
            </select>
    </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row end-->

<!--row start-->
<div class="row">
<!--column start-->
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Lineman</label>
            <select name="user" class="form-control" id="exampleFormControlSelect1">
            @foreach ($users as $user)
                    <option
                    @if($user->id==$customer->lineman_id)
                    selected
                    @endif
                    value="{{$user->id}}"> {{$user->name}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Lineman ID</label>
            <select name="user_id" class="form-control" id="exampleFormControlSelect1">
            @foreach ($users as $user)
                    <option
                    @if($user->id==$customer->lineman_id)
                    selected
                    @endif
                    value="{{$user->id}}"> {{$user->user_id}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option {{ ($customer->status) == 'Active' ? 'selected' : '' }}  value="Active">Active</option>
            <option {{ ($customer->status) == 'Deactive' ? 'selected' : '' }}  value="Deactive">Deactive</option>
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

</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">

</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="col-xs-1">
<div class="mb-3">
            <label for="" class="form-label">Customer Photo</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
</div>
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