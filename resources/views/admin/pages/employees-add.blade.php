@extends('admin.master')

@section('content')

<div class="container">
<h1>Add Employees</h1>

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


<form action="{{route('admin.employees.store')}}" method="post" enctype="multipart/form-data">
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Employee Name</label>
    <input name="name" placeholder='Enter employee name' type="text" class="form-control" id="" required>
  </div>
 
  
  
<div class="form-group">
            <label for="">Employee Department</label>
            <select name="depatment" class="form-control" id="">
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
            </select>
    </div>



<div class="form-group">
            <label for="exampleFormControlSelect1">Employee Designation</label>
            <select name="designation" class="form-control" id="exampleFormControlSelect1">
                @foreach ($designations as $designation)
                    <option value="{{$designation->id}}">{{$designation->name}}</option>
                    @endforeach
            </select>
    </div>



  <div class="mb-3">
    <label for="" class="form-label">Date of Birth</label>
    <input name="dob" placeholder='' type="date" class="form-control" id="" required>
  </div>


 
  <div class="mb-3">
    <label for="" class="form-label">Contact no.</label>
    <input name="contact" placeholder='Phone number' type="text" class="form-control" id="" required>
  </div>
  

  
  <div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input name="address" placeholder='Enter employee address' type="text" class="form-control" id="" required>
  </div>
 

  
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input name="email" placeholder='Give employee email' type="text" class="form-control" id="" required>
  </div>
 

 
<div class="mb-3">
    <label for="" class="form-label">Password:</label>
    <input name="password" placeholder='Default Password phone num' type="password" class="form-control" id="">
  </div>


  
  <div class="mb-3">
    <label for="" class="form-label">Image</label>
    <input name="image" placeholder='' type="file" class="form-control" id="" >
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>



@endsection