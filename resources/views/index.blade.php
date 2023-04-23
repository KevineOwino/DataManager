@extends("master")

<!-- Preloader Start -->
{{--<div class="se-pre-con"></div>--}}
<!-- Preloader Ends -->

@section("auth")

    @include("components.shared.top_header")
    @include("components.shared.sidebar_nav")

    {{--============================================= -->--}}
        @yield("content")
    {{--============================================= -->--}}

@endsection
