@extends('layout.main')
@section('title')
    Edit {{$list->monitor_number}}
    @endsection
    @section('main_header')
    Edit {{$list->monitor_number}}
@endsection
@section('content')


    <div class="card card-shadow">
        <div class="card-body">
            <form method='post' action="{{ route('monitor_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="monitor_buy_date">Tanggal Beli</label>
                        </div>
                        <div class="col-md">
                            <input required class="form-control" value="{{$list->monitor_buy_date}}" name="monitor_buy_date"
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
                            <input required type="text" class="form-control" name="type" value="edit" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_user">ID</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control" name="id" value="{{$list->id}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="monitor_user">Nama User</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" value="{{$list->monitor_user}}" class="form-control" name="monitor_user">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="monitor_name">Nama Monitor</label>
                        </div>
                        <div class="col-md">
                            <input required type="text"  value="{{$list->monitor_name}}" class="form-control" name="monitor_name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="laptop_old_number">Nomor</label>
                        </div>
                        <div class="col-md">
                            <input required type="text" class="form-control"  value="{{$list->monitor_number}}"  name="monitor_number">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="monitor_size">Ukuran</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input required type="number" class="form-control"  value="{{$list->monitor_size}}"  name="monitor_size">
                                <div class="input-group-append">
                                    <span class="input-group-text">Inch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="monitor_energy">Daya</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <input required type="number" class="form-control"  value="{{$list->monitor_energy}}"  name="monitor_energy">
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
                            <label for="monitor_price">Harga</label>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">RP.</span>
                                </div>
                                <input required type="number" class="form-control"  value="{{$list->monitor_price}}"  name="monitor_price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="monitor_location">Lokasi</label>
                        </div>
                        <div class="col-md">
                            <select name="monitor_location" class="custom-select form-control">
                                <option  selected value="">{{$list->monitor_location}}</option>
                                @foreach ($lokasi as $show)
                                <option>{{ $show->loc_name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="monitor_condition">Kondisi</label>
                        </div>
                        <div class="col-md">
                            <select required name="monitor_condition" class="custom-select form-control">
                                <option selected>{{$list->monitor_condition}} </option>
                                <option>Performa Sempurna</option>
                                <option>Performa Bagus</option>
                                <option>Performa Cukup</option>
                                <option>Performa Kurang</option>
                                <option>Perlu Perbaikan</option>
                                <option>Rusak</option>
                                <option>Tidak dipakai</option>
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
