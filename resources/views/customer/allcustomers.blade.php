   @extends('layouts.main')
   @section('title','all customers')
   @section('links')
       <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   @endsection
   @section('content')
           <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">phone</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
                 <tr>
                <td>{{$customer->fname}}</td>
                <td>{{$customer->lname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>
            <form  action ="{{route('customer.show',$customer->id)}}" method="get" class="crud-form">
             @csrf
             <button class="btn btn-sm btn-primary"> Show </button>
            </form>
             <form action ="{{route('customer.edit',$customer->id)}}" method="get" class="crud-form">
              @csrf
             <button class="btn btn-sm btn-warning">Edit</button>
            </form>
             <form action ="{{route('customer.delete',$customer->id)}}" method="post" class="crud-form">
             @method('DELETE')
             @csrf
             <button class="btn btn-sm btn-danger">Delete</button>
            </form>
                </td>
            </tr>
        @endforeach
       
        </tbody>
    </table>
   @endsection
