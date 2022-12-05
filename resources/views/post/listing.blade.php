@extends('layout.master') 

@section('content') 
    <div class="row my-5">
      <h3>All Ads</h3>
      <div class="row">
        <div class="col-md-12">
          <a href="/listing" class="btn btn-success">Reset</a>
          @foreach ($categories as $category)
           <a class="btn btn-info" href="/listing?c={{ $category->id}}">{{ $category->name}}({{ $category->post->count()}})</a>
          @endforeach
        </div>
      </div>
      <br><br>
      <div class="my-4 row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 flex justify-content-around">
        @foreach ($posts as $post )
          <div class="card" style="width: 18rem; margin:1rem; padding: 0;">
            <img @if($post->image) src="{{asset('storage/'.$post->image)}}" @else src="/images/thumbnail.png" @endif class="card-img-top" alt="..."/>
            <div class="card-body">
              <h5 class="card-title">{{ $post->title}}</h5>
              <small class="badge bg-danger">{{ $post->category? $post->category->name : ''}}</small><br>
              <div class="ml-12" style="display: flex;">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                          <p>{!! $post->description !!}</p>
                        </div>
              </div>
              <a href="/listing/{{ $post->id}}" class="btn btn-primary mt-3">View Detail</a>
            </div>
          </div>
        @endforeach
    </div>
    
    <div class="d-flex justify-content-center mb-4">
      {!! $posts->links() !!}<!--paginate-->
</div>
    
@endsection