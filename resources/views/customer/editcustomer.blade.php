@extends('layouts.main')
@section('title','edit customer')
@section('content')
 <form action="{{route('customer.update',$customer->id)}}" method="post">
 @method('PUT')
 @csrf
     <div class="form-group py-1">
       <label for="fname">First Name</label>
       <input type="text" name="fname" id="fname" value="{{$customer->fname}}" class="form-control" >
      </div>
         @error('fname')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror
       <div class="form-group py-1">
       <label for="lname">Last name</label>
       <input type="text" name="lname" id="lname"  value="{{$customer->lname}}"  class="form-control"  >
     </div>
        @error('lname')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      <div class="form-group py-1">
       <label for="email">Email</label>
       <input type="text" name="email" id="email"  value="{{$customer->email}}"  class="form-control" >
     </div>
        @error('email')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror
      <div class="form-group py-1">
       <label for="phone">Phone</label>
       <input type="text" name="phone" id="phone"  value="{{$customer->phone}}"  class="form-control" >
     </div>
        @error('phone')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror
     <div class="form-group py-2">
      <button class="btn btn-success"> Edit Customer </button>
     </div>
      </form>
@endsection