@extends('customer.master')
@section('content')



<!-- WELCOME -->
<header  style="background-image: url('/jpg/customer/CX_Consulting_Hero.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; background-color: #000000;">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">  
      <div class="container my-auto"> 


      <!--container start-->
<div class="container">
<h1 style="color:#BAE73A"><b>Customer Mobile Banking Payment</b></h1>
           <!--form start-->

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

<!--server side validation start-->
<!--@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif-->
<!--server side validation end-->


<div>
<form action="{{route('website.payment.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
<div class="mb-3">
<label for="" class="">Customer Name</label>
    <input name="customer_name" placeholder='Enter your name' type="string" class="form-control" id="" required>
  </div>
                </div>
&nbsp;&nbsp;&nbsp;  &nbsp;
<div class="col-md-4">
<div class="mb-3">
<label for="" class="">Customer ID</label>
    <input name="customer_id" placeholder='Enter your ID' type="string" class="form-control" id="" required>
  </div>
</div>
<!--column end-->
</div>
<!--row end-->


<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
<div class="form-group">
            <label for="exampleFormControlSelect1">Mobile Banking</label>
            <select name="mobile_banking" class="form-control" id="exampleFormControlSelect1">
                @foreach ($mobile_bankings as $mobile_banking)
                    <option value="{{$mobile_banking->id}}">{{$mobile_banking->name}}</option>
                    @endforeach
            </select>
</div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;
<div class="col-md-4">
<div class="mb-3">
    <label for="" class="">Phone Number</label>
    <input name="number" placeholder='Payment from' type="number" class="form-control" id="" required>
  </div>
</div>
<!--column end-->
</div>
<!--row end-->


<!--row start-->
<div class="row">
    <!--column start-->
    <div class="col-md-4">
<div class="mb-3">
    <label for="" class="">TxnId</label>
    <input name="txnid" placeholder='Transaction ID' type="string" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;
<div class="col-md-4">
<div class="mb-3">
    <label for="" class="">Payment Amount</label>
    <input name="payment" placeholder='Enter your payment amount' type="number" class="form-control" id="" required>
  </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
    <!--column start-->
    <div class="col-md-4">
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
&nbsp;&nbsp;&nbsp;  &nbsp;
<div class="col-md-4">
<div class="mb-3">
    <label for="" class="">Year</label>
    <input name="year" placeholder='Enter current year' type="number" class="form-control" id="" required>
  </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
    <!--column start-->
    <div class="col-md-4">
<div class="mb-3">
<label for="" class="">Advance</label>
    <input name="advance" placeholder='Month-Month' type="string" class="form-control" id="" >
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;
<div class="col-md-4">
<div class="mb-3">
<label for="" class="">Due</label>
    <input name="due" placeholder='Due(month)' type="string" class="form-control" id="" >
  </div>
</div>
<!--column end-->
</div>
<!--row end-->

  <button type="submit" class="btn btn-primary">Payment</button>
</form>

</div>
</div>
<!--container end-->

</form>
<!--form end-->
</div>
<!--fluid-container end-->
</div>           
        
        
        </div>
      </div>
    </header>

    

@endsection
    