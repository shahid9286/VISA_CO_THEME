@extends('front.home2.layouts.master')
@section('title', 'Home Page')

@section('content')


    <!-- Start banner Area
    ============================================= -->
   @include('front.home2.partials.banner')
    <!-- End banner -->

<!-- Start About
    ============================================= -->
   @include('front.home2.partials.about2')

    <!-- End About -->
     <!-- Start Visa Category2
    ============================================= -->
   @include('front.home2.partials.visa_category2')

    <!-- End Visa Category2 -->

     <!-- Start Visa Country2
    ============================================= -->
   @include('front.home2.partials.visa_country2')

    <!-- End Visa Country2  -->

     <!-- Start Why Choose Us2
    ============================================= -->
   @include('front.home2.partials.why_choose_us2')

    <!-- End Why Choose Us2  -->

      <!-- Start fun fact2
    ============================================= -->
   @include('front.home2.partials.fun_fact2')

    <!-- End fun fact2  -->

 <!-- Start Team
    ============================================= -->
@include('front.home2.partials.team')

    <!-- End Team -->
      <!-- Start Testimonial2
    ============================================= -->
   @include('front.home2.partials.testimonial2')

    <!-- End Testimonial2 -->
     
    <!-- Start Blog2
     
    ============================================= -->
   @include('front.home2.partials.blog2')

    <!-- End Blog2  -->


@endsection