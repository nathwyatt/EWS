<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\StationDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StationManagerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\frontend;
use App\Http\Controllers\StationCommunity;
use App\Http\Controllers\ChartJSController;
use App\Models\Station;
use App\Models\Station_Data;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\PredictionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', [frontend::class,'index'] );
// Route::get('/',[frontend::class,'about']);
// Route::middleware('setapplang')->prefix('{locale}')->group(function(){
Auth::routes();
// });
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('stations', StationController::class);
    Route::resource('home', HomeController::class);

    // Route::resource('stationdata',StationDataController::class);
    Route::get('/stationdata', [StationDataController::class, 'index']); 
    Route::get('/stationdata1', [StationDataController::class, 'BushogaStation']);
    Route::get('/stationdata2', [StationDataController::class, 'NshekeStation']);
    Route::get('/community1', [CommunityController::class, 'BushogaStation']);
    Route::get('/community2', [CommunityController::class, 'NshekeStation']);
    Route::resource('community',CommunityController::class);
    Route::get('/sensor-data', [StationDataController::class, 'processSensorData']);
    Route::post('/get-districts', 'App\Http\Controllers\CommunityController@getDistricts')->name('get-districts');

    //linechat
    Route::get('/linechart', [StationManagerController::class, 'linechart'])->name('linechart');
  
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    //locations
    // Route::get('/getDistricts',[StationCommunity::class,'getDistricts']);    
    Route::get('/getSectors',[StationCommunity::class,'getSectors']);
    Route::get('/getCells',[StationCommunity::class,'getCells']);

    // get district, sectors,cells,villages

    Route::get('get-districts', [StationController::class, 'getDistricts'])->name('stations.create');
    Route::get('get-sectors', [StationController::class, 'getSectors'])->name('stations.create');
    Route::get('get-cells', [StationController::class, 'getCells'])->name('stations.create');
    Route::get('get-villages', [StationController::class, 'getVillages'])->name('getVillages');
    // localizaztion route
    Route::get('locale/{lange}',[LocalizationController::class,'setLang']);
    //charts
    Route::get('/charts/bar_chart', [ChartJSController::class, 'handleChart'])->name('charts.bar_chart');

    });
    //notification
    Route::get('/send',[HomeController::class,'SendNotification']);
    Route::get('/home1',[HomeController::class,'showDashboard']);
    // Define a single route to access the notifications page
    Route::get('/notifications', [HomeController::class, 'showNotifications'])->name('notifications.index');
    // Route for displaying the notification form
    Route::get('/notifications/form', [HomeController::class, 'showNotificationForm'])->name('notifications.form');
    // Define a route to clear notifications
    Route::delete('/notifications/{notification}', [HomeController::class, 'clearNotification'])->name('notifications.clear');
    Route::post('/notifications', [HomeController::class,'sendNotification']);
    Route::get('/datanotification', [StationDataController::class,'notifications'])->name('station-manager.notifications');
    Route::get("/admin",[\App\Http\Controllers\AdminController::class,'index']);
    Route::get('chart', [\App\Http\Controllers\ChartJSController::class, 'handleChart']);
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);  
    Route::get('/locations/create', [LocationController::class, 'create'])->name('location.create');
    Route::post('/locations', [LocationController::class, 'store'])->name('location.store');
    Route::get('/locations/get-sectors', [LocationController::class, 'getSectors'])->name('location.get-sectors');
    Route::get('/locations/get-cells', [LocationController::class, 'getCells'])->name('location.get-cells');
    Route::get('/locations/get-villages', [LocationController::class, 'getVillages'])->name('location.get-villages');
    Route::resource('locations', LocationController::class);



    // routes/web.php
    Route::post('/predict-submit', [PredictionController::class, 'submitPrediction'])->name('predict.submit');
    Route::get('/predict-form', [PredictionController::class, 'showForm'])->name('predict.form');
    Route::get('/predictions', [PredictionController::class, 'index'])->name('predictions.index');

    //Sms notification
    Route::get('/sendsms', [SmsController::class, 'sendsms'])->name('send.sms');
    Route::get('/notifications/history', [SmsController::class, 'notificationHistory'])->name('notifications.history');
    Route::delete('/notifications/delete/{id}', [SmsController::class, 'deleteNotification'])->name('notifications.delete');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
