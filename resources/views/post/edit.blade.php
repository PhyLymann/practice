@extends('layout.master')

@section('title')

Post New Ads

@endsection

@section('content')
   
<h3 class="mt-4 text-center">Edit Post</h3>
<div class="row my-5 justify-content-center">
    <div class="col-md-6">
      @if($errors->any())

        <div class="alert alert-danger" role="alert">
            You have following errors.
        </div>
      @endif

        <form action="/store/update/{{ $post->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
                <select name="category" class="@if($errors->has('category')) is-invalid @endif form-control">
                  <option value="">Choose</option>
                  @foreach ($categories as $category )
                    <option @selected(old('category', $post->category_id) == $category->id) value="{{$category->id}}">{{ $category->name }}</option>
                  @endforeach
                </select>
              @if($errors->has('category'))
                <div class="invalid-feedback">
                    {{ $errors->first('category')}}
                </div>
              @endif
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input name="title" value="{{old('title', $post->title )}}" type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" aria-describedby="title">
              @if($errors->has('title'))
                <div class="invalid-feedback">
                    {{ $errors->first('title')}}
                </div>
              @endif
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input name="price" value="{{old('price', $post->price)}}"  type="number" class="form-control @if($errors->has('price')) is-invalid @endif" id="price">
              @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{ $errors->first('price')}}
                    
                </div>
              @endif
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input name="image" type="file" class="form-control @if($errors->has('title')) is-invalid @endif" id="image">
                @if($errors->has('image'))
                <div class="invalid-feedback">
                    {{ $errors->first('image')}}
                </div>
              @endif

              <div class="img-thumbnail">
                <img class="img-thumbnail" width="100px"
                     @if($post->image) 
                      src="{{asset('storage/'.$post->image)}}" class="card-img-top w-100" style="width: 125px" 
                     @else src="/images/thumbnail.png" 
                     @endif
                  />
              </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
            <textarea name="description" id="summernote" class="form-control @if($errors->has('description')) is-invalid @endif">{{old('description', $post->description)}}</textarea>
            @if($errors->has('description'))
                <div class="invalid-feedback">
                    {{ $errors->first('description')}}
                </div>
              @endif
            </div>
            <div class="mb-3">
             
              @foreach ($tags as $tag)
                <input @if(in_array($tag->id, $tag_post)) @checked(true) @endif type="checkbox" name="tag[]" value="{{$tag->id}}" class="@if($errors->has('tag')) is-invalid @endif form-check-input" id="check1">
                <label for="check1" class="form-check-label">{{$tag->title}}</label>
              @endforeach
              @if ($errors->has('tag'))
                <div class="invalid-feedback">
                  {{$errors->first('tag')}}
                </div>
              @endif
            </div>  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>


@endsection

@push('scripts')
<script>
  $(document).ready(function() 
    {
      $('#summernote').summernote();
    });
</script>
@endpush
