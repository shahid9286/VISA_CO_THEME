@extends('front.home1.layouts.master')
@section('title', 'Home Page')

@section('content')

    <!-- Start Banner Area
    ============================================= -->
   @include('front.home1.partials.hero-section')
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
   @include('front.home1.partials.about1')

    <!-- End About -->

    <!-- Start Visa Category
    ============================================= -->
   @include('front.home1.partials.visa_category')

    <!-- End Visa Category -->

    <!-- Start Why Choose Us
    ============================================= -->
   @include('front.home1.partials.why_choose_us')

    <!-- End Why Choose Us  -->

    <!-- Start Visa Country
    ============================================= -->
   @include('front.home1.partials.visa_country')

    <!-- End Visa Country  -->

    <!-- Start Faq
    ============================================= -->
   @include('front.home1.partials.FAQ')

    <!-- End Faq  -->

    <!-- Start Course
    ============================================= -->
   @include('front.home1.partials.courses')

    <!-- End Course  -->

    <!-- Start Testimonial
    ============================================= -->
   @include('front.home1.partials.testimonial')

    <!-- End Testimonial -->

    <!-- Start Call to action
    ============================================= -->
   @include('front.home1.partials.cta')

    <!-- End Call to action  -->

    <!-- Start Blog
    ============================================= -->
   @include('front.home1.partials.blog')

    <!-- End Blog  -->

    
@endsection