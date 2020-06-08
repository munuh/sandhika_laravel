@extends('layout.main')
@section('title','detailstudents')
@section('container')
 

 
<form action="/students" method="post" >
{{ csrf_field() }}
 <h3>Add New Students</h3>
     <div class="form-group">
       <label for="exampleFormControlInput1">Nama</label>
       <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}">
       
     </div>
     <div class="form-group">   
       <label for="exampleFormControlInput1">NRP</label>
       <input type="text" class="form-control" id="nrp" name="nrp" value="{{old('nrp')}}">
     </div>
     <div class="form-group">  
       <label for="exampleFormControlInput1">Email</label>
       <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
     </div>
     <div class="form-group">   
       <label for="exampleFormControlInput1">Jurusan</label>
       <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{old('jurusan')}}">
     </div>   
       <button type="reset" class="btn btn-secondary">Clear</button>
       <button type="submit" class="btn btn-primary">Submit</button>
     </div>
 </form> 
@endsection