@extends('master')

@section('register')
 <form action="/register" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">photo</label>
    <input type="file" name="photo" class="form-control" id="exampleInputPassword1" placeholder="Upload photo">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection