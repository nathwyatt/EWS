<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\StationDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StationManagerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\StationCommunity;
use App\Models\Station;
use App\Models\Station_Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('stations', StationController::class);
    Route::resource('home', HomeController::class);
    Route::resource('stationdata',StationDataController::class);
    Route::resource('community',CommunityController::class);
    Route::get('/sensor-data', [StationDataController::class, 'processSensorData']);

    // profile
Route::middleware(['auth'])->group(function () {
    
    Route::post('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
    Route::get('/editprofile/{id}', [ProfileController::class, 'editprofile'])->name('editprofile');

    Route::get('/profile', function () {
        $user = Auth::user();
        return view('profile.profile', compact('user'));
    });
    
    //locations
    Route::get('/getDistricts',[StationCommunity::class,'getDistricts']);    

    Route::get('/getSectors',[StationCommunity::class,'getSectors']);

    Route::get('/getCells',[StationCommunity::class,'getCells']);
});

//notification
Route::get('/send',[HomeController::class,'SendNotification']);


Route::get('/notifications', function () {
    return view('notifications.emailnotification');
});
Route::post('/notifications', [HomeController::class,'sendNotification']);
});


Route::get("/admin",[\App\Http\Controllers\AdminController::class,'index']);

Route::get('chart', [\App\Http\Controllers\ChartJSController::class, 'handleChart']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);

  

Route::get('/locations/create', [LocationController::class, 'create'])->name('location.create');
Route::post('/locations', [LocationController::class, 'store'])->name('location.store');
Route::get('/locations/get-sectors', [LocationController::class, 'getSectors'])->name('location.get-sectors');
Route::get('/locations/get-cells', [LocationController::class, 'getCells'])->name('location.get-cells');
Route::get('/locations/get-villages', [LocationController::class, 'getVillages'])->name('location.get-villages');
Route::resource('locations', LocationController::class);