<?php
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\PageController;
use App\Models\doctor;
use App\Models\major;
use App\Models\oppintement;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/", [PageController::class, "index"])->name("home");
Route::post("/contactAction", [PageController::class, "contact_action"])->name("contact.action");
Route::get("/contact", [PageController::class, "contact"])->name("contact");
Route::get("/history", [PageController::class, "history"])->name("history");
Route::get("/login", [PageController::class, "login"])->name("login");
Route::get("/major", [PageController::class, "major"])->name("major");
Route::get("/regester", [PageController::class, "regester"])->name("regester");
Route::get("/indexdoctoe", [PageController::class, "indexdoctoe"])->name("index_doctor");
Route::get("/doctor", [PageController::class, "doctor"])->name("doctor");



// major
//create
Route::get('/create_major', function () {
    major::create([
        'name' => 'public health',
        'description' => 'public health'
    ]);
});
Route::get('/create_major_qery', function () {
    DB::table('majors')->insert([
        'name' => 'public health qery',
        'description' => 'public health qery'
    ]);
});


// show
Route::get('/show_major', function () {
    // dd(major::all());
    dd(major::find(1));
});
Route::get('/show_major_qery', function () {
   
    dd( DB::table('majors')->get());
});

//update

Route::get('/update_major', function () {
    $major=major::find(1);
    $major->update(['name' =>'name after updated']);
});
Route::get('/update_major_qery', function () {
    $major=major::find(1);
    DB::table('majors')->where('id',3)->update(['name' =>'name after updated qery']);
});
//delete
Route::get('/delete_major', function () {
    // dd(major::all());
    major::find(1)->delete();
});
Route::get('/delete_major_qery', function () {
    
    DB::table('majors')->where('id',3)->delete();
});




//doctors
//create
Route::get('/create_doctor', function () {
    doctor::create([
        'name'=>'ahmed',
        'phone'=>'01013542566',
        'email'=>'aa@email.com',
        'major_id'=>2
    ]);
});
Route::get('/create_doctor_qery', function () {
    DB::table('doctors')->insert([
        'name'=>'ahmed qery',
        'phone'=>'01013542566',
        'email'=>'aa_qery@email.com',
        'major_id'=>2
    ]);
});


// show
Route::get('/show_doctor', function () {
    // dd(doctor::all());
    dd(doctor::find(1));
});Route::get('/show_doctor_qery', function () {
    //
    dd(DB::table('doctors')->get());
});

//update

Route::get('/update_doctor', function () {
    $doctor=doctor::find(1);
    $doctor->update(['name' =>'name after updated']);
});

Route::get('/update_doctor_qery', function () {
   
    DB::table('doctors')->where('id',4)->update(['name' =>'name after updated qery']);
});
//delete
Route::get('/delete_doctor', function () {
    // dd(doctor::all());
    doctor::find(1)->delete();
});
Route::get('/delete_doctor_qery', function () {
    
    DB::table('doctors')->where('id',4)->delete();
});

// appointement

//create
Route::get('/create_appointement', function () {
    oppintement::create([
        'name'=>'ahmed',
        'phone'=>'01013542566',
        'email'=>'a@email.com',
        'user_id'=>1,
        'doctor_id'=>3
    ]);
});
Route::get('/create_appointement_qery', function () {
    DB::table('oppointements')->insert([
        'name'=>'ahmed',
        'phone'=>'01013542566',
        'email'=>'ahmed_qery@email.com',
        'user_id'=>1,
        'doctor_id'=>3
    ]);
});
// show
Route::get('/show_appointement', function () {
    // dd(oppintement::all());
    dd(oppintement::find(1));
});
Route::get('/show_appointement_qery', function () {
    // dd( DB::table('oppointements')->wheres('id',5)->get());
    dd( DB::table('oppointements')->wheres('id',5)->first());
});


//update

Route::get('/update_appointement', function () {
    $oppintement=oppintement::find(1);
    $oppintement->update(['name' =>'name after updated']);
});
Route::get('/update_appointement_qery', function () {
    DB::table('oppointements')->wheres('id',5)->update(['name' =>'name after updated qery']);
});
//delete
Route::get('/delete_appointement', function () {
    
    oppintement::find(1)->delete();
});
Route::get('/delete_appointement_qery', function () {
    
    DB::table('oppointements')->wheres('id',5)->delete();
});





Route::get('/relation', function () {
    
   $x= major::find(2);
   dd( $x->doctors);

});
Route::get('/factory', function () {
    
  dd( oppintement::factory(10)->create());
 
 });

