@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Make Payments</h1>

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

<a href="{{route('admin.payments.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.payments.store')}}" method='post'>
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
                    <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
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
                    <option value="{{$customer->id}}">{{$customer->customer_id}}</option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Monthly Bill</label>
            <select name="bill" class="form-control" id="exampleFormControlSelect1">
            @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->charge ?? $customer->package->price}}</option>
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
    <label for="" class="form-label">Due</label>
    <input name="due" placeholder='Due(month)' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Advance</label>
    <input name="advance" placeholder='Month-Month' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Payment</label>
    <input name="payment" placeholder='Amount' type="number" class="form-control" id="" required>
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
            <label for="exampleFormControlSelect1">Month</label>
            <select name="month" class="form-control" id="exampleFormControlSelect1">
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
            </select>
</div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="">Year</label>
    <input name="year" placeholder='Enter current year' type="number" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Payment Collector ID</label>
            <select name="collector_id" class="form-control" id="exampleFormControlSelect1">
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
<div class="mb-3">
    <label for="" class="form-label">Discount</label>
    <input name="discount" placeholder='Discount amount' type="number" class="form-control" id="" >
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-7">
<div class="mb-3">
    <label for="" class="form-label">Discount Reason</label>
    <input name="reason" placeholder='Note' type="string" class="form-control" id="" >
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