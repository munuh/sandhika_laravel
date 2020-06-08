@extends('layout.main')
@section('title','aboutMunuh')
@section('container')
<div class="container">  
 <div class="row">
   <div class="col-md-30">
      <h1 class="mt-3">Daftar Mahasiswa</h1> 
      <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">NRP</th>
              <th scope="col">Email</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead> 
        <tbody>
           @foreach($mhs as $v)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$v->nama}}</td>
              <td>{{$v->nrp}}</td>
              <td>{{$v->email}}</td>
              <td>{{$v->jurusan}}</td>
              <td>
                  <a href="" class="badge badge-success">edit</a>
                  <a href="" class="badge badge-danger">delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
 </div> 
</div>
@endsection