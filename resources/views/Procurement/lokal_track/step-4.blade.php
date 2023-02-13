@extends('layout.main')
@section('title')
Update PO Lokal Track Bagian GL
@endsection
@section('main_header')
    Update PO Lokal Track Bagian GL
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h4>Update Bagian GL</h4>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{route('lokal_procurement_4_store')}}">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
            <div class="form-group">
                <label for="type" class="form-label">Tipe</label>
                <input required class="form-control" readonly value="create" name="tipe" type="text">
            </div>
            <div class="form-group">
                <label for="type" class="form-label">Nomor PTF</label>
                <select required name="id_nomor" id="id_nomor" class="form-control" onchange="getData()">
                    <option value="" selected disabled>Nomor PTF - Nama Vendor - Nomor PO</option>
                    @foreach ($list as $item)
                    <option value="{{$item->id_nomor}}">{{$item->nomor_ptf}} - {{$item->nama_vendor}} - {{$item->nomor_po}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <div class="form-group col">
                    <label for="ppb_pengaju" class="form-label">Nama Vendor</label>
                    <input id="nama_vendor" class="form-control"  name="" readonly type="text">
                </div>
                <div class="form-group col">
                    <label for="ppb_tgl_pengajuan" class="form-label">Nomor PO</label>
                    <input id="nomor_po" class="form-control" readonly type="text">
                </div>
                <div class="form-group col">
                    <label for="tanggal_terima_finance" class="form-label">Tanggal Terima dari Finance</label>
                    <input required class="form-control" value="" name="tanggal_terima_finance" id="tanggal_terima_finance"type="date">
                </div>
            </div>
            {{-- <div class="form-group row">
                <div class="form-group col">
                    <label for="tanggal_serah_gl" class="form-label">Tanggal Serah ke GL</label>
                    <input  class="form-control"  name="tanggal_serah_gl" type="date" value="<?php echo date('Y-m-d')?>">
                </div>
            </div> --}}
            <div class="form-group row">
                <div class="form-group col">
                    <label for="tanggal_input" class="form-label">Tanggal Input</label>
                    <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_input" type="date">
                </div>
                <div class="form-group col">
                    <label for="nama_input" class="form-label">Nama Inputer</label>
                    <input  class="form-control" required name="nama_input" type="text" value="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col">
                    <label for="tanggal_proses_gl" class="form-label">Tanggal Proses GL</label>
                    <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_proses_gl" type="date">
                </div>
                <div class="form-group col">
                    <label for="nomor_voucher_gl " class="form-label">Nomor Voucher GL</label>
                    <input  class="form-control"  name="nomor_voucher_gl" type="text">
                </div>

            </div>
            <div class="form-group col">
                <label for="catatan_gl" class="form-label">Catatan GL</label>
                <textarea name="catatan_gl" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>


                <button class="btn btn-secondary btn-block" type="submit" id="next">Next</button>
    </form>
        </div>
    </div>
@endsection
@section('javascript')
<script>

    $("#id_nomor").select2({
        width: 'resolve',

        allowClear: true,
        minimumInputLength: 3,
    });
    </script>
     <script>
        function getData() {
           let x = document.getElementById("id_nomor").value;
           $.get('{{ route('lokal_procurement_getData') }}', {
               'passdata': x
           }, function(response) {
               $.each($.parseJSON(response), function(key, value) {
                   $("#nomor_po").val(value.nomor_po);
                   $("#nama_vendor").val(value.nama_vendor);
                   $("#tanggal_terima_finance").val(value.tanggal_serah_gl);
               });
           });
       }
   </script>
@endsection
