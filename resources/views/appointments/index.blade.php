@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        <div class="d-flex justify-content-between p-5">
            <div class="back-container">
                <img src="{{asset('assets/images/left_arrow.png')}}" alt="" class="back m-2">
            </div>
            <h3>Book Appointment</h3>
            <div></div>
        </div>

        <div class="doctor-details">
            <h2 class="date mt-3">Date</h2>
            <div class="month my-3">
                <select name="month" class="month-input">
                    <option value="">February, 2023</option>
                    <option value="">March, 2023</option>
                    <option value="">April, 2023</option>
                </select>
            </div>
            <div class="d-flex justify-content-around w-100 overflow-x-scroll">
                <div class="day-card text-center {{($doctor->appointment->day == 13)? "day-active" : "" }}">
                    <div class="day-num text-white">13</div>
                    <div class="day-str text-white">MON</div>
                </div>
                <div class="day-card text-center">
                    <div class="day-num">14</div>
                    <div class="day-str">TUE</div>
                </div>
                <div class="day-card text-center">
                    <div class="day-num">15</div>
                    <div class="day-str">WED</div>
                </div>
                <div class="day-card text-center">
                    <div class="day-num">16</div>
                    <div class="day-str">THU</div>
                </div>
                <div class="day-card text-center">
                    <div class="day-num">17</div>
                    <div class="day-str">FRI</div>
                </div>
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