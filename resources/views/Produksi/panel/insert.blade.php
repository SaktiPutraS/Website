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
<style>
    button#floating {
    position: fixed;
    right: 35px;
    bottom: 10px;
    border-radius: 50%;
    width: 75px;
    height: 75px;
    animation: bounce 0.8s;
  animation-direction: alternate;
  animation-iteration-count: infinite;
}

@keyframes bounce {
  0% { transform: translateY(0); }
  100% { transform: translateY(-30px); }
}
</style>
@endsection
@section('main_header')
    Input Panel
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">

            <form method='post' action="{{ route('pro_insert') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button accesskey="1" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Main</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button accesskey="2" class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Tim</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button accesskey="3" class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Detail</button>
                    </li>
                </ul> --}}
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Menu1 -->
                        <div id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h3>
                                General
                            </h3>
                            <hr>
                            <div class="mb-3 row">
                                <label for="no_cell" class="col-sm-4 col-form-label">No Cell</label>
                                <div class="col-sm-8">
                                    <input type="number" max=999 required class="form-control" name="panel_cell" id="panel_cell">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama_panel" class="col-sm-4 col-form-label">Nama Panel</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control" name="panel_nama" id="panel_nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control" name="panel_pelanggan" id="panel_pelanggan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">Nama Proyek</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control" name="panel_proyek" id="panel_proyek">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_status_pekerjaan" class="col-sm-4 col-form-label">Status Pekerjaan</label>
                                <div class="col-sm-8">
                                    <!-- <input type="text" class="form-control" id="no_panel"> -->
                                    <select required name="panel_status_pekerjaan" id="" class="form-control">
                                    <option disabled value="">----Pilih Status Pekerjaan----</option>
                                    <option selected>Progress</option>
                                    <option>Tunda</option>
                                    <option>Selesai</option>
                                </select>
                                </div>
                            </div>
                            <hr>
                            <button class="btn-block btn btn-round btn-border btn-primary" id="next-tim" type="button">Next</button>
                        </div>
                        <!-- Menu 2 -->
                        <div style="display: none" id="pills-tim" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <h3>
                                Tim
                            </h3>
                            <hr>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">SPV</label>
                                <div class="col-sm-8">
                                    <select required name="panel_spv" id="panel_spv" class="form-control" style="width: 100%">
                                        <option value="" selected disabled>----Pilih SPV-----</option>
                                        @foreach ( $tim as $tim)
                                        <option value="{{$tim->id}}">{{$tim->tim_nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_wiring" class="col-sm-4 col-form-label">Tim Wiring</label>
                                <div class="col-sm-8">
                                    <select multiple size="5" required name="panel_wiring[]" id="panel_wiring" class="form-control">
                                        <option value="" selected disabled>----Pilih Wiring-----</option>

                                        @foreach ( $tim1 as $tim)
                                            <option value="{{$tim->tim_nama}}">{{$tim->tim_nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_mekanik" class="col-sm-4 col-form-label">Tim Mekanik</label>
                                <div class="col-sm-8">
                                    <select multiple size="5" required name="panel_mekanik[]" id="panel_mekanik" class="form-control">
                                        <option value="" selected disabled>----Pilih Mekanik-----</option>
                                        @foreach ( $tim2 as $tim)
                                        <option value="{{$tim->tim_nama}}">{{$tim->tim_nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn-block btn btn-round btn-warning btn-border " id="back-home" type="button">Back</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn-block btn btn-round btn-primary btn-border " id="next-detail" type="button">Next</button>
                                </div>
                            </div>
                        </div>
                        <!-- Menu 3 -->
                        <div style="display:none" id="pills-detail" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <h3>
                                Type and Date
                            </h3>
                            <hr>
                            <div class="mb-3 row">
                                <label for="panel_deadline" class="col-sm-4 col-form-label">Deadline Produksi</label>
                                <div class="col-sm-8">
                                    <input required type="datetime-local" class="form-control" name="panel_deadline" id="panel_deadline">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_qcpass" class="col-sm-4 col-form-label">QC Produksi Pass</label>
                                <div class="col-sm-8">
                                    <input required type="datetime-local" class="form-control" name="panel_qcpass" id="panel_qcpass">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_panel" class="col-sm-4 col-form-label">Status Komponen</label>
                                <div class="col-sm-8">
                                    <!-- <input type="text" class="form-control" id="no_panel"> -->
                                    <select required name="panel_status_komponen" id="panel_status_komponen" class="form-control">
                                    <option selected disabled value="">----Pilih Status Komponen----</option>
                                    <option>Kurang</option>
                                    <option>Lengkap</option>
                                    <!-- <option>Batal</option> -->
                                    <!-- <option>Selesai</option> -->
                                </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="panel_FW" class="col-sm-4 col-form-label">Jenis Panel (F/W)</label>
                                <div class="selectgroup w-100 col-sm-8">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="panel_FW" value="F" class="selectgroup-input">
                                        <span class="selectgroup-button">F</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="panel_FW" value="W" class="selectgroup-input">
                                        <span class="selectgroup-button">W</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="panel_LM" class="col-sm-4 col-form-label">Jenis Tegangan (L/M)</label>
                                <div class="selectgroup w-100 col-sm-8">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="panel_LM" value="L" class="selectgroup-input">
                                        <span class="selectgroup-button">L</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="panel_LM" value="M" class="selectgroup-input">
                                        <span class="selectgroup-button">M</span>
                                    </label>
                                </div>
                                {{-- <div class="col-sm-8">
                                    <!-- <input type="text" class="form-control" id="no_panel"> -->
                                    <select required name="panel_LM" id="panel_LM" class="form-control">
                                    <option selected disabled value="">----Pilih Panel----</option>
                                    <option value="L">L</option>
                                    <option value="M">M</option>
                                </select>
                                </div> --}}
                            </div>
                            <div class="mb-3 row">
                                    <label class="form-label col-sm-4 ">Tipe Panel</label>
                                    <div class="selectgroup w-100 col-sm-8">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="Outdoor" class="selectgroup-input">
                                            <span class="selectgroup-button">Outdoor</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="Indoor" class="selectgroup-input">
                                            <span class="selectgroup-button">Indoor</span>
                                        </label>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <button class="btn-block btn btn-round btn-warning btn-border " id="back-tim" type="button">Back</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary btn-round shadow btn-block" type="submit">Submit</button>
                                </div>
                            </div>
                            <!-- End Menu 3 -->
                            <!-- End Form -->
                        </div>
                    </div>

            </div>
            <div class="card-footer">

                <button class="btn btn-sm btn-danger shadow" id="floating" type="reset">Reset</button>
            </div>
        </form>
        </div>
        <!-- End Card -->


    @endsection
    @section('javascript')
        <script>
              $(document).ready(function() {
                $("#panel_spv").select2();
            });
            $('#next-tim').on('click', function(e){
                $("#pills-home").css({display:"none"});
                $("#pills-tim").css({display:"block"});
                $("#pills-detail").css({display:"none"});
            });
            $('#back-home').on('click', function(e){
                $("#pills-home").css({display:"block"});
                $("#pills-tim").css({display:"none"});
                $("#pills-detail").css({display:"none"});
            });
            $('#next-detail').on('click', function(e){
                $("#pills-home").css({display:"none"});
                $("#pills-tim").css({display:"none"});
                $("#pills-detail").css({display:"block"});
            });
            $('#back-tim').on('click', function(e){
                $("#pills-home").css({display:"none"});
                $("#pills-tim").css({display:"block"});
                $("#pills-detail").css({display:"none"});
            });
        </script>
        <script type="text/javascript">
            // function EnableDisable(txtPassportNumber) {
            //     //Reference the Button.
            //     var btnSubmit1 = document.getElementById("btnNext1");
            //     var btnSubmit2 = document.getElementById("btnNext2");

            //     //Verify the TextBox value.
            //     if (txtPassportNumber.value.trim() != "") {
            //         //Enable the TextBox when TextBox has value.
            //         btnSubmit.disabled = false;
            //     } else {
            //         //Disable the TextBox when TextBox is empty.
            //         btnSubmit.disabled = true;
            //     }
            // };
        </script>
    @endsection
