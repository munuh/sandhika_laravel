@extends('layout.main')
@section('title','aboutMunuh')
@section('container')
<div class="container">
   <br>
    <div class="row"> 
     <div class="col-md-30">  
        <a href="/students/create">
            <span class="btn btn-primary">Tambah Student</span>
        </a> 
      </div>
    </div>    
    <div class="row"> 
     <div class="col-md-30">  
      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
      @endif
     </div>
    </div>    
    <div class="row"> 
        <div class="col-md-30">
            <h3 class="mt-3">List of Students</h3>
            
            <ul class="list-group">
                @foreach($students as $v)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$v->nama}}
                    <a href="/students/{{$v->id}}">
                       <span class="badge badge-primary badge-pill">detail</span>
                    </a>
                </li>
                @endforeach 
        </div>
    </div>
</div>
@endsection