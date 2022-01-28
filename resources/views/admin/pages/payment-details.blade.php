@extends('master')

@section('content')
<div class="container">

 <div id="divToPrint">
 <h1>Payment Details</h1>

      <p> <b>Customer Name:</b>  {{$payment->customer->customer_name ?? $payment->customer_name_id}}</p>
      <p> <b>Customer ID:</b>  {{$payment->customer->customer_id ?? $payment->customer_id_id}}</p>
      <p> <b>Monthly Bill:</b>  {{$payment->customer->charge ?? $payment->customer->package->price ?? ""}}</p>
      <p> <b>Due:</b>  {{$payment->due}}</p>
      <p> <b>Advance:</b>  {{$payment->advance}}</p>
      <p> <b>Payment:</b> {{$payment->payment}} </p>
      <p> <b>Month:</b> {{$payment->month}} </p>
      <p> <b>Year:</b> {{$payment->year}} </p>
      <p> <b>Mobile Banking:</b> {{$payment->mobileBanking->name ?? ""}} </p>
      <p> <b>Pay By Number:</b> {{$payment->number}} </p>
      <p> <b>TxnId:</b> {{$payment->txnid}} </p>
      <p> <b>Payment Collector:</b> {{$payment->user->name ?? ""}} </p>
      <p> <b>Payment Collector ID:</b> {{$payment->user->user_id ?? ""}} </p>
      <p> <b>Discount:</b> {{$payment->discount}} </p>
      <p> <b>Discount Reason:</b> {{$payment->reason}} </p>
      <p> <b>Time:</b> {{$payment->created_at}} </p>
 </div>

 
      <a onClick="PrintDiv('divToPrint')" value="Print" class="btn" style="background-color:#FDB748; border-radius:10px">Print</a>
      &nbsp;
      <a href="{{route('admin.payments.list')}}" class="btn" style="background-color:#EFD8AE; border-radius:10px">Back</a>

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