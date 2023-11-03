<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnersController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr= Partner::count();
        $partners = Partner::all();
        return view("listpartner", ['partners'=>$partners, 'nbr'=>$nbr]);
    }

    // public function index()
    // {
    //     $partnersLogo = Partner::all();
    //     return view("partners", ['partnersLogo'=>$partnersLogo]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPartner');
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
            'name_company' => 'required',
            'function_company' => 'required',
            'description' => 'required',
            'adress' => 'required',
            'email_company' => 'required',
            'website' => 'required',
            'fax' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000000'  
        ]);

        $name_image='';
        
        if($request->file('logo')){
            $image = $request->file('logo');
            $name_image = time().'partner.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        // 3. On enregistre les informations 
        Partner::create([
            "name_company" => $request->name_company,
            "function_company" => $request->function_company,
            "description" => $request->description,
            "adress" => $request->adress,
            "email_company" => $request->email_company,
            "website" => $request->website,
            "fax" => $request->fax,
            "logo" => $name_image
        ]);

        return redirect("Partners");
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
        $dataP = Partner::findOrFail($id);

        return view('updatePartner', ['dataP' => $dataP]);
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
            'name_company' => 'required',
            'function_company' => 'required',
            'description' => 'required',
            'adress' => 'required',
            'email_company' => 'required',
            'website' => 'required',
            'fax' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000000'  
        ]);
        $name_image='';
        
        if($request->file('logo')){
            $image = $request->file('logo');
            $name_image = time().'partner.'.$image->extension();
            $path = public_path().'/images/';
            $image->move($path, $name_image);
        }

        $partners = Partner::findOrFail($id);
        $partners->update([
            "name_company" => $request->name_company,
            "function_company" => $request->function_company,
            "description" => $request->description,
            "adress" => $request->adress,
            "email_company" => $request->email_company,
            "website" => $request->website,
            "fax" => $request->fax,
            "logo" => $name_image
        ]);

        return redirect("Partners");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return redirect("Partners");
    }
}
