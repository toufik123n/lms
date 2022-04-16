@extends('admin.master')

@section('content')

<div class='container'>
<h><b>Leaves List</b></h>
</div>

<br>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->



<table class="table table-bordered table-striped">
  <thead>
  <tr style='background-color:#00ffff'>
      <th scope="col">#</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Employee Email</th>
      <th scope="col">Leave Type</th>
      <th scope="col">Day Type</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Days</th>
      <th scope="col">Reason</th>
      <th scope="col">Feedback</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($leaves as $key=>$leave)
    <tr>

      <td>{{$key+1}}</td>
      <td>{{$leave->name}}</td>
      <td>{{$leave->email}}</td>
      <td>{{$leave->leaveType->name}}</td>
      <td>{{$leave->day}}</td>
      <td>{{$leave->start_date}}</td>
      <td>{{$leave->end_date}}</td>
      <td>{{$leave->days}}</td>
      <td>{{$leave->reason}}</td>
      <td>{{$leave->feedback}}</td>
      <td>{{$leave->status}}</td>
      <td>
      <a href="{{route('admin.leaves.details',$leave->id)}}"><svg xmlns="" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" fill="rgba(149,161,6,1)"/></svg></a>
        <a href="{{route('admin.leaves.edit',$leave->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(230,126,34,1)"/></svg></a>
    <a href="{{route('admin.leaves.delete',$leave->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" fill="rgba(231,76,60,1)"/></svg></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection