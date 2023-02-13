@extends('layout.main')
@section('title')
    Edit
@endsection
@section('main_header')
    Penambahan Inventaris Laptop
@endsection
@section('content')


    <div class="card card-shadow">
        <div class="card-body">
            <form method='post' action="{{ route('laptop_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                {{-- <div class="form-group row">
                    <label for="laptop_buy_date" class="col-md-3">Tanggal Beli</label>
                    <input required  class="col-md form-control"  value="<?php echo date('Y-m-d'); ?>"
                        name="laptop_buy_date" type="date">
                </div> --}}
                <div class="form-group row">
                    <label for="laptop_user" class="col-md-3">Type Input</label>
                    <input class="col-md form-control" required type="text" name="type" value="edit" readonly>
                </div>
                <div class="form-group row">
                    <label for="laptop_unique" class="col-md-3">Laptop Unique</label>
                    <input class="col-md form-control" required readonly type="text" value="{{ $list->laptop_unique }}"
                        name="laptop_unique">
                </div>
                <div class="form-group row">
                    <label for="laptop_user" class="col-md-3">Nama User</label>
                    <input class="col-md form-control" required type="text" value="{{ $list->laptop_user }}"
                        name="laptop_user">
                </div>
                <div class="form-group row">
                    <label for="laptop_name" class="col-md-3">Nama Laptop</label>
                    <input class="col-md form-control" required type="text" value="{{ $list->laptop_name }}"
                        name="laptop_name">
                </div>

                <div class="form-group row">
                    <label for="laptop_old_number" class="col-md-3">No Lama</label>
                    <input class="col-md form-control" required type="text" value="{{ $list->laptop_number }}"
                        name="laptop_old_number">
                </div>

                <div class="form-group row">
                    <label for="laptop_serial_number" class="col-md-3">SN</label>
                    <input required type="text" value="{{ $list->laptop_serial_number }}" class="col-md form-control"
                        name="laptop_serial_number">
                </div>

                <div class="form-group row">
                    <label for="laptop_price" class="col-md-3">Harga</label>
                    <input required type="number" value="{{ $list->laptop_price }}" class="col-md form-control"
                        name="laptop_price">
                </div>
                <div class="form-group row">
                    <label for="laptop_status" class="col-md-3">Status</label>
                    <select name="laptop_status" class="col-md custom-select form-control">
                        <option selected>{{ $list->laptop_status }}</option>
                        <option>NOP</option>
                        <option>Inventaris Kantor</option>
                    </select>
                </div>

                <div class="form-group row">
                    <label for="laptop_condition" class="col-md-3">Kondisi</label>
                    <select name="laptop_condition" class="col-md custom-select form-control">
                        <option selected>{{ $list->laptop_condition }}</option>
                        <option>Performa Sempurna</option>
                        <option>Performa Bagus</option>
                        <option>Performa Cukup</option>
                        <option>Performa Kurang</option>
                        <option>Perlu Perbaikan</option>
                        <option>Rusak</option>
                    </select>
                </div>


                <div class="form-group row">
                    <label for="laptop_processor" class="col-md-3">Processor</label>
                    <input required type="text" value="{{ $list->laptop_processor }}" name="laptop_processor"
                        class="col-md form-control">
                </div>
                <div class="form-group row">
                    <label for="laptop_vga" class="col-md-3">VGA</label>
                    <input required type="text" value="{{ $list->laptop_vga }}" name="laptop_vga"
                        class="col-md form-control">
                </div>
                <div class="form-group row">
                    <label for="laptop_ram" class="col-md-3">Ram Lama</label>
                    <div class="col-md input-group">
                        <input type="text" name="laptop_ram" class="form-control" value="{{ $list->laptop_ram }}"
                            required readonly>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="laptop_ram" class="col-md-3">Ram</label>
                    <div class="col-md input-group">
                        <input type="number" name="laptop_ram_1" class="form-control" required min="0" max="32">
                        <select name="laptop_ram_2" class="custom-select form-control">
                            <option>GB DDR3</option>
                            <option>GB DDR3 LV</option>
                            <option>GB DDR4</option>
                            <option>GB DDR5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="laptop_hdd" class="col-md-3">HDD</label>
                    <div class="col-md input-group">
                        <input type="number" class="form-control" value="{{ $list->laptop_hdd }}" min="0"
                            name="laptop_hdd" required>
                        <div class="input-group-append">
                            <span class="input-group-text">GB</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="laptop_ssd" class="col-md-3">SSD</label>
                    <div class="col-md input-group">
                        <input type="number" class="form-control" value="{{ $list->laptop_ssd }}" min="0"
                            name="laptop_ssd" required>
                        <div class="input-group-append">
                            <span class="input-group-text">GB</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="laptop_os" class="col-md-3">OS</label>
                    <select name="laptop_os" class="col-md custom-select form-control">
                        <option selected>{{ $list->laptop_os }}</option>
                        <option>Windows 7 32bit</option>
                        <option>Windows 7 64bit</option>
                        <option>Windows 8 32bit</option>
                        <option>Windows 8 64bit</option>
                        <option>Windows 8.1 32bit</option>
                        <option>Windows 8.1 64bit</option>
                        <option>Windows 10 64bit</option>
                        <option>Windows 11 64bit</option>
                        <option>Linux</option>
                        <option>Mac OS</option>

                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
