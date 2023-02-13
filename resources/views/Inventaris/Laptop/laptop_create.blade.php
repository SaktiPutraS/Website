@extends('layout.main')
@section('title')
    Penambahan Inventaris Laptop
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
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_buy_date">Tanggal Beli</label>
                        </div>
                        <div class="col-md">
                            <input required class="form-control" value="<?php echo date('Y-m-d'); ?>" name="laptop_buy_date"
                                type="date">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_user">Type Input</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="type" value="create" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_user">Nama User</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="laptop_user">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_name">Nama Laptop</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="laptop_name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_old_number">No Lama</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" value="Kosong" name="laptop_old_number">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_serial_number">SN</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" value="Kosong" name="laptop_serial_number">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_price">Harga</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">RP.</span>
                                </div>
                                <input required type="number" class="form-control" value="Kosong" name="laptop_price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_status">Status</label>
                        </div>
                        <div class="col-md">
                            <div class="selectgroup btn-block" role="group" aria-label="Basic radio toggle button group">
                                <label class="btn-danger selectgroup-item" for="trCategory1">
                                    <input type="radio" class="selectgroup-input" name="laptop_status" required
                                        id="trCategory1" value="NOP" autocomplete="off">
                                    <span class="selectgroup-button text-dark">NOP</span>
                                </label>
                                <label class="btn-success selectgroup-item" for="trCategory2">
                                    <input type="radio" class="selectgroup-input" name="laptop_status" id="trCategory2"
                                        value="Inventaris Kantor" autocomplete="off">
                                    <span class="selectgroup-button text-dark">Inventaris Kantor</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_condition">Kondisi</label>
                        </div>
                        <div class="col-md">
                            <select required name="laptop_condition" class="custom-select form-control">
                                <option selected disabled value="">Pilih Kondisi</option>
                                <option>Performa Sempurna</option>
                                <option>Performa Bagus</option>
                                <option>Performa Cukup</option>
                                <option>Performa Kurang</option>
                                <option>Perlu Perbaikan</option>
                                <option>Rusak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_processor">Processor</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="laptop_processor">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_vga">VGA</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="laptop_vga">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_ram">Ram</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input type="number" name="laptop_ram_1" class="form-control" required min="0" max="32">
                                <select required name="laptop_ram_2" class="custom-select form-control">
                                    <option>GB DDR3</option>
                                    <option>GB DDR3 LV</option>
                                    <option>GB DDR4</option>
                                    <option>GB DDR5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_hdd">HDD</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input type="number" class="form-control" value="0" min="0" name="laptop_hdd" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">GB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_ssd">SSD</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input type="number" class="form-control" value="0" min="0" name="laptop_ssd" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">GB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_os">OS</label>
                        </div>
                        <div class="col-md">
                            <select required name="laptop_os" class="custom-select form-control">
                                <option disabled selected value="">Pilih OS</option>
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
                                <option>DOS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
