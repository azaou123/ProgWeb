<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Teacher;

class InternshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr = Internship::count();
        $internships = Internship::all();
        return view("listInternship",['internships'=>$internships, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('addInternship',['teachers'=>$teachers]);
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
            'title' => 'required',	
            'description'=> 'required',
            'from'=> 'required',
            'to'=> 'required',
            'company' => 'required',
            'teachers' => 'required|array', // Ensure teachers input is an array
            'teachers.*' => 'exists:teachers,id', // Validate each student ID exists
            
        ]);


        // 3. On enregistre les informations 
        $internship = Internship::create([
            'title' => $request->title,
            'description' => $request->description,
            'date_start' => $request->from,
            'date_end' => $request->to,
            'company' => $request->company
        ]);


        $internship->teachers()->sync($request->input('teachers'));

        return redirect("Internships");
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
        $dataI = Internship::findOrFail($id);
        $teachers = Teacher::all();

        return view('updateInternship', ['dataI' => $dataI, 'teachers' => $teachers]);
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
       // 1. La validation
       $this->validate($request, [
            'title' => 'required',	
            'description'=> 'required',
            'from'=> 'required',
            'to'=> 'required',
            'company' => 'required',
            'teachers' => 'required|array', // Ensure teachers input is an array
            'teachers.*' => 'exists:teachers,id', // Validate each student ID exists
            
        ]);

        $internship = Internship::findOrFail($id);

        
        // 3. On enregistre les informations 
        $internship->update([
            'title' => $request->title,
            'description' => $request->description,
            'date_start' => $request->from,
            'date_end' => $request->to,
            'company' => $request->company,
        ]);

        $internship->teachers()->sync($request->teachers);

        return redirect("Internships");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $internship = Internship::findOrFail($id);
        $internship->delete();
        return redirect('Internships');
    }
}
