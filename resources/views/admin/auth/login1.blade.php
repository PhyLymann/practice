@extends('admin.layout.master')

@section('content')

<div class="row my-5 justify-content-center"> 

      @if($errors->any())
        <div class="alert alert-danger d-flex justify-content-center " role="alert"   >
          {{-- <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg> --}}
            Please Enter Infomation Following Policy!
        </div>
      @endif

        <div class="col-md-6">

          <!--Register form-->
          <form action="/login" method="post">

            @csrf

            <div >
              <h3 style="text-align: center;">Welcome</h3>
              <style>
                h3{
                  background-color: rgb(17, 124, 225); 
                  height: 50px; 
                  margin-top: 25px;
                  margin-bottom: 25px;
                  color:white;
                  text-align: center;
                }
              </style>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" value="{{old('email')}}" class="@if($errors->has('email')) is-invalid @endif  form-control" id="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
              @endif
            </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" value="{{old('password')}}" class="@if($errors->has('password')) is-invalid @endif  form-control" id="password">
            @if ($errors->has('password'))
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
              @endif
            </div>
              <button type="submit" class="btn btn-primary">Login</button><br><br>

              <a href="/register" class="mt-5">Not yet have account? Register here</a>
            </form>
        </div>
          <div class="col-md-8">

          </div>
    </div>
@endsection