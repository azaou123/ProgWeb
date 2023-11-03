<?php

namespace App\Http\Controllers;
use App\Models\Exchange_teacher;
use App\Models\Teacher;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Exchange_sTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr = Exchange_teacher::count();
        $exchanges = Exchange_teacher::all();
        return view("listExchangeTeacher",['exchanges'=>$exchanges, 'nbr'=>$nbr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();

        return view('addExchangeTeacher', ['teachers' => $teachers]);
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
            'description' => 'required',	
            'date_start' => 'required',
            'date_end' => 'required',
            'teachers' => 'required|array', 
            'teachers.*' => 'exists:teachers,id', 
        ]);

        // 3. On enregistre les informations 
        $exchange_teacher = Exchange_teacher::create([
            'description' => $request->description,	
            'date_start' => $request->date_start,
            'date_end' => $request->date_end
        ]);

        $exchange_teacher->teachers()->sync($request->input('teachers'));


        return redirect("TeacherExchanges");
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
        $dataExchT = Exchange_teacher::findOrFail($id);
        $teachers = Teacher::all();

        return view('updateExchangeTeacher', ['dataExchT' => $dataExchT, 'teachers' => $teachers]);
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
            'description' => 'required',	
            'date_start' => 'required',
            'date_end' => 'required',
            'teachers' => 'required|array', 
            'teachers.*' => 'exists:teachers,id', 	
        ]);

        $teacherExchange = Exchange_teacher::findOrFail($id);
        $teacherExchange->update([
            'description' => $request->description,	
            'date_start' => $request->date_start,
            'date_end' => $request->date_end
        ]);

        $teacherExchange->teachers()->sync($request->input('teachers'));

    //     // $news = News::where('description', $teacherExchange->description)->first();
    //     // if ($news) {
    //     //     $news->update([
    //     //         'description' => $teacherExchange->description,
    //     //         'updated_at' => Carbon::now(),
    //     //     ]);
    // }

        return redirect("TeacherExchanges");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacherExchange = Exchange_teacher::findOrFail($id);
        // $news = News::where('description', $teacherExchange->description)->first();
        // if ($news) {
        //     $news->delete();
        // }
        $teacherExchange->delete();

        return redirect('TeacherExchanges');
    }
}
