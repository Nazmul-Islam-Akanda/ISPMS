@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Add Customers</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

<!--server side validation start-->
@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif
<!--server side validation end-->

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;


<a href="{{url('admin/customers-list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{url('admin/customers/store')}}" method='post' enctype="multipart/form-data">
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
                    <option value="{{$block->id}}">{{$block->name}}</option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;

<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Customer Name</label>
    <input name="customer_name" placeholder='Enter client name' type="string" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input name="address" placeholder='Enter customer address' type="string" class="form-control" id="" required>
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
    <input name="contact_no" placeholder='Enter client number' type="number" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" placeholder='Enter customer email' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer ID</label>
    <input name="customer_id" placeholder='Enter customer ID' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
    <label for="exampleInputEmail1" class="form-label">Connection Date</label>
    <input name="date" placeholder='Connection date here' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Customer Type</label>
            <select name="customer_type" class="form-control" id="exampleFormControlSelect1">
                    <option>Home</option>
                    <option>Office</option>
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Bill Type</label>
            <select name="bill_type" class="form-control" id="exampleFormControlSelect1">
                    <option>Prepaid</option>
                    <option>Post paid</option>
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
<div class="form-group">
            <label for="exampleFormControlSelect1">Package</label>
            <select name="package" class="form-control" id="exampleFormControlSelect1">
                @foreach ($packages as $package)
                    <option value="{{$package->id}}">{{$package->name}}</option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Monthly Charge</label>
    <input name="charge" placeholder='Monthly bill' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Service Charge</label>
    <input name="service_charge" placeholder='Enter connection charge' type="number" class="form-control" id="">
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
            <label for="exampleFormControlSelect1">Lineman Department</label>
            <select name="department" class="form-control" id="exampleFormControlSelect1">
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Lineman</label>
            <select name="user" class="form-control" id="exampleFormControlSelect1">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Lineman ID</label>
            <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->user_id}}</option>
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

</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
                    <option>Active</option>
                    <option>Deactive</option>
            </select>
    </div>
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

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!--fluid-container end-->

</div>
<!--container end-->
@endsection