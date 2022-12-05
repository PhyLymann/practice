@extends('admin.layout.master')

@section('content')
   
    <h3 class="mt-5">{{ $post->title}}</h3>
    <span class="badge bg-info text-white">{{ $post->category->name }}</span>
    <div class="row mt-5">
        <div class="col-md-7">
            {!! $post->description !!}

            <div class="my-5">
                @foreach ($post->tag as $tag)
                    
                <span class="badge bg-success">{{ $tag->title }}</span>

                @endforeach 
            </div>
        </div>
        <div class="col-md-3">
            <img 
                @if($post->image) 
                src="{{asset('storage/'.$post->image)}}" class="card-img-top" 
                @else src="/images/thumbnail.png" 
                @endif
            />
            <div class="row">
                <table>
                    <style>
                    table, th, td {
                        border: 1px solid white;
                        border-collapse: collapse;
                      }
                      th, td {
                        background-color: #0cb6b6;
                      }
                    </style>
                    @if($post->user)
                        <tr>
                            <th>Creator: &nbsp;</th>
                            <td>{{ $post->user->name }}</td>
                            
                        </tr>
                        <tr>
                            <th>Gmail:</th>
                            <td>{{ $post->user->email }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <h3>Similar Ads</h3>
    <div class="row my-2">
        <div class="my-3 row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 flex justify-content-around">
            @foreach ($similars as $post )
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img @if($post->image) src="{{asset('storage/'.$post->image)}}" @else src="/images/thumbnail.png" @endif class="card-img-top" alt="..."/>
                        <h5 class="card-title">{{ $post->title}}</h5>
                        <small class="badge bg-danger">{{ $post->category? $post->category->name : ''}}</small>
                        <p class="card-text">{{ $post->price}}</p>
                         <a href="/admin/detail/{{ $post->id}}" class="btn btn-primary">View Detail</a>
                    </div>
                </div> 
             @endforeach
        </div>
    </div>
</div>
@endsection