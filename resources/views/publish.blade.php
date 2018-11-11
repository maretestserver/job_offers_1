
@extends('layouts.master')

@section('title', 'Page Title')



@section('content')
   <?php 

   $count =count($data);
   
   ?>
    <div class="row">
    <div class="col-md-8">
    <h3>Click button <b>Publish</b> to go to publish form</h3>
    </div>
    <div class="col-md-2">

      <a href="publish_job"  role="button" class="btn btn-primary">Publish</a>
   
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12 text-center">
    <h5>Bellow are published jobs (in database sam email count more then 1 )</h5>
  </div>
  <br>
 
  
 <?php if(!empty($data)): ?>
<?php for($i=0; $i< $count;$i++):?>
  <div class="col-md-12" style="background-color: #f2f2f2;margin-top: 15px;">
   <p><b>Title: </b><i><?php echo $data[$i]->title;?> </i></p>
   <p><b>Description: </b><i><?php echo $data[$i]->description ?></i></p>
   <p><b>Email: </b><i><?php echo $data[$i]->email ?></i></p>
   <p class="text-right"><i><b>Created: </b></i><?php echo $data[$i]->created ?></p>
  </div>
<?php endfor; ?>
</div>

<?php endif; ?>
@endsection