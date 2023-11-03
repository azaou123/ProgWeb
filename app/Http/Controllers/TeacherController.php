<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr= Teacher::count();
        $teachers = Teacher::all();
        return view("listTeacher",['teachers'=>$teachers, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
       // 1. La validation
        $this->validate($request, [
            'lastname' => 'required',
            'firstname' => 'required',
            'speciality' => 'required',
            'nationality' => 'required',
            'university' => 'required',
            'email' => 'required',
            'tel' => 'required'
        ]);

        // 3. On enregistre les informations 
        Teacher::create([
            "lastname" => $request->lastname,
            "firstname" => $request->firstname,
            "speciality" => $request->speciality,
            "nationnality" => $request->nationality,
            "university" => $request->university,
            "email_teacher" => $request->email,
            "phone_number" => $request->tel
        ]);

        return redirect("teachers");
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
        $dataT = Teacher::findOrFail($id);

        return view('updateTeacher', ['dataT' => $dataT]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_teacher)
    {
        // 1. La validation
        $this->validate($request, [
            'lastname' => 'required',
            'firstname' => 'required',
            'speciality' => 'required',
            'nationality' => 'required',
            'university' => 'required',
            'email' => 'required',
            'tel' => 'required'
        ]);
        $teacher = Teacher::findOrFail($id_teacher);
        $teacher->update([
            "lastname" => $request->lastname,
            "firstname" => $request->firstname,
            "speciality" => $request->speciality,
            "nationnality" => $request->nationality,
            "university" => $request->university,
            "email_teacher" => $request->email,
            "phone_number" => $request->tel
        ]);

        return redirect("teachers");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_teacher)
    {
        $teacher = Teacher::findOrFail($id_teacher);
        $teacher->delete();

        return redirect('teachers');
    }
}
