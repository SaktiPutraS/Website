@extends('layout.main')
@section('title')
    Edit PC - {{ $list->pc_number }}
@endsection
@section('main_header')
    Edit PC - {{ $list->pc_number }}
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            <form method='post' action="{{ route('pc_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif

                <div class="form-group row">
                    <label for="type" class="col-md-3">Type</label>
                    <input required type="text" class="col-md form-control" readonly value="edit" name="type">
                </div>
                <div class="form-group row">
                    <label for="pc_unique" class="col-md-3">Pc Unique</label>
                    <input required type="text" class="col-md form-control" readonly value="{{$list->pc_unique}}" name="pc_unique">
                </div>
                <div class="form-group row">
                    <label for="pc_user" class="col-md-3">Nama User</label>
                    <input required type="text" class="col-md form-control" value="{{$list->pc_user}}" name="pc_user">
                </div>
                <div class="form-group row">
                    <label for="pc_location" class="col-md-3">Lokasi</label>
                    <select name="pc_location" class="col-md custom-select form-control">
                        <option>{{$list->pc_location}} </option>
                        <option>HO LT-1</option>
                        <option>HO LT-2F</option>
                        <option>HO LT-2J</option>
                        <option>HO LT-3F</option>
                        <option>HO LT-3J</option>
                        <option>HO LT-4F</option>
                        <option>HO LT-4J</option>
                        <option>HO LT-4JA</option>
                        <option>LGK LT-1</option>
                        <option>LGK LT-2</option>
                        <option>LGK LT-3</option>
                        <option>LGK LT-4</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="pc_condition" class="col-md-3">Kondisi</label>
                    <select name="pc_condition" class="col-md custom-select form-control">
                        <option>{{$list->pc_condition}} </option>
                        <option>Performa Sempurna</option>
                        <option>Performa Bagus</option>
                        <option>Performa Cukup</option>
                        <option>Performa Kurang</option>
                        <option>Perlu Perbaikan</option>
                        <option>Rusak</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="pc_mainboard" class="col-md-3">Mainboard</label>
                    <input required type="text" class="col-md form-control"value="{{$list->pc_mainboard}}"  name="pc_mainboard">
                </div>
                <div class="form-group row">
                    <label for="pc_processor" class="col-md-3">Processor</label>
                    <input required type="text" class="col-md form-control" value="{{$list->pc_processor}}" name="pc_processor">
                </div>
                <div class="form-group row">
                    <label for="pc_vga" class="col-md-3">VGA</label>
                    <input required type="text" class="col-md form-control" value="{{$list->pc_vga}}" name="pc_vga">
                </div>
                <div class="form-group row">
                    <label  class="col-md-3">Ram Lama</label>
                    <input required type="text" class="col-md form-control" readonly value="{{$list->pc_ram}}">
                </div>
                <div class="form-group row">
                    <label for="pc_ram" class="col-md-3">Ram</label>
                    <div class="col-md input-group">
                        <input type="number" name="pc_ram_1" class="form-control" required min="0" max="32">
                        <select name="pc_ram_2" class="custom-select form-control">
                            <option>GB DDR3</option>
                            <option>GB DDR3 LV</option>
                            <option>GB DDR4</option>
                            <option>GB DDR5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pc_hdd" class="col-md-3">HDD</label>
                    <div class="col-md input-group">
                        <input type="number" class="form-control" value="{{$list->pc_hdd}}" name="pc_hdd" required>
                        <div class="input-group-append">
                            <span class="input-group-text">GB</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pc_ssd" class="col-md-3">SSD</label>
                    <div class="col-md input-group">
                        <input type="number" class="form-control" value="{{$list->pc_ssd}}" name="pc_ssd" required>
                        <div class="input-group-append">
                            <span class="input-group-text">GB</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pc_energy" class="col-md-3">Daya</label>
                    <div class="col-md input-group">
                        <input type="number" class="form-control" value="{{$list->pc_energy}}" name="pc_energy" required>
                        <div class="input-group-append">
                            <span class="input-group-text">Watt</span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pc_os" class="col-md-3">OS</label>
                    <select name="pc_os" class="col-md custom-select form-control">
                        <option>{{$list->pc_os}}</option>
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
