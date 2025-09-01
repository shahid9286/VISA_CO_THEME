@extends('front.home4.layouts.master')
@section('title', 'Home Page')

@section('content')


    <!-- Start banner Area
    ============================================= -->
   @include('front.home4.partials.banner')
    <!-- End banner -->
<!-- Start About
    ============================================= -->
   @include('front.home4.partials.about')
    <!-- End About -->
         <!-- Start Visa Category3
    ============================================= -->
   @include('front.home4.partials.visa_category4')

    <!-- End Visa Category3 -->
         <!-- Start Visa training
    ============================================= -->
   @include('front.home4.partials.training')

    <!-- End Visa training -->

    <!-- Start process
    ============================================= -->
   @include('front.home4.partials.process')
    <!-- End process -->

        <!-- Start visa country
    ============================================= -->
   @include('front.home4.partials.visa_country')

    <!-- End visa country -->



    <!-- Start appointment
    ============================================= -->
   @include('front.home3.partials.appointment')

    <!-- End appointment -->

 <!-- Start Team
    ============================================= -->
@include('front.home4.partials.team')

    <!-- End Team -->
         <!-- Start why choose us
     
    ============================================= -->
   @include('front.home4.partials.why_choose_us')

    <!-- End why_choose  us  -->
      <!-- Start Testimonial4
    ============================================= -->
   @include('front.home4.partials.testimonial4')

    <!-- End Testimonial4 -->

    <!-- Start Blog4
     
    ============================================= -->
   @include('front.home4.partials.blog4')

    <!-- End Blog4  -->


@endsection