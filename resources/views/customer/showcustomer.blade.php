   @extends('layouts.main')
   @section('title','all customers')
   @section('content')
           <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">phone</th>
                <th scope="col">Created At</th>
                 <th scope="col">Updated At</th>

            </tr>
        </thead>
        <tbody>
            <tr>
              
                <td>{{$customer->id}}</td>
                <td>{{$customer->fname}}</td>
                <td>{{$customer->lname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->created_at}}</td> 
                <td>{{$customer->updated_at}}</td>   
            </tr>
      
       
        </tbody>
    </table>
   @endsection
