<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;
use App\Models\Station;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Station_Data;
use Notification;
use App\Notifications\EmailNotification;
class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)

  {  
    
   
    $id = Auth::user()->station->id;
    $data = Station_Data::where('station_id',$id)->latest('created_at')->first();
    $com = Community::where('station_id', $id)->get();
    $stationId=$request->input('station_id');
   
    
    $numfarmers = Community::where('station_id', $id)->count(); 
    $numdata = Station_Data::where('station_id', $id)->count();   
    
    $user = Auth::user();
    if ($user->hasRole("Station-manager"))
     {
        $unreadNotifications = auth()->user()->unreadNotifications;
        $unreadNotificationsCount = $unreadNotifications->count();
    
        // Mark all unread notifications as read
        $unreadNotifications->markAsRead();
        return view('station-manager.index', compact('data','com','numfarmers','numdata','unreadNotificationsCount'));
     }
    else 
    {
        $numUsers = User::count();
        $numStations = Station::count();
        $numRoles = Role::count();
        return view('home', compact('numUsers', 'numStations', 'numRoles'));
    }
}
    public function view()
    {
        $data2 = User::select('id', 'created_at')->get()->groupBy(function($data2){
        return Carbon::parse($data2->created_at)->format('M');
             });
             $months=[];
             $monthcount=[];
             foreach($data2 as $months => $values){
             $months[]=$months;
             $monthcount[]= count($values);
             }
         return view('layouts/dashboard',['data'=>$data2,'months' => $months, 'monthcount' => $monthcount]);
    }

    public function SendNotification(Request $request)
    {
        $user=User::all();

        $details=[
            'greeting' => $request->input('greeting'),
            'body' => $request->input('body'),
            'actiontext' => $request->input('actiontext'),
            'actionurl' => $request->input('actionurl'),
            'lastline' => $request->input('lastline'),
        ];

        Notification::send($user, new EmailNotification($details));

        return redirect('/notifications')->with('success', 'Notification sent successfully!');
    }

   
      public function layout()
    {
        $unreadNotifications = auth()->user()->unreadNotifications;
        $unreadNotificationsCount = $unreadNotifications->count();
    dd($unreadNotificationsCount);
        // Mark all unread notifications as read
        $unreadNotifications->markAsRead();
        return view('stations', compact('unreadNotificationsCount'));
    }
    
}
