<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cultural_program;

class CulturalProgramsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr = Cultural_program::count();
        $cultural_programs = Cultural_program::all();
        return view("listCulturalPrograms",['cultural_programs'=>$cultural_programs, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addCulturalProg');
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
            'title'  => 'required',	
            'date' => 'required',	
            'description' => 'required',	
            'image_program_C' => 'file|mimes:png,jpg,jpeg|max:5000000'
        ]);

        $name_image = '';
        if($request->file('image_cp')){
            $image = $request->file('image_cp');
            $name_image = time().'_CulturalProgram.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        // 3. On enregistre les informations 
        Cultural_program::create([
            'title' => $request->title,
            'Date' => $request->date,
            'description' => $request->description,
            'image_program_C' => $name_image
        ]);

        return redirect("CulturalPrograms");
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
        $dataCP = Cultural_program::findOrFail($id);

        return view('updateCulturalProg', ['dataCP' => $dataCP]);
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
            'title'  => 'required',	
            'date' => 'required',	
            'description' => 'required',	
            'image_program_C' => 'file|mimes:png,jpg,jpeg|max:5000000'
        ]);

        $cultural_pr = Cultural_program::findOrFail($id);

        $name_image = '';
        if($request->file('image_cp')){
            $image = $request->file('image_cp');
            $name_image = time().'_CulturalProgram.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        // 3. On enregistre les informations 
        $cultural_pr->update([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'image_program_C' => $name_image
        ]);

        return redirect("CulturalPrograms");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cultural_pr = Cultural_program::findOrFail($id);
        $cultural_pr->delete();
        return redirect('CulturalPrograms');
    }
}
