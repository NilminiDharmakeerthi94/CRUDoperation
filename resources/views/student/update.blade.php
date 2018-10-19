@extends('layouts.app')
@section('content')
<div class="container">
{!! Form::open(['url' =>'student/update'.$student->id,'method'=>'post']) !!}
<div class="form-group">
    <label for="exampleInputName1">Name</label>
    
    {!! Form::text('name','null',['class'=>'form-control']); !!}
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Address</label>
  
    {!! Form::text('address','null',['class'=>'form-control']); !!}
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close() !!}




</div>
@stop