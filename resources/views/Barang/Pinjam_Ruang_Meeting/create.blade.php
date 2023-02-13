@extends('layout.main')
@section('title')
    Permintaan Perbaikan Infrastruktur
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h1><strong>
                Permintaan Perbaikan Infrastruktur
            </strong>
            </h1>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Tanggal Pengajuan</label>
                <input type="date" class="form-control">
            </div>
            <div class="row form-group">
                <div class=" col">
                    <label for="" class="form-label">Nama Pengaju</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class=" col">
                    <label for="" class="form-label">Divisi Pengaju</label>
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Keterangan Laporan</label>
                <textarea name="" id="" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </div>
        </div>
    </div>
@endsection
