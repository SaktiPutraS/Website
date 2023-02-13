@extends('layout.main')
@section('title')
    Inventaris Tinta
@endsection
@section('main_header')
    Inventaris Tinta
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h1>Create New Ink</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="{{ route('ink_update') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @if ($errors->any())
                            <p class="alert alert-danger">{{ $errors->first() }}</p>
                        @endif
                        <div class="form-group">
                            <label for="type" class="form-label">Tipe</label>
                            <input required class="form-control" readonly value="create" name="type" type="text">
                        </div>
                        <div class="form-group">
                            <label for="ink_date_create " class="form-label">Tanggal Pembuatan</label>
                            <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="ink_date_create" type="date">
                        </div>
                        <div class="form-group">
                            <label for="ink_code " class="form-label">Kode Tinta</label>
                            <input required class="form-control" value="" name="ink_code" type="text">
                        </div>
                        <div class="form-group">
                            <label for="ink_name " class="form-label">Nama Tinta</label>
                            <input required class="form-control" value="" name="ink_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="ink_qty " class="form-label">Jumlah</label>
                            <input required class="form-control" value="" name="ink_qty" type="text">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn-block btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="card-body card-shadow">
                        <h2>Penamaan Kode Tinta</h2>
                        <h4>Penamaan Kode adalah <q>Tipe_Tinta-Kode_Tinta-Warna_Tinta</q></h4>
                        <h5>Contoh : T-83A-B</h5>
                        <ul>
                            <li>
                                Tipe Tinta
                                <ul>
                                    <li>Kode <strong>C</strong> untuk tipe tinta Cartridge </li>
                                    <li>Kode <strong>T</strong> untuk tipe tinta Toner</li>
                                    <li>Kode <strong>B</strong> untuk tipe tinta Botol</li>
                                    <li>Kode <strong>P</strong> untuk tipe tinta Pita</li>
                                </ul>
                            </li>
                            <li>
                                Kode Tinta, contoh :
                                <ul>
                                    <li>Kode <strong>664</strong> untuk kode tinta 664 </li>
                                    <li>Kode <strong>774</strong> untuk kode tinta 774</li>
                                    <li>Kode <strong>TN-2356</strong> untuk tinta kode tn-2356</li>
                                    <li>Kode <strong>LX-310</strong> untuk pita printer lx-310</li>
                                </ul>
                            </li>
                            <li>
                                Warna Tinta, contoh :
                                <ul>
                                    <li>Kode <strong>B</strong> untuk warna tinta Black </li>
                                    <li>Kode <strong>C</strong> untuk warna tinta Cyan</li>
                                    <li>Kode <strong>M</strong> untuk warna tinta Magenta</li>
                                    <li>Kode <strong>Y</strong> untuk warna tinta Yellow</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
