<?php

namespace App\Http\Controllers;
use App\Models\Exchange_s;
use App\Models\Student;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Exchange_sController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr = Exchange_s::count();
        $exchanges = Exchange_s::all();
        return view("listExchangeStudent",['exchanges'=>$exchanges, 'nbr'=>$nbr]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('addExchangeStudent' ,['students'=>$students]);
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
            'date_start' => 'required',
            'date_end' => 'required',
            'type' => 'required',
            'description' => 'required',
            'students' => 'required|array', // Ensure students input is an array
            'students.*' => 'exists:students,id', // Validate each student ID exists
            
        ]);

        // 3. On enregistre les informations 
        $exchange_s = Exchange_s::create([
            "date_start" => $request->date_start,
            "date_end" => $request->date_end,
            "type" => $request->type,
            "description" => $request->description,
            
        ]);

        $studentIds = $request->input('students');
        $students = Student::whereIn('id', $studentIds)->get();
        $exchange_s->students()->saveMany($students);

        return redirect("StudentExchanges");
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
        $dataExchS = Exchange_s::findOrFail($id);
        $students = Student::all();

        return view('updateStudentExchange', ['dataExchS' => $dataExchS, 'students' => $students]);
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
            'date_start' => 'required',
            'date_end' => 'required',
            'type' => 'required',
            'description' => 'required',
            'students' => 'required|array', // Ensure students input is an array
            'students.*' => 'exists:students,id', // Validate each student ID exists
            
        ]);

        $studentExchange = Exchange_s::findOrFail($id);
        $studentExchange->update([
            "date_start" => $request->date_start,
            "date_end" => $request->date_end,
            "type" => $request->type,
            "description" => $request->description,

        ]);

        $students = $studentExchange->students()->get();;
        foreach ($students as $student) {
            if($student->exchange_s_id)
            {

                $student->update([
                    "exchange_s_id" => NULL
                ]);
            }
        }
        $studentIds = $request->input('students');
        $students = Student::whereIn('id', $studentIds)->get();
        $studentExchange->students()->saveMany($students);


        return redirect("StudentExchanges");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentExchange = Exchange_s::findOrFail($id);
        $students = $studentExchange->students();

        foreach ($students as $student) {
            if($student->exchange_s_id)
            {
                $student->update([
                    "exchange_s_id" => NULL,
                ]);
            }
        }
        $studentExchange->delete();

        return redirect('StudentExchanges');
    }
}
