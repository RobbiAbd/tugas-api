<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Home';
        $data['students'] = Student::all();
        
        return view('student_home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add';
        return view('student_add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nis'           => 'required|unique:students',
            'nama'          => 'required',
            'kelas'         => 'required',
            'alamat'        => 'required',
            'no_telepon'    => 'required',
        ]);

        $student = Student::insert([
            'nis'           => $request->get('nis'),
            'nama'          => $request->get('nama'),
            'kelas'         => $request->get('kelas'),
            'alamat'        => $request->get('alamat'),
            'no_telepon'    => $request->get('no_telepon'),
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit';
        $data['student'] = Student::find($id);
        return view('student_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nis'           => 'required|unique:students',
            'nama'          => 'required',
            'kelas'         => 'required',
            'alamat'        => 'required',
            'no_telepon'    => 'required',
        ]);

        Student::find($id)->update([
            'nis'   => $request->get('nis'),
            'nama'  => $request->get('nama'),
            'kelas'  => $request->get('kelas'),
            'alamat'  => $request->get('alamat'),
            'no_telepon'  => $request->get('no_telepon'),
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete($id);

        return redirect('/');
    }
}
