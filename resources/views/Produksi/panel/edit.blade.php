@extends('layout.main')
@section('title')
    Input Panel
@endsection
@section('head')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" --}}
@endsection
@section('main_header')
    Input Panel
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">

            <form method='post' action="{{ route('pro_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button accesskey="1" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Main</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button accesskey="2" class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Tim</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button accesskey="3" class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Detail</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button accesskey="4" class="nav-link" id="pills-actual-tab" data-bs-toggle="pill" data-bs-target="#pills-actual" type="button" role="tab" aria-controls="pills-actual" aria-selected="false">Aktual</button>
                    </li>
                </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Menu1 -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <hr>
                            <!-- <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">No Panel</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control" name="panel_nomor" id="panel_nomor">
                                </div>
                            </div> -->
                            {{-- {{dd($panel);}} --}}
                            @foreach ($panel as $panel)

                            <div class="mb-3 row">
                                <label for="no_cell" class="col-sm-4 col-form-label">Panel Seri</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly required value="{{$panel->panel_seri}}" class="form-control" name="panel_seri" id="panel_seri">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_cell" class="col-sm-4 col-form-label">No Cell</label>
                                <div class="col-sm-8">
                                    <input type="number" max=999 required value="{{$panel->panel_cell}}" class="form-control" name="panel_cell" id="panel_cell">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama_panel" class="col-sm-4 col-form-label">Nama Panel</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control" name="panel_nama" value="{{$panel->panel_nama}}" id="panel_nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control"value="{{$panel->panel_pelanggan}}"  name="panel_pelanggan" id="panel_pelanggan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">Nama Proyek</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control"value="{{$panel->panel_proyek}}"  name="panel_proyek" id="panel_proyek">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_status_pekerjaan" class="col-sm-4 col-form-label">Status Pekerjaan</label>
                                <div class="col-sm-8">
                                    <!-- <input type="text" class="form-control" id="no_panel"> -->
                                    <select required name="panel_status_pekerjaan" id="" class="form-control">
                                    <option selected>{{$panel->panel_status_pekerjaan}}</option>
                                    <option disabled value="">----Pilih Status Pekerjaan----</option>
                                    <option>Progress</option>
                                    <option>Tunda</option>
                                    <option>Selesai</option>
                                    <option>Terkirim</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <!-- Menu 2 -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <hr>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">SPV</label>
                                <div class="col-sm-8">
                                    <select required name="panel_spv" id="panel_spv" class="form-control">
                                        <option selected >{{$panel->panel_spv}}</option>
                                    <option value="" disabled>----Pilih SPV-----</option>
                                    @foreach ( $tim as $tim)
                                    <option value="{{$tim->tim_nama}}">{{$tim->tim_nama}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_wiring" class="col-sm-4 col-form-label">Tim Wiring</label>
                                <div class="col-sm-4">
                                    <select multiple size="5"  name="panel_wiring[]" id="panel_wiring" class="form-control">
                                    <option value="" disabled>----Pilih Wiring-----</option>
                                    @foreach ( $tim1 as $tim)
                                    <option value="{{$tim->tim_nama}}">{{$tim->tim_nama}} - {{$tim->tim_alias}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <textarea disabled style="width:100%;height:100%">{{$panel->panel_wiring}}</textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="panel_mekanik" class="col-sm-4 col-form-label">Tim Mekanik</label>
                            <div class="col-sm-4">
                                <select multiple size="5" name="panel_mekanik[]" id="panel_mekanik" class="form-control">
                                    <option value="" disabled>----Pilih Mekanik-----</option>
                                    @foreach ($tim2 as $tim)
                                    <option value="{{$tim->tim_nama}}">{{$tim->tim_nama}} - {{$tim->tim_alias}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <textarea disabled style="width:100%;height:100%">{{$panel->panel_mekanik}}</textarea>
                            </div>
                        </div>
                    </div>
                        <!-- Menu 3 -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <hr>
                            <div class="mb-3 row">
                                <label for="panel_deadline" class="col-sm-4 col-form-label">Deadline Produksi</label>
                                <div class="col-sm-8">
                                    <input required type="datetime-local" class="form-control" value="{{$panel->panel_deadline}}" name="panel_deadline" id="panel_deadline">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_qcpass" class="col-sm-4 col-form-label">QC Produksi Pass</label>
                                <div class="col-sm-8">
                                    <input required type="datetime-local" class="form-control" value="{{$panel->panel_qcpass}}"name="panel_qcpass" id="panel_qcpass">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">Status Komponen</label>
                                <div class="col-sm-8">
                                    <select required name="panel_status_komponen" id="panel_status_komponen" class="form-control">
                                    <option selected>{{$panel->panel_status_komponen}} </option>
                                    <option disabled value="">----Pilih Status Komponen----</option>
                                    <option>Kurang</option>
                                    <option>Lengkap</option>
                                </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="panel_FW" class="col-sm-4 col-form-label">Jenis Panel (F/W)</label>
                                <div class="col-sm-8">
                                    <select required name="panel_FW" id="panel_FW" class="form-control">
                                    <option selected>{{$panel->panel_FW}}</option>
                                    <option disabled value="">----Pilih Panel----</option>
                                    <option value="F">F</option>
                                    <option value="W">W</option>
                                </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_LM" class="col-sm-4 col-form-label">Jenis Tegangan (L/M)</label>
                                <div class="col-sm-8">
                                    <!-- <input type="text" class="form-control" id="no_panel"> -->
                                    <select required name="panel_LM" id="panel_LM" class="form-control">
                                    <option selected>{{$panel->panel_LM}}</option>
                                    <option  disabled value="">----Pilih Panel----</option>
                                    <option value="L">L</option>
                                    <option value="M">M</option>
                                </select>
                                </div>
                            </div>


                            <!-- End Menu 3 -->

                        </div>
                         <!-- Menu 4 -->
                         <div class="tab-pane fade" id="pills-actual" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <hr>
                            <div class="mb-3 row">
                                <label for="panel_aktual_produksi" class="col-sm-4 col-form-label">Aktual Produksi</label>
                                <div class="col-sm-8">
                                    <input type="datetime-local" value="{{$panel->panel_aktual_produksi}}" class="form-control" name="panel_aktual_produksi" id="panel_aktual_produksi">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_aktual_qc" class="col-sm-4 col-form-label">Aktual QC Pass</label>
                                <div class="col-sm-8">
                                    <input type="datetime-local" class="form-control" name="panel_aktual_qc" id="panel_aktual_qc" value="{{$panel->panel_aktual_qc}}" >
                                </div>
                            </div>
                        </div>
                        <!-- End Menu 4 -->
                        <!-- End Form -->
                    </div>
                    @endforeach

            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary shadow btn-block" type="submit">Submit</button>
                <button class="btn btn-sm btn-danger shadow btn-block mt-2" type="reset">Reset</button>
            </div>
        </form>
        </div>
        <!-- End Card -->


    @endsection
    @section('javascript')
        <script>

        </script>
    @endsection
