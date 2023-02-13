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

    <div class="card shadow">
        {{-- <div class="card-header"> --}}
            {{-- <h4 class="card-title">Nav Pills (Horizontal Tabs)</h4> --}}
        {{-- </div> --}}
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                <li class="nav-item submenu">
                    <a class="nav-link active show" id="pills-hardware-tab" data-toggle="pill" href="#pills-hardware" role="tab" aria-controls="pills-hardware" aria-selected="true">Perangkat</a>
                </li>
                <li class="nav-item submenu">
                    <a class="nav-link" id="pills-printer-tab" data-toggle="pill" href="#pills-printer" role="tab" aria-controls="pills-printer" aria-selected="false">Printer</a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                {{-- Menu Hardware --}}
                <div class="tab-pane fade active show" id="pills-hardware" role="tabpanel" aria-labelledby="pills-hardware-tab">
                        <form action="{{route('maintenance_store')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if ($errors->any())
                                <p class="alert alert-danger">{{ $errors->first() }}</p>
                            @endif
                        <input type="hidden" name="type" value="hardware">
                        {{-- Tanggal & PIC --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="tgl_maintenance">Tangal Periksa</label>
                                <input type="date" name="tgl_maintenance" id="" value="<?php echo date('Y-m-d')?>"class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_pic">PIC</label>
                                    <select name="id_pic" id="pic1" style="width:100%">
                                        <option value="" selected disable>Pilih PIC</option>
                                        @foreach ($pic1 as $pic1)
                                        <option value="{{$pic1->id}}">{{$pic1->k_nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- User dan Lokasi --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_user">User</label>
                                    <select name="id_user" id="list_karyawan" style="width:100%">
                                        <option value="" selected disable>Nama User</option>
                                        @foreach ($karyawan as $karyawan)
                                            <option value="{{$karyawan->id}}">{{$karyawan->k_nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_lokasi">Lokasi</label>
                                    <select name="id_lokasi" id="list_lokasi" style="width:100%">
                                        <option value="" selected disable>Pilih Lokasi</option>
                                        @foreach ($lokasi as $lokasi)
                                            <option value="{{$lokasi->id}}">{{$lokasi->loc_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        {{-- No CPU & Monitor --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_pc">CPU</label>
                                    <select name="id_pc" id="list_pc" style="width:100%">
                                        <option value="" selected disable>Pilih PC</option>
                                        @foreach ($pc as $pc)
                                            <option value="{{$pc->id}}">{{$pc->pc_number}} - {{$pc->pc_user}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_monitor">Monitor</label>
                                    <select name="id_monitor" id="list_monitor" style="width:100%">
                                        <option value="" selected disable>Pilih Monitor</option>
                                        @foreach ($mon as $mon)
                                            <option value="{{$mon->id}}">{{$mon->monitor_number}} - {{$mon->monitor_user}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Batas Informasi umum --}}
                        <hr style="border:2px solid;border-radius:20px;    filter: drop-shadow(2px 4px 6px black);" class="my-5">
                        {{-- MOnitor, CPU, Keyboard --}}
                        <div class="row my-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Layar Monitor</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_monitor" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_monitor" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Bersihkan CPU & Monitor</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="clean_cpu_monitor" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="clean_cpu_monitor" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Fungsi Keyboard Mouse</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_acc" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_acc" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Mainboard, hdd, Processor --}}
                        <div class="row  my-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Kondisi Mainboard</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_mainboard" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_mainboard" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Harddisk/SSD</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_hdd" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_hdd" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Fan Prosessor & PSU</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_prosessor" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_prosessor" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Ram, Internet, OS --}}
                        <div class="row my-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Memory RAM</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_ram" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_ram" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Jaringan & Internet</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_jaringan" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_jaringan" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Optimasi OS</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="op_os" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="op_os" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Antivisus, Software, Email --}}
                        <div class="row my-2">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Antivirus Scan & Update</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_antivirus" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_antivirus" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Optimasi Software & Data</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="os_software" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="os_software" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Backup Database Email</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="backup_email" value="OK" class="selectgroup-input">
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="backup_email" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Perankat yang rusak yang butuh perbaikan/pergantian</label>
                            <textarea class="form-control"name="note" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-block btn-primary" type="submit">Submit</button>
                    </div>
                </form>
                {{-- Menu Printer --}}
                <div class="tab-pane fade" id="pills-printer" role="tabpanel" aria-labelledby="pills-printer-tab">
                        <form method='post' action="{{route('maintenance_store')}}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @if ($errors->any())
                                <p class="alert alert-danger">{{ $errors->first() }}</p>
                            @endif
                        {{-- Tgl & PIC --}}
                        <input type="hidden" name="type" value="printer">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="tgl_maintenance">Tanggal Periksa</label>
                                <input type="date" name="tgl_maintenance" id="" value="<?php echo date('Y-m-d')?>"class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_pic">PIC</label>
                                    <select name="id_pic" id="pic2" style="width:100%">
                                        <option value="" selected disable>Pilih PIC</option>
                                        @foreach ($pic2 as $pic2)
                                        <option value="{{$pic2->id}}">{{$pic2->k_nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Lokasi & No Printer --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_lokasi">Lokasi</label>
                                    <select name="id_lokasi" id="list_lokasi_p" style="width:100%">
                                        <option value="" selected disable>Pilih Lokasi</option>
                                        @foreach ($lokasiprinter as $loc)
                                        <option value="{{$loc->id}}">{{$loc->loc_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="id_printer">Printer</label>
                                    <select name="id_printer" id="list_printer" style="width:100%">
                                        <option value="" selected disable>Pilih Printer</option>
                                        @foreach ($printer as $printer)
                                            <option value="{{$printer->id}}">{{$printer->printer_number}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                                <hr style="border:2px solid;border-radius:20px;    filter: drop-shadow(2px 4px 6px black);"class="my-5">
                        {{-- Batas Informasi umum --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Print Head</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_printhead" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_printhead" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Cek Tinta</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_tinta" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="check_tinta" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Kebersihan Printer</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="clean_printer" value="OK" class="selectgroup-input" >
                                            <span class="selectgroup-button">OK</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="clean_printer" value="NOT" class="selectgroup-input">
                                            <span class="selectgroup-button">NOT</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Perankat yang rusak yang butuh perbaikan/pergantian</label>
                            <textarea class="form-control"name="note" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit"class="btn btn-block btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- Add javascript --}}
@section('javascript')
<script>
     $("#list_karyawan").select2({
                    width: 'resolve',
                    placeholder: "Pilih User",
                    allowClear: true
                });
     $("#list_lokasi").select2({
                    width: 'resolve',
                    placeholder: "Pilih Lokasi",
                    allowClear: true
                });
                $("#list_pc").select2({
                    width: 'resolve',
                    placeholder: "Pilih PC",
                    allowClear: true
                });
                $("#list_monitor").select2({
                    width: 'resolve',
                    placeholder: "Pilih Monitor",
                    allowClear: true
                });
                $("#list_printer").select2({
                    width: 'resolve',
                    placeholder: "Pilih Printer",
                    allowClear: true
                });
                $("#list_lokasi_p").select2({
                               width: 'resolve',
                               placeholder: "Pilih Lokasi",
                               allowClear: true
                           });
                $("#pic1").select2({
                               width: 'resolve',
                               placeholder: "Pilih PIC",
                               allowClear: true
                           });
                $("#pic2").select2({
                               width: 'resolve',
                               placeholder: "Pilih PIC",
                               allowClear: true
                           });


</script>
@endsection
