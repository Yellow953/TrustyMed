@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        <div class="d-flex justify-content-between p-5">
            <div class="back-container">
                <img src="{{asset('assets/images/left_arrow.png')}}" alt="" class="back m-2">
            </div>
            <h3>Doctor Details</h3>
            <div></div>
        </div>

        <div class="doctor-details">
            <div class="row">
                <div class="col-4 col-md-3">
                    <div class="doctor-container w-100 d-flex justify-content-center">
                        <img src="{{asset('assets/images/doctor2.png')}}" alt="" class="doctor-image img-fluid">
                    </div>
                </div>
                <div class="col-4 col-md-9">
                    <div class="m-1 m-md-3">
                        <h5 class="doctor-name">Dr. Jenny Wilson</h5>
                        <div class="doctor-speciality">
                            Dental Surgeon
                        </div>
                        <div class="rating">
                            <img src="{{asset('assets/images/star.png')}}" alt="" class="star">5
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="details">
                <h4 class="details-h4 mt-4">Biography</h4>
                <p class="details-p">Dr Jenny Wilson (implantionist), is a dentist in america. She was 20 when she finished college ...</p>
            
                <h4 class="details-h4 mt-4">Specialities</h4>
                <div class="d-flex w-auto overflow-x-scroll">
                    <div class="speciality-card m-2 mx-3">
                        Dental Surgeon
                    </div>
                    <div class="speciality-card m-2 mx-3">
                        Dentist
                    </div>
                    <div class="speciality-card m-2 mx-3">
                        Doctor
                    </div>
                </div>
                
                <h4 class="details-h4 mt-4">Working Time</h4>
                <div class="working-time">
                    Mon - Sat (08:30 AM - 09:00 PM)
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