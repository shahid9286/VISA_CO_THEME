@extends('front.home3.layouts.master')
@section('title', 'Home Page')

@section('content')


    <!-- Start banner Area
    ============================================= -->
   @include('front.home3.partials.banner')
    <!-- End banner -->
    <!-- Start feature
    ============================================= -->

   @include('front.home3.partials.feature')
    <!-- End feature -->

<!-- Start About
    ============================================= -->
   @include('front.home3.partials.about')
    <!-- End About -->
    
    <!-- Start process
    ============================================= -->
   @include('front.home3.partials.process')
    <!-- End process -->

    <!-- Start appointment
    ============================================= -->
   @include('front.home3.partials.appointment')

    <!-- End appointment -->


     <!-- Start Visa Category3
    ============================================= -->
   @include('front.home3.partials.visa_category3')

    <!-- End Visa Category3 -->

     <!-- Start  course
    ============================================= -->
   @include('front.home3.partials.course')

    <!-- End  course  -->
 <!-- Start Team
    ============================================= -->
@include('front.home3.partials.team')

    <!-- End Team -->
      <!-- Start Testimonial3
    ============================================= -->
   @include('front.home3.partials.testimonial3')

    <!-- End Testimonial3 -->
    
         <!-- Start call_to_action
     
    ============================================= -->
   @include('front.home3.partials.call_to_action')

    <!-- End call_to_action  -->



    <!-- Start Blog3
     
    ============================================= -->
   @include('front.home3.partials.blog3')

    <!-- End Blog3  -->


@endsection