<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\PaymentType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Doctor;

class AppointmentsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($id){
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $time = ['09', '10', '11', '12', '13', '14', '15', '16', '17'];
        $current_month = Carbon::now()->format('M');
        $doctor = Doctor::find($id);

        $today = Carbon::now();
        $tomorrow = Carbon::tomorrow();
        $day_3 = Carbon::now()->addDays(2);
        $day_4 = Carbon::now()->addDays(3);
        $day_5 = Carbon::now()->addDays(4);

        $data = compact('doctor', 'months', 'time', 'current_month', 'today', 'tomorrow', 'day_3', 'day_4', 'day_5');
        return view('appointments.index', $data);
    }

    public function another_day($id, $day){
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $time = ['09', '10', '11', '12', '13', '14', '15', '16', '17'];
        $current_month = Carbon::now()->format('M');
        $doctor = Doctor::find($id);
    
        $date = Carbon::create(Carbon::now()->year, Carbon::now()->month, $day, 0, 0, 0);
        $today = $date;
        $tomorrow = $date->copy()->addDays(1);
        $day_3 = $date->copy()->addDays(2);
        $day_4 = $date->copy()->addDays(3);
        $day_5 = $date->copy()->addDays(4);
    
        $data = compact('doctor', 'months', 'time', 'current_month', 'today', 'tomorrow', 'day_3', 'day_4', 'day_5');
        return view('appointments.index', $data);
    }
    
    public function new($id){
        $doctor = Doctor::find($id);
        $payment_types = PaymentType::all();
        return view('appointments.new', compact('doctor', 'payment_types'));
    }

    public function create(Request $request){
        $appointment = new Appointment();
        $doctor = Doctor::find($request->doctor_id);

        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->cost = $doctor->consultation_cost;
        $appointment->doctor_id = $doctor->id;
        $appointment->user_id = auth()->user()->id;
        $appointment->payment_id = $request->payment_id;

        $appointment->save();
        return redirect('/doctor/' . $appointment->doctor_id . '/appointments')->with('success', 'Appointment successfully created');
    }

    public function destroy($id){
        $appointment = Appointment::find($id);
        $doctor_id = $appointment->doctor_id;
        $appointment->delete();
        return redirect('/doctor/' . $doctor_id . '/appointments')->with('error', 'Appointment cancelled');
    }
}
