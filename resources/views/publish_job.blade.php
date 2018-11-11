@extends('layouts.master')

@section('title', 'Page Title')
<style type="text/css">
  #spiner
  {
  display: block;
  position: fixed;
  z-index: 1031;
  top: 50%;
  right: 50%;
  width: 100px;
  height: 100px;
  display: none;
  
  }
</style>


@section('content')
<br>
<div class="col-md-12">
	<h3 class="text-center">Enter Submission data</h3>
</div>
   <form>
   	 <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
  </div>
  	 <div class="form-group">
    <label for="title">Description</label>
   
    <textarea id="description" placeholder="Description" rows="4" cols="50"  class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
 <input type="hidden" name="crf_token" value="<?php echo csrf_token(); ?>" id='crf_token'>
 
  <button type="button" class="btn btn-primary" onclick ="snimi()">Submit</button>
</form>

</div>
<img src="images/reloader.gif" id="spiner">
@endsection