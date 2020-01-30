<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Student;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        if ($students->count() > 0) :
            $response = $students;
        else :
            $response = "Data tidak ada";
        endif;

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        if ($student) :
            $response = "Data berhasil di tambahkan";
        else :
            $response = "Data gagal di tambahkan";
        endif;

        return response()->json($response);
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

        if ($student) :
            $response = "Data berhasil di tambahkan";
        else :
            $response = "Data gagal di tambahkan";
        endif;

        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);

        if ($student) :
            $response = $student;
        else :
            $response = "Data tidak ada";
        endif;

        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

       $student = Student::find($id)->update([
        'nis'   => $request->get('nis'),
        'nama'  => $request->get('nama'),
        'kelas'  => $request->get('kelas'),
        'alamat'  => $request->get('alamat'),
        'no_telepon'  => $request->get('no_telepon'),
    ]);

       if ($student) :
        $response = "Data berhasil di edit";
    else :
        $response = "Data gagal di edit";
    endif;

    return response()->json($response);
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
      if ($student) :
        $response = "Data berhasil di hapus";
    else :
        $response = "Data gagal di hapus";
    endif;

    return response()->json($response);
}
}
