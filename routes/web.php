<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\Exchange_sController;
use App\Http\Controllers\CulturalProgramsController;
use App\Http\Controllers\AcademicProgramColntroller;
use App\Http\Controllers\FablabController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\ProgramesController;
use App\Http\Controllers\WorkshopsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InternshipsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\clientWorkshopController;
use App\Http\Controllers\Exchange_sTeacherController;
use App\Http\Controllers\clientFablabController;
use App\Http\Controllers\researchController;
use App\Http\Controllers\clientPartnersController;
use App\Http\Controllers\clientESController;
use App\Http\Controllers\clientISController;
use App\Http\Controllers\clientINController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TeamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource("/", PagesController::class);


Route::get('/interchanges-student', function () {
    return view('interchanges-student');
})->name('interchanges-student');




















Route::get('/fabLab1', function () {
    return view('fabLab1');
})->name('fabLab1');




Route::get('/admin', function () {
    return view('admin');
})->name('admin');




Route::get('/crud1', function () {
    return view('crud1');
})->name('crud1');


Route::get('/crud2', function () {
    return view('crud2');
})->name('crud2');

// Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');


Route::resource('/technicalAcheivements', clientFablabController::class);
Route::resource('/Projects', researchController::class);
Route::resource('/allPartners', clientPartnersController::class);
Route::resource('/all_Workshops', clientWorkshopController::class);
Route::resource('/news', newsController::class);
Route::resource("/interchanges-students-profiles", clientESController::class);
Route::resource('/interchanges-staff', clientISController::class);
Route::resource('/all_internships', clientINController::class);
Route::get('/news-space/{id}' ,[newsController::class,'show']);
Route::get('/fablab-space/{id_fablab}' ,[FablabController::class,'show']);
Route::get('/programs-space/{id}' ,[ProgramesController::class,'show']);
Route::resource("/programs", ProgramesController::class);
Route::resource('/team', TeamController::class);








Route::middleware(['auth'])->group(function () {

    Route::resource('teachers', TeacherController::class);
    Route::post('/storeTeacher',[TeacherController::class,'store']);
    Route::delete('/destroyTeacher/{id_teacher}',[TeacherController::class,'destroy']);
    Route::post('/updateTeacher/{id_teacher}',[TeacherController::class,'update']);


    Route::resource('Students', StudentController::class);
    Route::post('/storeStudent',[StudentController::class,'store']);
    Route::delete('/destroyStudent/{id}',[StudentController::class,'destroy']);
    Route::post('/updateStudent/{id}',[StudentController::class,'update']);


    Route::resource('StudentExchanges', Exchange_sController::class);
    Route::post('/storeStudentExtchange',[Exchange_sController::class,'store']);
    Route::delete('/destroyStudentExtchange/{id_exchange_s}',[Exchange_sController::class,'destroy']);
    Route::post('/updateStudentExtchange/{id_exchange_s}',[Exchange_sController::class,'update']);



    Route::resource('Workshops', WorkshopsController::class);
    Route::post('/storeWorkshop',[WorkshopsController::class,'store']);
    Route::delete('/destroyWorkshop/{id}',[WorkshopsController::class,'destroy']);
    Route::post('/updateWorkshop/{id}',[WorkshopsController::class,'update']);


    Route::resource('ResearchProjects', ProjectsController::class);
    Route::post('/storeResearchProject',[ProjectsController::class,'store']);
    Route::delete('/destroyResearchProject/{id_workshop}',[ProjectsController::class,'destroy']);
    Route::post('/updateResearchProject/{id_workshop}',[ProjectsController::class,'update']);



    Route::resource('Fablabs', FablabController::class);
    Route::post('/storeFablab',[FablabController::class,'store']);
    Route::delete('/destroyFablab/{id_fablab}',[FablabController::class,'destroy']);
    Route::post('/updateFablab/{id_fablab}',[FablabController::class,'update']);


    Route::resource('CulturalPrograms', CulturalProgramsController::class);
    Route::post('/storeCulturalPrograms',[CulturalProgramsController::class,'store']);
    Route::delete('/destroyCulturalPrograms/{id_cultural_prog}',[CulturalProgramsController::class,'destroy']);
    Route::post('/updateCulturalPrograms/{id_cultural_prog}',[CulturalProgramsController::class,'update']);



    Route::resource('AcademicPrograms', AcademicProgramColntroller::class);
    Route::post('/storeAcademicPrograms',[AcademicProgramColntroller::class,'store']);
    Route::delete('/destroyAcademicPrograms/{id_Academic_prog}',[AcademicProgramColntroller::class,'destroy']);
    Route::post('/updateAcademicPrograms/{id_Academic_prog}',[AcademicProgramColntroller::class,'update']);



    Route::resource('Internships', InternshipsController::class);
    Route::post('/storeInternship',[InternshipsController::class,'store']);
    Route::delete('/destroyInternship/{id_internshhip}',[InternshipsController::class,'destroy']);
    Route::post('/updateInternship/{id_internship}',[InternshipsController::class,'update']);



    Route::resource('TeacherExchanges', Exchange_sTeacherController::class);
    Route::post('/storeTeacherExchange',[Exchange_sTeacherController::class,'store']);
    Route::delete('/destroyTeacherExchange/{id_exchange_teacher}',[Exchange_sTeacherController::class,'destroy']);
    Route::post('/updateTeacherExchange/{id_exchange_teacher}',[Exchange_sTeacherController::class,'update']);


    Route::resource('Partners', PartnersController::class);
    Route::put('/storePartner',[PartnersController::class,'store']);
    Route::delete('/destroyPartner/{id_partenaire}',[PartnersController::class,'destroy']);
    Route::put('/updatePartner/{id_partenaire}',[PartnersController::class,'update']);

});

Auth::routes(['register' => false, 'rest' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
