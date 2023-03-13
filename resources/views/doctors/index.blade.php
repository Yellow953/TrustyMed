@extends('layouts.app')

@section('content')
    <div class="container-fluid m-0 p-0 h-screen">
        @include('layouts.header')
        <div class="categories m-3 m-md-4 ">
            <h3 class="category-text mx-4 my-3 text-md-center">Categories</h3>
            <div class="category-images d-flex justify-content-center my-1">
                <div class="category-container mx-2 active">
                    <img src="{{asset('assets/images/heart_rate.png')}}" alt="" class="category-image">
                </div>
                <div class="category-container mx-2">
                    <img src="{{asset('assets/images/Pil.png')}}" alt="" class="category-image">
                </div>
                <div class="category-container mx-2">
                    <img src="{{asset('assets/images/Dentist.png')}}" alt="" class="category-image">
                </div>
                <div class="category-container mx-2">
                    <img src="{{asset('assets/images/Pregnant.png')}}" alt="" class="category-image">
                </div>
            </div>
        </div>
        <div class="doctors my-3">
            <div class="card doctor-card m-2 my-4">
                <div class="doctor">
                    <div class="row">
                        <div class="col-4 col-md-3">
                            <div class="doctor-container w-100 d-flex justify-content-center">
                                <img src="{{asset('assets/images/doctor1.png')}}" alt="" class="doctor-image img-fluid">
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
                </div>
            </div>

            <div class="card doctor-card m-2 my-4">
                <div class="doctor">
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
                </div>
            </div>            
        </div>
    </div>
@endsection