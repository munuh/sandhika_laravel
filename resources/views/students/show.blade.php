@extends('layout.main')
@section('title','detailstudents')
@section('container')
 
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$student->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
    <p class="card-text">{{$student->email}}</p>
    <p class="card-text">{{$student->jurusan}}</p>
    <div style="display:flex;">
    <form method="post" action="{{$student->id}}"> 
       {{method_field('DELETE')}}
       {{ csrf_field() }} 
      <button type="submit" class="btn btn-danger">delete</button>
    </form>  
    <a href="{{$student->id}}/edit" class="btn btn-success" style="margin-left: 20px;">Edit</a>
    </div> 
  </div>
</div>  
@endsection