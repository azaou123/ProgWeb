<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr= Student::count();
        $students = Student::all();
        return view("listStud",['students'=>$students, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addStud');
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
            'lastname' => 'required',
            'firstname' => 'required',
            'nationality' => 'required',
            'university' => 'required',
            'email' => 'required',
            'dateBirthday' => 'required',
            'tel' => 'required'
        ]);

        // 3. On enregistre les informations 
        Student::create([
            "lastname" => $request->lastname,
            "firstname" => $request->firstname,
            "date_birth" => $request->dateBirthday,
            "nationnality" => $request->nationality,
            "university" => $request->university,
            "email_student" => $request->email,
            "phone_number" => $request->tel
        ]);

        return redirect("Students");
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
        $dataS = Student::findOrFail($id);

        return view('updateStudent', ['dataS' => $dataS]);
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
            'lastname' => 'required',
            'firstname' => 'required',
            'nationality' => 'required',
            'university' => 'required',
            'email' => 'required',
            'dateBirthday' => 'required',
            'tel' => 'required'
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            "id_internship" => $request->id_internship,
            "id_exchange_s" => $request->id_exchange_s,
            "lastname" => $request->lastname,
            "firstname" => $request->firstname,
            "date_birth" => $request->dateBirthday,
            "nationnality" => $request->nationality,
            "university" => $request->university,
            "email_student" => $request->email,
            "phone_number" => $request->tel
        ]);

        return redirect("Students");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('Students');
    }
}
