@extends('admin.master')

@section('content')

<div class="container">
<h1>Add Website Information</h1>

<div>



<form action="{{route('admin.website-information.store',)}}" method="post" >
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Website Name</label>
    <input name="name" placeholder='Enter a name' type="text" class="form-control" id="" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

</div>

@endsection