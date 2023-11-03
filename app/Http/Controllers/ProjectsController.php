<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr= Project::count();
        $projects = Project::with('students')->get();
        return view("listResearchProject",['projects'=>$projects, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('addResearchProject', ['students'=>$students]);
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
            'image_project' => 'file|mimes:png,jpg,jpeg|max:5000000',
            'students' => 'required|array', // Ensure students input is an array
            'students.*' => 'exists:students,id', // Validate each student ID exists
            
        ]);

        $name_image = '';
        if($request->file('image_project')){
            $image = $request->file('image_project');
            $name_image = time().'_Project.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }
        $project = Project::create([
            'title' => $request->title,	
            'description'=> $request->description,
            'image_project' => 	$name_image,

        ]);

        $project->students()->sync($request->input('students'));
        
        return redirect("ResearchProjects");
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
        $dataT = Project::findOrFail($id);
        $students = Student::all();

        return view('updateResearchProject', ['dataRP' => $dataT,'students'=>$students]);
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
            'image_project' => 'file|mimes:png,jpg,jpeg|max:5000000',
            'students' => 'required|array', // Ensure students input is an array
            'students.*' => 'exists:students,id', // Validate each student ID exists            
        ]);

        $project = Project::findOrFail($id);

        $name_image = '';
        if($request->file('image_project')){
            $image = $request->file('image_project');
            $name_image = time().'_Project.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        // 3. On enregistre les informations 
        $project->update([
            'title' => $request->title,	
            'description'=> $request->description,
            'image_project' => 	$name_image
        ]);

        $project->students()->sync($request->students);

        return redirect("ResearchProjects");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('ResearchProjects');
    }
}
