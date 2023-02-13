@extends('layout.main')
@section('head')
    <style>

        .card-primary{
            background-color: blue !important;
        }
        .card-info{
            background-color: #48abf7!important;
        }
        .card-success{
            background-color: #31ce36!important;
        }
        .card-secondary{
            background-color: #6861ce!important;
        }
    </style>

@endsection
@section('title')
Dashboard EDP
@endsection
@section('main_header')
    Selamat Datang
@endsection
@section('content')

                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-primary card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Perbaikan Hardware</p>
                                            <h4 class="card-title">{{$hard_fix_done}} of {{$hard_fix_total}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-info card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-interface-6"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Permintaan Software</p>
                                            <h4 class="card-title">{{$soft_req_done}} of {{$soft_req_total}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-success card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-analytics"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Pengadaan Hardware</p>
                                            <h4 class="card-title">{{$hard_req_done}} of {{$hard_req_total}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-secondary card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Pengajuan Untuk Tinta</p>
                                            <h4 class="card-title">{{$ink_report}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <div class="card card-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-5 col-md-4">
                    <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons"
                        id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-hardware-tab-icons" data-toggle="pill"
                            href="#v-pills-hardware-icons" role="tab" aria-controls="v-pills-hardware-icons"
                            aria-selected="true">
                            <i class="flaticon-settings"></i>
                            Hardware
                        </a>
                        <a class="nav-link" id="v-pills-software-tab-icons" data-toggle="pill"
                            href="#v-pills-software-icons" role="tab" aria-controls="v-pills-software-icons"
                            aria-selected="false">
                            <i class="flaticon-chain"></i>
                            Software
                        </a>
                        <a class="nav-link" id="v-pills-tinta-tab-icons" data-toggle="pill"
                            href="#v-pills-tinta-icons" role="tab" aria-controls="v-pills-tinta-icons"
                            aria-selected="false">
                            <i class="flaticon-pen"></i>
                            Tinta
                        </a>
                        <a class="nav-link" id="v-pills-inventory-tab-icons" data-toggle="pill"
                            href="#v-pills-inventory-icons" role="tab" aria-controls="v-pills-inventory-icons"
                            aria-selected="false">
                            <i class="flaticon-desk"></i>
                            Inventaris
                        </a>
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="tab-content" id="v-pills-with-icon-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-hardware-icons" role="tabpanel"
                            aria-labelledby="v-pills-hardware-tab-icons">
                            <div class="row  d-flex justify-content-around">
                                <div class="card text-center col-md-5 mx-1 card-shadow">
                                    <div class="card-header">Pengadaan Hardware</div>
                                    <div class="card-body">
                                        <p class="card-text">Form untuk mengajukan permintaan hardware contoh :
                                            Mouse, Printer, Ram, Pc, dll.</p>
                                        <a href="{{ route('hard_req_create') }}" class="btn btn-primary">Disini</a>
                                    </div>
                                </div>
                                <div class="card text-center col-md-5 mx-1 card-shadow">
                                    <div class="card-header">Perbaikan Hardware</div>
                                    <div class="card-body">
                                        <p class="card-text">Form untuk mengajukan perbaikan terhadap
                                            software/hardware yang bermasalah.</p>
                                        <a href="{{ route('hard_fix_create') }}" class="btn btn-primary">Disini</a>
                                    </div>
                                </div>
                                {{-- <div class="card text-center col-md-5 mx-1 card-shadow">
                                    <div class="card-header">List Perbaikan Hardware</div>
                                    <div class="card-body">
                                        <p class="card-text">Form untuk list perbaikan terhadap
                                            software/hardware yang bermasalah.</p>
                                        <a href="{{ route('hard_fix_index') }}" class="btn btn-primary">Disini</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-software-icons" role="tabpanel"
                            aria-labelledby="v-pills-software-tab-icons">

                            <div class="card text-center card-shadow  d-flex justify-content-around">
                                <div class="card-header">Permintaan Software</div>
                                <div class="card-body">
                                    <p class="card-text">Form untuk mengajukan permintaan Email, Fina, Server,
                                        dll.</p>
                                    <a href="{{ route('soft_req_create') }}" class="btn btn-primary">Disini</a>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="v-pills-tinta-icons" role="tabpanel"
                            aria-labelledby="v-pills-tinta-tab-icons">
                            <div class="card text-center card-shadow  d-flex justify-content-around">
                                <div class="card-header">Permintaan Tinta</div>
                                <div class="card-body">
                                    <p class="card-text">Form untuk mengajukan permintaan Tinta.</p>
                                    <a href="{{ route('ink_index') }}" class="btn btn-primary">Disini</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-inventory-icons" role="tabpanel"
                            aria-labelledby="v-pills-inventory-tab-icons">
                            <div class="row d-flex justify-content-around">
                                <div class="card text-center col-md-5 mx-1 card-shadow">
                                    <div class="card-header">PC</div>
                                    <div class="card-body">
                                        <p class="card-text">List PC</p>
                                        <a href="{{ route('pc_index') }}" class="btn btn-primary">Disini</a>
                                    </div>
                                </div>
                                <div class="card text-center col-md-5 mx-1 card-shadow">
                                    <div class="card-header">Laptop</div>
                                    <div class="card-body">
                                        <p class="card-text">List Laptop</p>
                                        <a href="{{ route('laptop_index') }}" class="btn btn-primary">Disini</a>
                                    </div>
                                </div>
                                <div class="card text-center col-md-5 mx-1 card-shadow">
                                    <div class="card-header ">Printer/Scanner</div>
                                    <div class="card-body">
                                        <p class="card-text">List Printer/Scanner</p>
                                        <a href="{{ route('printer_index') }}" class="btn btn-primary">Disini</a>
                                    </div>
                                </div>
                                {{-- <div class="card text-center col-md-5 mx-1 card-shadow">
                                    <div class="card-header ">Monitor</div>
                                    <div class="card-body">
                                        <p class="card-text">List Monitor</p>
                                        <a href="#" class="btn btn-primary">Disini</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
