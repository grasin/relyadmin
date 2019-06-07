<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Relynext')">
    <meta name="author" content="@yield('meta_author', 'Nisarg Bavishi')">
    @yield('meta')
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="//fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('bower_components/select2/dist/css/select2.min.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('bower_components/dropzone/dist/dropzone.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('bower_components/slick-carousel/slick/slick.css')}}" rel='stylesheet'>
    <link href="{{URL::asset('css/main.css?version=4.4.1')}}" rel='stylesheet'>
    @yield('style')
    
</head>


<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        @include('includes.partials.messages')
        @include('frontend.includes.search')
        <div class="layout-w">
        @include('frontend.includes.menu')
            <div class="content-w">
            @include('frontend.includes.newnav')
                @yield('content')
            </div>
        </div>
        @include('includes.partials.ga')
    </div>
    <script src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/moment/moment.js')}}"></script>
    <script src="{{URL::asset('bower_components/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/dropzone/dist/dropzone.js')}}"></script>
    <script src="{{URL::asset('bower_components/editable-table/mindmup-editabletable.js')}}"></script>
    <script src="{{URL::asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/util.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/alert.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/button.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/carousel.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/collapse.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/modal.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/tab.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
    <script src="{{URL::asset('bower_components/bootstrap/js/dist/popover.js')}}"></script>
    <script src="{{URL::asset('js/demo_customizer.js?version=4.4.1')}}"></script>
    <script src="{{URL::asset('js/main.js?version=4.4.1')}}"></script>    
    @yield('script')
    
    
</body>

</html>
