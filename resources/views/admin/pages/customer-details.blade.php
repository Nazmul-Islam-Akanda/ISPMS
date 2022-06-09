@extends('master')

@section('content')
<div class="container">

 <div id="divToPrint">
 <h1>Customer Details</h1>

    <p><img src="{{url('/uploads/'.$customer->image)}}" width="100px" alt="Customer photo"> </p>
      <p> <b>Block:</b>  {{$customer->block->name}}</p>
      <p> <b>Customer Name:</b>  {{$customer->customer_name}}</p>
      <p> <b>Address:</b>  {{$customer->address}}</p>
      <p> <b>Contact No:</b>  0{{$customer->contact_no}}</p>
      <p> <b>Email:</b>  {{$customer->email}}</p>
      <p> <b>Customer ID:</b> {{$customer->customer_id}} </p>
      <p> <b>Connection date:</b> {{$customer->date}} </p>
      <p> <b>Customer type:</b> {{$customer->customer_type}} </p>
      <p> <b>Bill type:</b> {{$customer->bill_type}} </p>
      <p> <b>Package:</b> {{$customer->package->name}} </p>
      <p> <b>Monthly charge:</b> BDT {{$customer->charge ?? $customer->package->price}} </p>
      <p> <b>Service charge:</b> BDT {{$customer->service_charge}} </p>
      <p> <b>Lineman Department:</b> {{$customer->department->name}} </p>
      <p> <b>Lineman:</b> {{$customer->user->name}} </p>
      <p> <b>Lineman ID:</b> {{$customer->user->user_id}} </p>
      <p> <b>Status:</b> {{$customer->status}} </p>
 </div>

 
      <a onClick="PrintDiv('divToPrint')" value="Print" class="btn" style="background-color:#FDB748; border-radius:10px">Print</a>
      &nbsp;
      <a href="{{url('admin/customers-list')}}" class="btn" style="background-color:#EFD8AE; border-radius:10px">Back</a>

</div>
     
<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
 
@endsection





