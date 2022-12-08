@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Search start -->
@include('includes.search')
<!-- Search End --> 
<!-- Top Employers start -->

<!-- Top Employers ends --> 
<!-- Popular Searches start -->

<!-- Popular Searches ends --> 
<!-- Featured Jobs start -->

<!-- Featured Jobs ends -->
<!-- Login box start -->
@include('includes.login_text')
<!-- Login box ends --> 
<!-- How it Works start -->
@include('includes.how_it_works')
<!-- How it Works Ends -->
<!-- Latest Jobs start -->
@include('includes.latest_jobs')
<!-- Latest Jobs ends --> 
<!-- Testimonials start -->

<!-- Testimonials End -->
<!-- Top Cities start -->

<!-- Top Cities End -->
<!-- Video start -->

<!-- Video end --> 
<!-- Login box start -->

<!-- Login box ends --> 
<!-- Testimonials start -->

<!-- Testimonials End -->
<!-- Subscribe start -->
@include('includes.subscribe')
<!-- Subscribe End -->
@include('includes.footer')
@endsection
@push('scripts') 
<script>
    $(document).ready(function ($) {
        $("form").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);
    });
</script>

@endpush
