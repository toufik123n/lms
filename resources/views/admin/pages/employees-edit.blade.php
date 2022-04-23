@extends('admin.master')

@section('content')

<div class="container">
<h1>Edit Employees</h1>

<div>

<!-- error message -->
@if($errors->any())
<div class='alert alert-danger' role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<!-- error message -->


<form action="{{route('admin.employees.update',$employee->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Employee Name</label>
    <input name="name" value="{{$employee->name}}" placeholder='Enter employee name' type="text" class="form-control" id="" required>
  </div>
 
  <div class="mb-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Employee Department</label>
            <select name="depatment" class="form-control" id="exampleFormControlSelect1" >
            @foreach ($departments as $department)
                    <option
                    @if($department->id==$employee->e_department)
                    selected
                    @endif
                    value="{{$department->id}}"> {{$department->name}} </option>
                    @endforeach
            </select>
    </div>
    </diV>
  
    <div class="mb-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Employee Designation</label>
            <select name="designation" class="form-control" id="exampleFormControlSelect1" >
            @foreach ($designations as $designation)
                    <option
                    @if($designation->id==$employee->e_designation)
                    selected
                    @endif
                    value="{{$designation->id}}"> {{$designation->name}} </option>
                    @endforeach
            </select>
    </div>
    </diV>



  <div class="mb-3">
    <label for="" class="form-label">Date of Birth</label>
    <input name="dob" value="{{$employee->dob}}" placeholder='' type="date" class="form-control" id="" required>
  </div>


 
  <div class="mb-3">
    <label for="" class="form-label">Contact no.</label>
    <input name="contact" value="0{{$employee->contact}}" placeholder='Phone number' type="text" class="form-control" id="" required>
  </div>
  

  
  <div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input name="address" value="{{$employee->address}}" placeholder='Enter employee address' type="text" class="form-control" id="" required>
  </div>
 

  
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input name="email" value="{{$employee->email}}" placeholder='Give employee email' type="text" class="form-control" id="" required>
  </div>



  
  <div class="mb-3">
    <label for="" class="form-label">Image</label>
    <input name="image" placeholder='' type="file" class="form-control" id="" >
  </div>
  

  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>
</div>



@endsection