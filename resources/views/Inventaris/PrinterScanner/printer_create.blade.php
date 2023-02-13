@extends('layout.main')
@section('title')
    Tambah Printer/Scanner
@endsection
@section('main_header')
    Tambah Printer/Scanner
@endsection
@section('content')

    <div class="card card-shadow">
        <div class="card-body">

            <form method='post' action="{{route('printer_update')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <div class="form-group row">
                    <label for="printer_buy_date" class="col-md-3">Tanggal Beli</label>
                    <input required class="col-md form-control" value="<?php echo date('Y-m-d'); ?>" name="printer_buy_date"
                        type="date">
                </div>
                <div class="form-group row">
                    <label for="printer_name" class="col-md-3">Nama Printer</label>
                    <input required type="text" class="col-md form-control" name="printer_name">
                </div>
                <div class="form-group row">
                    <label for="type" class="col-md-3">Tipe Input</label>
                    <input required type="text" class="col-md form-control"value ="create" readonly name="type">
                </div>

                <div class="form-group row">
                    <label for="printer_old_number" class="col-md-3">No Lama</label>
                    <input required type="text" class="col-md form-control" value="Kosong" name="printer_old_number">
                </div>
                <div class="form-group row">
                    <label for="printer_serial_number" class="col-md-3">Serial Number</label>
                    <input required type="text" class="col-md form-control" value="Kosong" name="printer_serial_number">
                </div>
                <div class="form-group row">
                    <label for="printer_price" class="col-md-3">Harga</label>
                    <input required type="number" class="col-md form-control" name="printer_price">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="printer_energy">Daya</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input required type="number" class="form-control" value="Kosong" name="printer_energy">
                                <div class="input-group-append">
                                    <span class="input-group-text">Watt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="printer_location" class="col-md-3">Lokasi</label>
                    <select name="printer_location" class="custom-select col-md form-control">
                        <option disabled selected value="">Pilih Lokasi</option>
                        @foreach ($lokasi as $list)
                        <option>{{ $list->loc_name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label for="printer_condition" class="col-md-3">Kondisi</label>
                    <select required name="printer_condition" class="col-md custom-select form-control">
                        <option disabled selected value="">Pilih Kondisi</option>
                        <option>Performa Sempurna</option>
                        <option>Performa Bagus</option>
                        <option>Performa Cukup</option>
                        <option>Performa Kurang</option>
                        <option>Perlu Perbaikan</option>
                        <option>Rusak</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="printer_kind" class="col-md-3">Jenis</label>
                    <select required name="printer_kind" class="custom-select col-md form-control">
                     <option disabled selected value="">Pilih Jenis</option>
                        <option>Printer</option>
                        <option>Scanner</option>
                        <option>Printer dan Scanner</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="printer_type" class="col-md-3">Tipe</label>
                    <select required name="printer_type" class="custom-select col-md form-control">
                     <option disabled selected value="">Pilih Tipe</option>
                        <option>Scanner Portable</option>
                        <option>All in One</option>
                        <option>Laset Jet</option>
                        <option>Dot Matrix</option>
                        <option>Plotter</option>
                        <option>Inkjet</option>
                        <option>Scanner Flat</option>
                        <option>Grafir</option>
                        <option>Mesin Barcode</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="printer_tinta" class="col-md-3">Tinta</label>
                    <div class="selectgroup btn-block col-md" role="group" aria-label="Basic radio toggle button group">
                        <label class="btn-success selectgroup-item" for="trCategory1">
                            <input type="radio" class="selectgroup-input" name="printer_ink" required id="trCategory1"
                                value="yes" autocomplete="off">
                            <span class="selectgroup-button text-dark">Iya</span>
                        </label>
                        <label class="btn-warning selectgroup-item" for="trCategory2">
                            <input type="radio" class="selectgroup-input" name="printer_ink" id="trCategory2" value="no"
                                autocomplete="off">
                            <span class="selectgroup-button text-dark">Tidak Ada</span>
                        </label>
                    </div>
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>

    </div>

@endsection
