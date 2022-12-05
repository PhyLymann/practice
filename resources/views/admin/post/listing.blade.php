@extends('admin.layout.master')

@section('content')
    

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">The List of Post</h1>

    <table class="table">
        
        <thead>
          <tr style="background-color: #0eb6b6; color: white;">
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Option</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post )
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>${{ $post->price }}</td>
              <td>
                <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="..." style="width:100px;">
              </td>
              <td>
                <a class="btn btn-success btn-sm" href="/admin/category/{{ $post->id}}">Preview</a>&nbsp;

                <a class="btn btn-primary btn-sm" href="/admin/post/edit/{{ $post->id}}">Edit</a>&nbsp;

                <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="/admin/listing/delete/{{ $post->id}}">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table> 
      <style>
        table, th, td {
          border: 1px solid white;
          border-collapse: collapse;
        }
        th, td {
          background-color: #96D4D4;
        }
      </style>
      
@endsection