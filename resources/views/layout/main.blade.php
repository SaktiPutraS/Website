<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Fonts and icons -->
    <script src="{{ asset('plugins/atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/atlantis/css/fonts.min.css') }}">


    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('plugins/atlantis/css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@5.0.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

    {{-- Plugins --}}
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.1.0/dist/sweetalert2.min.css"> --}}


    <link rel="stylesheet" href="{{asset('css/loading-1.css')}}">
    <style>
         .form-button{
            padding: 5px !important;
            margin: 0px !important;
        }
        .text-red{
            color: red;
            font-size:12px;
            vertical-align: super;
        }
    </style>
    @yield('head')

</head>

{{-- <body onload="myFunction()" class="all"> --}}
<body>
@include('layout.loading')
<div id="showDIV">
    @if (session('status'))
        <div style="display: none">
            <input type="text" value="{{ session('status') }}" id="showAlert">
        </div>
     @endif
    <div class="wrapper">

        <!-- End Sidebar -->
@include('layout.navbar')

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h1 class="text-white pb-2 fw-bold">@yield('main_header')</h1>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                @yield('header')

                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    @if (session('alert'))
                    <div class="alert alert-danger" role="alert">
                        {{session('alert')}}
                      </div>
                    @endif
                    @include('layout.breadcrumb')
                    @yield('content')
                    {{-- <div class="card card-shadow">
                        <div class="card-header"></div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>

</div>
    <!--   Core JS Files   -->
    <script src="{{ asset('plugins/atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}

    <script src="{{ asset('plugins/atlantis/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/atlantis/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('plugins/atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}">
    </script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('plugins/atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.scrollbar@1.2.1/jquery.scrollbar.css"> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery.scrollbar@1.2.1/jquery.scrollbar.min.js"></script> --}}


    <!-- Datatables -->
    <script src="{{ asset('plugins/atlantis/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    {{-- <script src="{{ asset('plugins/atlantis/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script> --}}

    <!-- jQuery Vector Maps -->
    {{-- <script src="{{ asset('plugins/atlantis/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script> --}}

    <!-- Sweet Alert -->
    <script src="{{ asset('plugins/atlantis/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.1.0/dist/sweetalert2.min.js"></script> --}}

    <!-- Select 2 -->
    <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@5.0.0/dist/js/select2.min.js"></script> --}}

    <!-- Atlantis JS -->
    <script src="{{ asset('plugins/atlantis/js/atlantis.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var data = $("#showAlert").val();
            if (!!data) {
                displayMsg(data);
            }

            function displayMsg(message) {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 9000,
                    timerProgressBar: true
                });

                Toast.fire({
                    icon: 'success',
                    title: message
                });
            }
        });
    </script>
       <script>

        $(document).ready(function() {
            // Show loading screen
            $('.loading').show();

            // Hide loading screen after 3 seconds
            setTimeout(function() {
                $('.loading').hide();
            }, 2000);
        });
        </script>
        <script>
            // document.querySelectorAll('button[type="submit"]').forEach(button => {
            // button.addEventListener('click', event => {
            //     event.target.setAttribute('disabled', true);
            // });
            // });

        </script>
    @yield('javascript')
</body>

</html>
