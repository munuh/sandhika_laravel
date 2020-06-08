@extends('layout.main')
@section('title','detailstudents')
@section('container')  
<form action="/students/{{$student->id}}" method="post" >
{{ csrf_field() }}
{{method_field('PATCH')}} 
 <h3>Edit Students</h3>
     <div class="form-group">
       <label for="exampleFormControlInput1">Nama</label>
       <input type="text" class="form-control" id="nama" name="nama" value="{{$student->nama}}"> 
     </div>
     <div class="form-group">   
       <label for="exampleFormControlInput1">NRP</label>
       <input type="text" class="form-control" id="nrp" name="nrp" value="{{$student->nrp}}">
     </div>
     <div class="form-group">  
       <label for="exampleFormControlInput1">Email</label>
       <input type="text" class="form-control" id="email" name="email" value="{{$student->email}}">
     </div>
     <div class="form-group">   
       <label for="exampleFormControlInput1">Jurusan</label>
       <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{$student->jurusan}}">
     </div>   
       <button type="reset" class="btn btn-secondary">Clear</button>
       <button type="submit" class="btn btn-primary">Update</button>
     </div>
 </form> 
@endsection