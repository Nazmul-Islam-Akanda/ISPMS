@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Edit Payments</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('admin.payments.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.payments.update',$payment->id)}}" method='post'>
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
                    @if($customer->id==$payment->customer_name_id)
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
                    @if($customer->id==$payment->customer_id_id)
                    selected
                    @endif
                    value="{{$customer->id}}"> {{$customer->customer_id}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Due</label>
    <input name="due" value="{{$payment->due}}" placeholder='Due(month)' type="string" class="form-control" id="">
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
    <label for="" class="form-label">Advance</label>
    <input name="advance" value="{{$payment->advance}}" placeholder='Month-Month' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Payment</label>
    <input name="payment" value="{{$payment->payment}}" placeholder='Amount' type="number" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Month</label>
            <select name="month" class="form-control" id="exampleFormControlSelect1">
            <option {{ ($payment->month) == 'January' ? 'selected' : '' }}  value="January">January</option>
            <option {{ ($payment->month) == 'February' ? 'selected' : '' }}  value="February">February</option>
            <option {{ ($payment->month) == 'March' ? 'selected' : '' }}  value="March">March</option>
            <option {{ ($payment->month) == 'April' ? 'selected' : '' }}  value="April">April</option>
            <option {{ ($payment->month) == 'May' ? 'selected' : '' }}  value="May">May</option>
            <option {{ ($payment->month) == 'June' ? 'selected' : '' }}  value="June">June</option>
            <option {{ ($payment->month) == 'July' ? 'selected' : '' }}  value="July">July</option>
            <option {{ ($payment->month) == 'August' ? 'selected' : '' }}  value="August">August</option>
            <option {{ ($payment->month) == 'September' ? 'selected' : '' }}  value="September">September</option>
            <option {{ ($payment->month) == 'October' ? 'selected' : '' }}  value="October">October</option>
            <option {{ ($payment->month) == 'November' ? 'selected' : '' }}  value="November">November</option>
            <option {{ ($payment->month) == 'December' ? 'selected' : '' }}  value="December">December</option>
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
    <label for="" class="">Year</label>
    <input name="year" value="{{$payment->year}}" placeholder='Enter current year' type="number" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Payment Collector ID</label>
            <select name="collector_id" class="form-control" id="exampleFormControlSelect1">
            @foreach ($users as $user)
                    <option
                    @if($user->id==$payment->collector_id)
                    selected
                    @endif
                    value="{{$user->id}}"> {{$user->user_id}} </option>
                    @endforeach
                    <option
                    @if($payment->mobile_banking_id!='')
                    selected
                    @endif></option>
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Discount</label>
    <input name="discount" value="{{$payment->discount}}" placeholder='Discount amount' type="number" class="form-control" id="" >
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
<div class="col-md-7">
<div class="mb-3">
    <label for="" class="form-label">Discount Reason</label>
    <input name="reason" value="{{$payment->reason}}" placeholder='Note' type="string" class="form-control" id="" >
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
            <label for="exampleFormControlSelect1">Mobile Banking</label>
            <select name="mobile_banking" class="form-control" id="exampleFormControlSelect1">
            @foreach ($mobile_bankings as $mobile_banking)
                    <option
                    @if($mobile_banking->id==$payment->mobile_banking_id)
                    selected
                    @endif
                    value="{{$mobile_banking->id}}"> {{$mobile_banking->name}} </option>
                    @endforeach
                    <option
                    @if($payment->collector_id!='')
                    selected
                    @endif></option>
            </select>
</div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="">Pay By Number</label>
    <input name="number" value="{{$payment->number}}" placeholder='Payment from' type="number" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="">TxnId</label>
    <input name="txnid" value="{{$payment->txnid}}" placeholder='Transaction ID' type="string" class="form-control" id="" required>
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