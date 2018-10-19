@extends('layouts.app')
@section('content')
<div class="col-md-6" col-md-offset-3>
<table class="table">
<a href="{{url('student/create/')}}" title="" class="btn btn-info">ADD</a>
<thead>
   <tr>
       <th>ID</th>
      <th>Name</th>
       <th>Address</th>
       <th>Action</th>
  </tr> 
</thead>
@foreach($students as $student)
   <tr>  <th scope="row">{{$student->id}}</th>
        <td>{{$student->name}}</td>
        <td>{{$student->address}}</td>
        <td><a href= "{{url('student/edit/'.$student->id) }}" class="btn btn-success">
        Edit
        </a>
        {{ Form::open(['url'=>'student/delete/'.$student->id,'method'=>'delete'])}}
        <input type="submit" name="" value="delete" class="btn btn-danger">
        {{ Form::close()}}
        
        </td>

    </tr>
  @endforeach
</table>



</div>

@stop