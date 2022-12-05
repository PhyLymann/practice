@extends('admin.layout.master')

@section('content')

    <h3 class="mt-5">Register</h3>

  <div class="row">
    <div class="col-md-4">

      <!--Register form-->
      <form action="/register" method="post">

        @csrf

          <div class="form-group">
              <label for="exampleInputName">Name</label>
              <input name="name" placeholder="Enter your name" type="text" class="form-control" id="exampleInputName" aria-describedby="emailName">
            </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" placeholder="Enter your email address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" placeholder="Enter password" type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input name="password_confirmation" placeholder="Confirm your password" type="password" class="form-control" id="exampleInputPassword1">
          </div><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-md-8">

    </div>
  </div>
@endsection