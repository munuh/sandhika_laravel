<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exceptions\Handler;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = student::all(); 
      return view('students.index',['students'=>$students]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //cara 1 
       //    $student = new Student;
       //    $student->nama =$request->nama; 
       //    $student->nrp =$request->nrp; 
       //    $student->email =$request->email; 
       //    $student->jurusan =$request->jurusan; 
       //    $student->save();   
       //cara 2
       //    DB::insert('INSERT INTO students (nama, nrp, email, jurusan, created_at, updated_at) VALUES (?,  ?,?,?,?,?)', 
      //    ['Mustopa', '00003', 'munuh.15@gmail.com', 'Teknik Komputer', now(),now()]); 
        $validatedData = $request->validate([
            'nama' => 'required',
            'nrp' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        student::create($request->all());
        return redirect('/students')->with('status', 'New Students Inserted!');; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        return view('students.show',["student"=>$student]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('students.edit',compact('student')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        student::where('id',$student->id)
                    ->update(['nama'=>$request->nama,'jurusan'=>$request->jurusan]); 
        return redirect('/students')->with('status','data '.$student->nama.' berhasil diupdate!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student::destroy($student->id); 
        return redirect('/students')->with('status','data '.$student->nama.' berhasil dihapus!'); 
    }
}
