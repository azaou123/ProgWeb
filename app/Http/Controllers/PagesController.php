<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Partner;
use App\Models\Student;
use App\Models\Workshop;
use App\Models\Academic_program;
use App\Models\Cultural_program;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $partners = Partner::all();
        $latestNews = News::latest()->take(3)->get(); 
        $nbrStudent = Student::count();
        $nbrWorkshop = Workshop::count();
        $nbrProgram = Cultural_program::count() + Academic_program::count();

        return view('welcome',['latestNews'=>$latestNews,'partners'=>$partners, 'nbrStudent'=>$nbrStudent, 'nbrWorkshop'=>$nbrWorkshop, 'nbrProgram'=>$nbrProgram]);
    }
}
