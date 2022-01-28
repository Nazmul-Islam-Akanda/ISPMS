@extends('master')

@section('content')
<div class="container">

 <div id="divToPrint">
 <h1>Employee Salary Details</h1>

      <p> <b>Employee Name:</b>  {{$employeeSalary->user->name}}</p>
      <p> <b>Employee ID:</b>  {{$employeeSalary->user->user_id}}</p>
      <p> <b>Employee Department:</b>  {{$employeeSalary->user->department->name}}</p>
      <p> <b>Paid Amount:</b>  {{$employeeSalary->paid}}</p>
      <p> <b>Advance:</b>  {{$employeeSalary->advance}}</p>
      <p> <b>Bonus:</b> {{$employeeSalary->bonus}} </p>
      <p> <b>Date:</b> {{$employeeSalary->date}} </p>
      <p> <b>Status:</b> {{$employeeSalary->status}} </p>
 </div>

 
      <a onClick="PrintDiv('divToPrint')" value="Print" class="btn" style="background-color:#FDB748; border-radius:10px">Print</a>
      &nbsp;
      <a href="{{route('admin.empolyees-salary.list')}}" class="btn" style="background-color:#EFD8AE; border-radius:10px">Back</a>

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