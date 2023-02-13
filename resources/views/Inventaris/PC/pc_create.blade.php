@extends('layout.main')
@section('title')
    Penambahan PC
@endsection
@section('main_header')
    Penambahan PC
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            <form method='post' action="{{ route('pc_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_buy_date">Tanggal Beli</label>
                        </div>
                        <div class="col-md">
                            <input required class="form-control" value="<?php echo date('Y-m-d'); ?>" name="pc_buy_date"
                                type="date">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="type">Type</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" readonly value="create" name="type">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_user">Nama User</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="pc_user">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_old_number">No Lama</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" value="Kosong" name="pc_old_number">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_price">Harga PC</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input required type="number" class="form-control" min="0" name="pc_price">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_location">Lokasi</label>
                        </div>
                        <div class="col-md">
                            <select name="pc_location" class="custom-select form-control" required style="width:100%">
                                <option disabled selected value="">Pilih Lokasi</option>
                                @foreach ($lokasi as $list)
                                    <option>{{ $list->loc_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_condition">Kondisi</label>
                        </div>
                        <div class="col-md">
                            <select name="pc_condition" required class="custom-select form-control">
                                <option disabled selected value="">Pilih Kondisi</option>
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
                            <label for="pc_mainboard">Mainboard</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="pc_mainboard">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_processor">Processor</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="pc_processor">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_vga">VGA</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="pc_vga">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_ram">Ram</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input type="number" name="pc_ram_1" class="form-control" required min="0" max="32">
                                <select name="pc_ram_2" class="custom-select form-control">
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
                            <label for="pc_hdd">HDD</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input type="number" class="form-control"  value="0" min="0" name="pc_hdd" required>
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
                            <label for="pc_ssd">SSD</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input type="number" class="form-control" value="0" min="0" name="pc_ssd" required>
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
                            <label for="pc_energy">Daya</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input type="number" class="form-control"  value="0" min="0" name="pc_energy" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Watt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="pc_os">OS</label>
                        </div>
                        <div class="col-md">
                            <select name="pc_os" required class="custom-select form-control">
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
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
