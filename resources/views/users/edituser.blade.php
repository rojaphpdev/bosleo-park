@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6 col-xs-12">	
<form action="{{ url('/users/update/'. $user->id)  }}" method="post" >
{{csrf_field()}}
<div class="form-group">
<label>Title:</label>
<input type="text" value="{{$user->title}}" name="title" class="form-control">
</div>
<div class="form-group">
<label>First Name:</label>
<input type="text" value="{{$user->first_name}}" name="first_name" class="form-control">
</div>
<div class="form-group">
<label>
Last Name:</label> 
<input type="text" value="{{$user->last_name}}" name="last_name" class="form-control">
</div>
<div class="form-group">
<label>
Gender:</label>
<input type="text" value="{{$user->gender}}" name="gender" class="form-control">
</div>
<div class="form-group">
<label>
Email: </label>
<input type="text" value="{{$user->email}}" name="email" class="form-control">
</div>
<div class="form-group">
<label>
Phone:</label>
 <input type="text" value="{{$user->phone}}" name="phone" class="form-control">
</div>
<div class="form-group">
<label>
Street: </label>
<input type="text" value="{{$user->street}}" name="street" class="form-control">
</div>
<div class="form-group">
<label>
City:</label> 
<input type="text" value="{{$user->city}}" name="city" class="form-control">
</div>
<div class="form-group">
<label>
State:</label> 
<input type="text" value="{{$user->state}}" name="state" class="form-control">
</div>
<div class="form-group">
<label>
Post Code: </label>
<input type="text" value="{{$user->postcode}}" name="postcode" class="form-control">
</div>
<div class="form-group">
<label>
Country:</label> <input type="text" value="{{$user->country}}" name="country" class="form-control">
</div>
<button type="submit"  class="btn btn-primary mt-2"value="Submit">Submit</button>
</form>
</div>
</div>
@endsection