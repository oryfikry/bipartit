<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\VoteController;

// use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


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
// mailer route 

// test 
Route::get('/testo', function () {
    $user = DB::table('users')
            ->select('email', 'link','is_receive')
            ->get();
    return response()->json($user);
})->name('testo');


Route::get('/', function () {
    return redirect()->action([HomeController::class, 'index']);
});

Auth::routes();

// Route::middleware(['throttle:3,1'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/board', [VoteController::class, 'showboard'])->name('board');
// });


// Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::resource('users', UsersController::class);
Route::resource('votes', VoteController::class);

