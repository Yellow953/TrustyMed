<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Doctor;

class AppointmentsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($id){
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $current_month = Carbon::now()->format('M');
        $doctor = Doctor::find($id);

        $today = Carbon::now();
        $tomorrow = Carbon::tomorrow();
        $day_3 = Carbon::now()->addDays(2);
        $day_4 = Carbon::now()->addDays(3);
        $day_5 = Carbon::now()->addDays(4);

        return view('appointments.index', compact('doctor', 'months', 'current_month', 'today', 'tomorrow', 'day_3', 'day_4', 'day_5'));
    }

    public function another_day($id, $day){
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $current_month = Carbon::now()->format('M');
        $doctor = Doctor::find($id);
    
        $date = Carbon::create(Carbon::now()->year, Carbon::now()->month, $day, 0, 0, 0);
        
        $today = $date;
        $tomorrow = $date->copy()->addDays(1);
        $day_3 = $date->copy()->addDays(2);
        $day_4 = $date->copy()->addDays(3);
        $day_5 = $date->copy()->addDays(4);
    
        return view('appointments.index', compact('doctor', 'months', 'current_month', 'today', 'tomorrow', 'day_3', 'day_4', 'day_5'));
    }
    

}
