@extends('layouts.main')
@section('title', 'add customer')
@section('content')
    <form action="{{ route('customer.store') }}" method="post">
        @csrf
        <div class="form-group py-1">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name"
                value="{{ old('fname') }}" aria-describedby="helpId">
            @error('fname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group py-1">
            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter last Name"
                value="{{ old('lname') }}" aria-describedby="helpId">
            @error('lname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="form-group py-1">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email"
                value="{{ old('email') }}" aria-describedby="helpId">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group py-1">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone"
              value="{{old('phone')}}" aria-describedby="helpId">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group py-2">
            <button class="btn btn-success"> Add Customer </button>
        </div>
    </form>
@endsection
