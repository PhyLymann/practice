@extends('layout.master')

@section('title') 

Post New Ads

@endsection

@section('content')
   
<h3 class="mt-4 text-center">Create New Post</h3>
<div class="row my-5 justify-content-center">
    <div class="col-md-6">
      @if($errors->any())

        <div class="alert alert-danger" role="alert">
            You have following errors.
        </div>
      @endif

        <form action="/store-post" enctype="multipart/form-data" method="post">
            @csrf 
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
                <select name="category" class="@if($errors->has('category')) is-invalid @endif form-control">
                  <option value="">Choose</option>
                  @foreach ($categories as $category)
                    <option @selected(old('category')==$category->id) value="{{$category->id}}">{{ $category->name }}</option>
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
              <input name="title" value="{{old('title')}}" type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" aria-describedby="title">
              @if($errors->has('title'))
                <div class="invalid-feedback">
                    {{ $errors->first('title')}}
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
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
            <textarea name="description" id="summernote" class="form-control @if($errors->has('description')) is-invalid @endif">{{old('description')}}</textarea>
            @if($errors->has('description'))
                <div class="invalid-feedback">
                    {{ $errors->first('description')}}
                </div>
              @endif
            </div>
            <div class="mb-3">
             
              @foreach ($tags as $tag)
                <input type="checkbox" name="tag[]" value="{{$tag->id}}" class="@if($errors->has('tag')) is-invalid @endif form-check-input" id="check1">
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
