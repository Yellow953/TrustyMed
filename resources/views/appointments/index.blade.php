@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        <div class="d-flex justify-content-between p-5">
            <div class="back-container">
                <a href="/doctor/1">
                    <img src="{{asset('assets/images/left_arrow.png')}}" alt="" class="back m-2">
                </a>
            </div>
            <h3>Book Appointment</h3>
            <div></div>
        </div>

        <div class="doctor-details">
            <h2 class="date mt-3">Date</h2>
            <div class="month my-3">
                <form action="/appointments/doctor/{{$doctor->id}}" method="get"></form>
                    @csrf
                    <select name="search" class="month-input">
                        @foreach ($months as $index=>$month )
                            <option value="{{$index+1}}" {{$month == $current_month ? 'selected' : ''}}>{{$month}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn">
                        <img src="{{asset('assets/images/Search.png')}}" alt="" class="icon-2">
                    </button>
                </form>
            </div>
            <div class="d-flex justify-content-around w-100 overflow-x-scroll">
                <a href="/appointments/doctor/{{$doctor->id}}/{{$today->day}}" class="nav-link">
                    <div class="day-card text-center day-active">
                        <div class="day-num text-white">{{$today->day}}</div>
                        <div class="day-str text-white">{{$today->format('D')}}</div>
                    </div>
                </a>
                <a href="/appointments/doctor/{{$doctor->id}}/{{$tomorrow->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$tomorrow->day}}</div>
                        <div class="day-str">{{$tomorrow->format('D')}}</div>
                    </div>
                </a>
                <a href="/appointments/doctor/{{$doctor->id}}/{{$day_3->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$day_3->day}}</div>
                        <div class="day-str">{{$day_3->format('D')}}</div>
                    </div>
                </a>
                <a href="/appointments/doctor/{{$doctor->id}}/{{$day_4->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$day_4->day}}</div>
                        <div class="day-str">{{$day_4->format('D')}}</div>
                    </div>
                </a>
                <a href="/appointments/doctor/{{$doctor->id}}/{{$day_5->day}}" class="nav-link">
                    <div class="day-card text-center">
                        <div class="day-num">{{$day_5->day}}</div>
                        <div class="day-str">{{$day_5->format('D')}}</div>
                    </div>
                </a>
            </div>

            <h2 class="time mt-5">Available Time</h2>
            <div class="row my-3">
                <div class="col-3">
                    <div class="time-card time-taken">
                        <div class="time-txt">
                            09:00 AM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card">
                        <div class="time-txt">
                            10:00 AM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card time-active">
                        <div class="time-txt text-white">
                            11:00 AM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card">
                        <div class="time-txt">
                            12:00 PM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card">
                        <div class="time-txt">
                            1:00 PM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card">
                        <div class="time-txt">
                            2:00 PM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card">
                        <div class="time-txt">
                            3:00 PM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card">
                        <div class="time-txt">
                            4:00 PM
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="time-card">
                        <div class="time-txt">
                            5:00 PM
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <a href="" class="btn-custom">Book Appointment</a>
        </div>
    </div>

    <br><br><br>
    @include('layouts.nav')
@endsection