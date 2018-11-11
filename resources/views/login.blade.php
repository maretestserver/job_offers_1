@extends('layouts.master')

@section('title', 'Page Title')



@section('content')
  

    <div class="col-md-12">
   <h3 class ="text-center">Log In</h3>
  </div>

<form action='login'  >
  <div class="form-group">
    <label for="user">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="user" placeholder="Enter email" name='email'>
   
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Entere Password" name='password'>
  </div>
 <input type="hidden" name="crf_token" value="<?php echo csrf_token(); ?>" id='crf_token'>
  <button type="submit" class="btn btn-primary" >Login</button>



</form>

@endsection