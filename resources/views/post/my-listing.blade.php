@extends('layout.master')

@section('content')

    <h2 class="my-5 text-center">MY ADS</h2>

    <div class="row">
        
        <div class="col-md-12">

            <table class="table">

                <thead>

                    <tr>
                        <th>No</th>

                        <th>Title</th>

                        <th>Image</th>

                        <th>Price</th>

                        <th>Category</th>
                        
                        <th>Option</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($posts as $post)
        
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <img class="img-thumbnail" width="100px"
                                @if($post->image) 
                                src="{{asset('storage/'.$post->image)}}" class="card-img-top" 
                                @else src="/images/thumbnail.png" 
                                @endif
                             />
                        </td>
                        <td>${{ $post->price }}</td>
                        <td>{{ $post->category? $post->category->name : 'N/A' }}</td>
                        <td>

                            <a class="btn btn-success btn-sm" href="/listing/{{ $post->id}}" target="_blank">Preview</a>

                            <a class="btn btn-primary btn-sm" href="/listing/edit/{{ $post->id}}">Edit</a>

                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="/listing/delete/{{ $post->id}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center mb-4">
                {!! $posts->links() !!}<!--paginate-->
              </div>          
        </div>

        <div class="col-md-12">
            <div class="mt-4 text-center">
                <h3 class="my-5">Trash</h3>
            </div>
                <div class="row">
                    <div class="col-md-7">
                        <style>
                            table {
                            font-family: arial, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                            text-align: center;
                            }
                            
                            td, th {
                            padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                            background-color: #dbedd7;
                            }
                            h3{
                                color: red;
                            }
                            </style>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Deleted_At</th>
                                    <th>Restore</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($soft_deleted->count())
                                @foreach ($soft_deleted as $delete )
                                <tr>
                                    <td>{{ $delete->id }}</td> 
                                    <td>{{ $delete->title}}</td>
                                    <td>
                                        <img class="img-thumbnail" width="100px"
                                            @if($post->image) 
                                            src="{{asset('storage/'.$post->image)}}" class="card-img-top" 
                                            @else src="/images/thumbnail.png" 
                                            @endif
                                         />
                                    </td>
                                    <td><small>{{ $delete->deleted_at }}</small></td>
                                    <td><a href="/listing/restore/{{ $delete->id }}"><i class="fa-solid fa-recycle"></i></a></td>
                                    <td><a class="text-danger" onclick="return confirm('Are you sure that you want to delete this forever?')" href="/listing/empty/{{ $delete->id }}"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                                @else
                                <h5>No Record</h5> 
                            @endif
                            </tbody>
                    </table>
                    </div>
                </div>                              
            </div>
    </div>
@endsection