@extends('layout.main')
@section('title')
    Item Balance
@endsection
@section('main_header')
    Item Balance
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h1>Penambahan Barang</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('itm_balance_store') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @if ($errors->any())
                            <p class="alert alert-danger">{{ $errors->first() }}</p>
                        @endif
                        <div class="form-group">
                            <label for="type" class="form-label">Tipe</label>
                            <input required class="form-control" readonly value="inventory" name="type" type="text">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_barang " class="form-label">Tanggal Pembuatan</label>
                            <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_barang" type="date">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Lokasi Gudang</label>
                            <select name="id_gudang" id="gudang" class="form-control">
                                <option value="" selected disabled>Pilih Gudang</option>
                                @foreach ($gudang as $gudang)
                                <option value="{{$gudang->id_gudang}}">{{$gudang->nama_gudang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Nama Barang</label>
                            <select name="id_barang" id="sel-data" class="form-control">
                                <option value="" selected disabled>Pilih Barang</option>
                                @foreach ($barang as $barang)
                                <option value="{{$barang->id_barang}}">{{$barang->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Jumlah Barang</label>
                            <input type="number" name="qty_barang" id="qty" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn-block btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
     <script>
        $(document).ready(function() {
            $("#sel-data").select2();
        });
    </script>
@endsection
