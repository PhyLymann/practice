@extends('admin.layout.master') 
@section('content') 
<h5 class="row my-5">Category</h5>
  <div class="row">
    <div class="col-lg-16">
      <a href="/admin/category" class="btn btn-danger">Reset</a>
      @foreach ($categories as $category)
        <a class="btn btn-info" href="/admin/category?c={{ $category->id}}">{{ $category->name}}({{ $category->post->count()}})</a>
      @endforeach
    </div>
  </div>
    <div class="row">
      <div class="my-4 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 flex justify-content-around">
        @foreach ($posts as $post )
          <div class="card" style="width: 18rem; margin:1rem; padding: 0;">
            <img @if($post->image) src="{{asset('storage/'.$post->image)}}" @else src="/images/thumbnail.png" @endif class="card-img-top" alt="..."/>
            <div class="card-body">
              <h5 class="card-title">{{ $post->title}}</h5>
              <small class="badge bg-danger" style="padding: 7px; color: black;">{{ $post->category? $post->category->name : ''}}</small>
              <p class="card-text">${{ $post->price}}</p>
              <a href="/admin/category/{{ $post->id}}" class="btn btn-info">View Detail</a>
            </div>
          </div>
        @endforeach
    </div>
    
    <div class="d-flex justify-content-center mb-4">
      {!! $posts->links() !!}<!--paginate-->
</div>
    
@endsection
