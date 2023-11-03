<?php

namespace App\Http\Controllers;

use App\Models\Fablab;

use Illuminate\Http\Request;

class FablabController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr = Fablab::count();
        $fablabs = Fablab::all();
        return view("listFabLab",['fablabs'=>$fablabs, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Fablab::all();

        return view('addFabLab');
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
            'title_fablab' => 'required',
            'image_fablab' => 'file|mimes:png,jpg,jpeg|max:5000000'	,
            'description_fablab' => 'required'
        ]);

        $name_image = '';
        if($request->file('image_fablab')){
            $image = $request->file('image_fablab');
            $name_image = time().'_fablab.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        // 3. On enregistre les informations 
        Fablab::create([
            'title_fablab' => $request->title_fablab,
            'description_fablab' => $request->description_fablab,
            'image_fablab' => $name_image
        ]);


       
        


        return redirect("Fablabs");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fablabs = Fablab::findOrFail($id);
        //$allnews = Fablab::orderBy('created_at', 'desc')->get();

        return view('fablab1', ['fablabs' => $fablabs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataF = Fablab::findOrFail($id);

        return view('updateFablab', ['dataF' => $dataF]);
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
            'title_fablab' => 'required',
            'image_fablab' => 'file|mimes:png,jpg,jpeg|max:5000000'	,
            'description_fablab' => 'required'
        ]);

        $fablab = Fablab::findOrFail($id);

        $name_image = '';
        if($request->file('image_fablab')){
            $image = $request->file('image_fablab');
            $name_image = time().'_fablab.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        // 3. On enregistre les informations 
        $fablab->update([
            'title_fablab' => $request->title_fablab,
            'description_fablab' => $request->description_fablab
        ]);


       
        return redirect("Fablabs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Fablab::findOrFail($id);
        $project->delete();

        return redirect('Fablabs');
    }
}
