@extends('front.home5.layouts.master')
@section('title', 'Home Page')

@section('content')


    <!-- Start banner Area
    ============================================= -->
   @include('front.home5.partials.banner')
    <!-- End banner -->
             <!-- Start Visa Category3
    ============================================= -->
   @include('front.home5.partials.visa_category5')

    <!-- End Visa Category5 -->

<!-- Start About
    ============================================= -->
   @include('front.home5.partials.about')
    <!-- End About -->

    <!-- Start services
    ============================================= -->
   @include('front.home5.partials.services')
    <!-- End services -->

         <!-- Start why choose us
     
    ============================================= -->
   @include('front.home5.partials.why_choose_us')

    <!-- End why_choose  us  -->
      <!-- Start Testimonial5
    ============================================= -->
   @include('front.home5.partials.testimonial5')

    <!-- End Testimonial5 -->



    <!-- Start fun fact
    ============================================= -->
   @include('front.home5.partials.fun_fact')

    <!-- End fun fact -->

    <!-- Start faq
    ============================================= -->
   @include('front.home5.partials.faq')

    <!-- End faq -->


    <!-- Start Blog5
     
    ============================================= -->
   @include('front.home5.partials.blog5')

    <!-- End Blog5  -->


@endsection