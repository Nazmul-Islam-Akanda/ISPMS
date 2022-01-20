@extends('master')

@section('content')

<div style="background-image: url('/jpg/website/wp4476464.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; min-height:885px; background-color: #000000;">

<h1 style=color:white>&emsp;&emsp;&emsp;&nbsp;<b>Dashboard</b></h1>

@if(session()->has('msg'))
<p class="alert alert-success">
    {{session()->get('msg')}}
</p>
@endif

<br>
<div class="row tile_count">
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=background-color:#325324>
    @php
    $total_user=0;
    foreach ($users as $user)
    {
        $total_user++;
    }
    @endphp
        <span class="count_top" style=color:#DED725><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm8.284 3.703A8.002 8.002 0 0 1 23 22h-2a6.001 6.001 0 0 0-3.537-5.473l.82-1.824zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.499 5.499 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609l.555-1.943z" fill="rgba(222,215,37,1)"/></svg>
         Total Users</span>
        <div class="count" style=color:#DED725><b>{{$total_user}}</b></div>
        <span class="count_bottom"><i class="green"> </i> </span>
    </div>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=background-color:#DED725>
        <span class="count_top" style=color:#2A2350><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 22a8 8 0 1 1 16 0H2zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm7.363 2.233A7.505 7.505 0 0 1 22.983 22H20c0-2.61-1-4.986-2.637-6.767zm-2.023-2.276A7.98 7.98 0 0 0 18 7a7.964 7.964 0 0 0-1.015-3.903A5 5 0 0 1 21 8a4.999 4.999 0 0 1-5.66 4.957z" fill="rgba(51,23,64,1)"/></svg>
        Total Customers</span>
        <div class="count" style=color:#2A2350><b>15</b></div>
        <span class="count_bottom"><i class="green"> </i></span> 
    </div>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=background-color:#25310C>
    <span class="count_top" style=color:#FFFFFF><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.5-6H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V6h2v2h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v2h-2v-2H8.5v-2z" fill="rgba(255,255,255,1)"/></svg>
    Total Payments</span>
        <div class="count green" style=color:#FFFFFF><b>20</b></div>
        <span class="count_bottom"><i class="green"></i> </span>
    </div>

    </div>

<br><br>
    <div class="row tile_count">
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=background-color:#25310C>
        <span class="count_top" style=color:#FFFFFF><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6.455 19L2 22.5V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H6.455zM4 18.385L5.763 17H20V5H4v13.385zM11 13h2v2h-2v-2zm0-6h2v5h-2V7z" fill="rgba(255,255,255,1)"/></svg>
        Total Complains</span>
        <div class="count" style=color:#FFFFFF><b>12</b></div>
        <span class="count_bottom"><i class="red"> </i> </span>
    </div>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=background-color:#AADD37>
        <span class="count_top" style=color:#2A2350><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18zM11 13H4v6h7v-6zm9 0h-7v6h7v-6zm-9-8H4v6h7V5zm9 0h-7v6h7V5z" fill="rgba(46,20,57,1)"/></svg>
        Total Blocks </span>
        <div class="count" style=color:#2A2350><b>10</b></div>
        <span class="count_bottom"><i class="green"> </i> </span>
    </div>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style=background-color:#325324>
        <span class="count_top" style=color:#DED725><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M9.536 13H7.329c-.412 1.166-1.523 2-2.829 2-1.657 0-3-1.343-3-3s1.343-3 3-3c1.306 0 2.418.835 2.83 2h2.206L13 5h3.17c.412-1.165 1.524-2 2.83-2 1.657 0 3 1.343 3 3s-1.343 3-3 3c-1.306 0-2.417-.834-2.829-2h-2.017l-2.886 4.999L14.155 17h2.016c.411-1.165 1.523-2 2.829-2 1.657 0 3 1.343 3 3s-1.343 3-3 3c-1.306 0-2.417-.834-2.829-2H13l-3.464-6zM19 17c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1zM4.5 11c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1zM19 5c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1z" fill="rgba(241,217,14,1)"/></svg>
        Total Packages </span>
        <div class="count" style=color:#DED725><b>25</b></div>
        <span class="count_bottom"><i class="green"></i></span>
    </div>

    </div>

    </div>

@endsection