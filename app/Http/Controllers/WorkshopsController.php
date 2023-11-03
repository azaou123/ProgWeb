<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Workshop;
class WorkshopsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr= Workshop::count();
        $workshops = Workshop::all();
        return view("listWorkshop",['workshops'=>$workshops, 'nbr'=>$nbr]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addWorkshop');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
       //1. La validation
        $this->validate($request, [
            'title'=> 'required',	
            'description'=> 'required',	
            'university'=> 'required',	
            'country'=> 'required',	
            'city'=> 'required',	
            'date_start'=> 'required',	
            'date_end'=> 'required',	
            'type'=> 'required', 
            'image_workshop' => 'file|mimes:png,jpg,jpeg|max:5000000'
        ]);

        $name_image='';
        
        if($request->file('image_workshop')){
            $image = $request->file('image_workshop');
            $name_image = time().'workshop.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        
        // 3. On enregistre les informations 
        Workshop::create([
            'id_partenaire'=>$request->partner ,
            'title'=> $request->title ,	
            'description'=> $request->description ,	
            'university'=> $request->university,	
            'country'=> $request->country,	
            'city'=> $request->city,	
            'date_start'=> $request->date_start,	
            'date_end'=> $request->date_end,	
            'type'=> $request->type, 
            'image_workshop' => $name_image	
        ]);

        return redirect("Workshops")->with('success', 'successfully');;
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
        $dataW = Workshop::findOrFail($id);

        return view('updateWorkshop', ['dataW' => $dataW]);
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
            'title'=> 'required',	
            'description'=> 'required',	
            'university'=> 'required',	
            'country'=> 'required',	
            'city'=> 'required',	
            'date_start'=> 'required',	
            'date_end'=> 'required',	
            'type'=> 'required', 
            'image_workshop' => 'file|mimes:png,jpg,jpeg|max:5000000'
        ]);

        $workshop = Workshop::findOrFail($id);
        $name_image='';

        if($request->file('image_workshop')){

            $image = $request->file('image_workshop');
            $name_image = time().'workshop.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        $workshop->update([
            'id_partenaire'=>$request->partner ,
            'title'=> $request->title ,	
            'description'=> $request->description ,	
            'university'=> $request->university,	
            'country'=> $request->country,	
            'city'=> $request->city,	
            'date_start'=> $request->date_start,	
            'date_end'=> $request->date_end,	
            'type'=> $request->type, 
            'image_workshop' => $name_image 
        ]);

        return redirect("Workshops");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop = Workshop::findOrFail($id);

        $path = public_path().'/images/'.$workshop->image_workshop;

        Storage::delete($path);


        $workshop->delete();

        return redirect('Workshops');
    }
}
