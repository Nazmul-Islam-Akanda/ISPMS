@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Add Employees Salary Information</h1>

<!--temporary success message start-->
{{--@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif--}}
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

<a href="{{route('admin.empolyees-salary.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.users.store')}}" method='post' >
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Employee Department</label>
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
            <label for="exampleFormControlSelect1">Employee Name</label>
            <select name="name" class="form-control" id="exampleFormControlSelect1">
                {{--@foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach--}}
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Employee ID</label>
    <input name="id" placeholder='Employee ID' type="string" class="form-control" id="">
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
                    <option>Auguest</option>
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
    <label for="" class="form-label">Year</label>
    <input name="year" placeholder='Enter Current Year' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Advance</label>
    <input name="advance" placeholder='Month-Month' type="string" class="form-control" id="">
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
    <label for="" class="form-label">Paid Amount</label>
    <input name="paid" placeholder='Enter Paid amount' type="number" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Bonus</label>
    <input name="bonus" placeholder='Enter bonus amount' type="number" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">


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