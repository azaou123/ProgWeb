<?php

namespace App\Http\Controllers;

use App\Models\Academic_program;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AcademicProgramColntroller extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr = Academic_program::count();
        $academic_programs = Academic_program::all();
        return view("listAcademicPrograms",['academic_programs'=>$academic_programs, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();

        return view('addAcademicProg',['teachers'=> $teachers]);
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
            'description' =>'required',
        	'nb_hours' =>'required',	
            'course' =>'required',
            'teacher_id' => 'exists:teachers,id',
            'image_ac' =>'file|mimes:png,jpg,jpeg|max:5000000'
        ]);

        $name_image = '';
        if($request->file('image_ac')){
            $image = $request->file('image_ac');
            $name_image = time().'_AcademicPrograms.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        // 3. On enregistre les informations 
        Academic_program::create([
            'title' => $request->title,
            'description' => $request->description,
        	'NB_hours'  => $request->nb_hours,	
            'course'  => $request->course,	
            'image_program_ACAD' => $name_image,
            'teacher_id' => $request->teacher_id,

        ]);

        return redirect("AcademicPrograms");
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
        $dataAP = Academic_program::findOrFail($id);
        $teachers = Teacher::all();

        return view('updateAcademicProg', ['dataAP' => $dataAP, 'teachers'=>$teachers]);
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
        'description' =>'required',
        'nb_hours' =>'required',	
        'course' =>'required',	
        'teacher_id' => 'exists:teachers,id',
        'image_ac' =>'file|mimes:png,jpg,jpeg|max:5000000'
    ]);

        $name_image = '';
        if($request->file('image_ac')){
            $image = $request->file('image_ac');
            $name_image = time().'_AcademicPrograms.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        $AP = Academic_program::findOrFail($id);

       

        // 3. On enregistre les informations 
        $AP->update([
            'title' => $request->title,
            'description' => $request->description,
        	'NB_hours'  => $request->nb_hours,	
            'course'  => $request->course,	
            'image_program_ACAD' => $name_image,
            'teacher_id' => $request->teacher_id,
        ]);
        


        return redirect("AcademicPrograms");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $AP = Academic_program::findOrFail($id);
        $AP->delete();

        return redirect('AcademicPrograms');
    }
}
