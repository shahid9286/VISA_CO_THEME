@extends('front.about.layouts.master')
@section('title', 'About Page')

@section('content')


    <!-- Start Breadcrumb 
    ============================================= -->
   @include('front.about.partials.breadcrumb')

    <!-- End Breadcrumb -->

    <!-- Start About 
    ============================================= -->
   @include('front.about.partials.about')

    <!-- End About -->


    <!-- Start Visa Category2
    ============================================= -->
   @include('front.home2.partials.visa_category2')

    <!-- End Visa Category2 -->

    <!-- Start Process 
    ============================================= -->
   @include('front.about.partials.process')

    <!-- End Process -->


    <!-- Start Training 
    ============================================= -->

    @include('front.about.partials.training')

    <!-- End Training -->



    <!-- Start Why Choose Us 
    ============================================= -->
   @include('front.home1.partials.why_choose_us')

    <!-- End Why Choose Us  -->

    <!-- Start Fun fact 
    ============================================= -->
   @include('front.about.partials.fun_fact')

    <!-- End Fun Fact -->

    <!-- Start Testimonial 
    ============================================= -->
   @include('front.about.partials.testimonials')

    <!-- End Testimonial -->

@endsection