@extends('layout.main')
@section('title')
    Pengecekan Tahunan
@endsection
@section('head')
<style>
    .form-check-input{
        position: initial;
    }
    </style>
@endsection
@section('main_header')
Pengecekan Tahunan
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            {{-- <p>
                <button class="btn btn-primary" data-toggle="collapse" href="#hardware" role="button" aria-expanded="false" aria-controls="hardware">
                    Perangkat Keras
                </button>
                <button class="btn btn-primary" data-toggle="collapse" href="#Pembersihan" role="button" aria-expanded="false" aria-controls="Pembersihan">
                    Pembersihan Perangkat
              </button>
              <button class="btn btn-primary" data-toggle="collapse" href="#Lunak" role="button" aria-expanded="false" aria-controls="Lunak">
                Perangkat Lunak
          </button>
            </p> --}}
                {{-- <div class="collapse" id="hardware">
                    <div class="card card-body">
                            Pengecekan Perangkat Keras
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Layar Monitor</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Monitor" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Monitor" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Fungsi Keyboard Mouse</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="aksesoris" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="aksesoris" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Kondisi Mainboard</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Harddisk/SSD</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Fan Prosessor & PSU</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Memory RAM</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Jaringan & Internet</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Perankat yang rusak yang butuh perbaikan/pergantian</label>
                                <textarea class="form-control"name="" id="" cols="30" rows="10"></textarea>
                            </div>
                    </div>
                </div> --}}
              {{-- Pembesihan  --}}
                {{-- <div class="collapse" id="Pembersihan">
                    <div class="card card-body">
                                <div class="form-group">
                                    <label class="form-label">Bersihkan CPU & Monitor</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="mm" value="50" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="mm" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">BAD</span>
                                        </label>
                                    </div>
                                </div>
                    </div>
                </div> --}}
            {{-- Software --}}
                {{-- <div class="collapse" id="Lunak">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Optimasi OS</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="startup" value="50" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="startup" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">BAD</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Antivirus Scan & Update</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="Cleanup" value="50" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="Cleanup" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">BAD</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Optimasi Software & Data</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="Defragment" value="50" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="Defragment" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">BAD</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Backup Database Email</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="Recycle" value="50" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="Recycle" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">BAD</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>  {{-- Batas Card body  --}}
    </div>  {{-- Batas Card  --}}

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nav Pills (Horizontal Tabs)</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                <li class="nav-item submenu">
                    <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item submenu">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item submenu">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    Pengecekan Perangkat Keras
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Layar Monitor</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Monitor" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Monitor" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Fungsi Keyboard Mouse</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="aksesoris" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="aksesoris" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Kondisi Mainboard</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Harddisk/SSD</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Fan Prosessor & PSU</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="case" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Memory RAM</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Cek Jaringan & Internet</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="kipas" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Perankat yang rusak yang butuh perbaikan/pergantian</label>
                                <textarea class="form-control"name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            {{-- Batas Hardware --}}
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="form-group">
                        <label class="form-label">Bersihkan CPU & Monitor</label>
                        <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                                <input type="radio" name="mm" value="50" class="selectgroup-input" checked="">
                                <span class="selectgroup-button">OK</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="mm" value="100" class="selectgroup-input">
                                <span class="selectgroup-button">BAD</span>
                            </label>
                        </div>
                    </div>
                </div>{{-- Batas Bersih --}}
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Optimasi OS</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="startup" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="startup" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Antivirus Scan & Update</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Cleanup" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Cleanup" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Optimasi Software & Data</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Defragment" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Defragment" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label">Backup Database Email</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Recycle" value="50" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">OK</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="Recycle" value="100" class="selectgroup-input">
                                                <span class="selectgroup-button">BAD</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div> {{-- Batas Software --}}
            </div>
        </div>
    </div>
@endsection
