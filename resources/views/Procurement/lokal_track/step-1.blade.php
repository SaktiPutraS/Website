@extends('layout.main')
@section('title')
Input PO Lokal Track
@endsection
@section('main_header')
    Input PO Lokal Track
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h4>Input PO</h4>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{route('lokal_procurement_1_store')}}">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
        <div id="header">
            <div class="form-group row">
                <div class="form-group col">
                    <label for="type" class="form-label">Tipe</label>
                    <input required class="form-control" readonly value="create" name="tipe" type="text">
                </div>
                <div class="form-group col">
                    <label for="ppb_pengaju" class="form-label">Database</label>
                    <select required name="database" id="" class="form-control">
                        <option value="" selected disabled>Pilih database</option>
                        <option value="DLGP">DLGP</option>
                        <option value="DFE">DFE</option>
                        <option value="DLN">DLN</option>
                    </select>
                    {{-- <input  class="form-control"  name="ppb_tgl_po" type="text" value="{{Auth::user()->name}}"> --}}
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col">
                    <label for="ppb_tgl_pengajuan" class="form-label">Tanggal Input</label>
                    <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_input" type="date">
                </div>
                <div class="form-group col">
                    <label for="ppb_pengaju" class="form-label">Nama Inputer</label>
                    <input  required  class="form-control"  name="nama_input" type="text" value="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col">
                    <label for="tanggal_ri" class="form-label">Tanggal RI</label>
                    <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_ri" type="date">
                </div>
                <div class="form-group col">
                    <label for="nomor_ri " class="form-label">Nomor RI</label>
                    <input  class="form-control" required name="nomor_ri" type="text">
                </div>

            </div>
            <div class="row form-group">
                <div class="form-group col">
                    <label for="nomor_po" class="form-label">Nomor PO  </label>
                    <input  class="form-control"required  value="" name="nomor_po" type="text">
                </div>
                <div class="form-group col">
                    <label for="nama_vendor " class="form-label">Nama Vendor</label>
                    <input  class="form-control" required  name="nama_vendor" type="text">
                </div>

            </div>
            <!-- Proc -->
            <div class="row form-group">
                <div class="form-group col">
                    <label for="tanggal_batas_bayar " class="form-label">Tanggal Batas Pembayaran</label>
                    <input  class="form-control" value="" name="tanggal_batas_bayar" type="date">
                </div>
                <div class="form-group col">
                    <label for="nama_pengaju_invoice" class="form-label">Nama Pengaju Invoice </label>
                    <input  class="form-control"  name="nama_pengaju_invoice" type="text">
                </div>

            </div>
            <div class="row form-group">
                <div class="form-group col">
                    <label for="tanggal_serah_pi" class="form-label">Tanggal Serah ke PI</label>
                    <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_serah_pi" type="date">
                </div>
                <div class="form-group col">
                    <label for="nomor_invoice " class="form-label">Nomor Invoice</label>
                    <input  class="form-control" value="" name="nomor_invoice" type="text">
                </div>
                <div class="form-group col">
                    <label for="nilai_invoice" class="form-label">Nilai Invoice</label>
                    <input  class="form-control"  name="nilai_invoice" type="number">
                </div>

            </div>
            <div class="form-group col">
                <label for="catatan_procurement" class="form-label">Catatan Procurement</label>
                <!-- <input  class="form-control"  name="ppb_tgl_po" type="text"> -->
                <textarea name="catatan_procurement" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>

                <button class="btn btn-secondary btn-block" type="submit" id="next">Next</button>
        </div>


    </form>
@endsection
