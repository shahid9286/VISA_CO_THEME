@extends('front.layouts.master')
@section('title', 'Home Page')

@section('content')

    <!-- Start Banner Area
    ============================================= -->
   @include('front.partials.hero-section')
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
   @include('front.partials.about1')

    <!-- End About -->

    <!-- Start Visa Category
    ============================================= -->
   @include('front.partials.visa_category')

    <!-- End Visa Category -->

    <!-- Start Why Choose Us
    ============================================= -->
   @include('front.partials.why_choose_us')

    <!-- End Why Choose Us  -->

    <!-- Start Visa Country
    ============================================= -->
   @include('front.partials.visa_country')

    <!-- End Visa Country  -->

    <!-- Start Faq
    ============================================= -->
   @include('front.partials.FAQ')

    <!-- End Faq  -->

    <!-- Start Course
    ============================================= -->
   @include('front.partials.courses')

    <!-- End Course  -->

    <!-- Start Testimonial
    ============================================= -->
   @include('front.partials.testimonial')

    <!-- End Testimonial -->

    <!-- Start Call to action
    ============================================= -->
   @include('front.partials.cta')

    <!-- End Call to action  -->

    <!-- Start Blog
    ============================================= -->
   @include('front.partials.blog')

    <!-- End Blog  -->

    
@endsection