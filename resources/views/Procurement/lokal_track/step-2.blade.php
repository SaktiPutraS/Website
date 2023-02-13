@extends('layout.main')
@section('title')
Update PO Lokal Track Bagian Purchase Invoice
@endsection
@section('main_header')
Update PO Lokal Track Bagian Purchase Invoice
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h4>Update Bagian Purchase Invoice</h4>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{route('lokal_procurement_2_store')}}">
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
                {{-- <input required class="form-control" readonly value="nomornya" name="tipe" type="text"> --}}
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
            </div>
            <div class="form-group row">
                <div class="form-group col">
                    <label for="ppb_tgl_pengajuan" class="form-label">Tanggal Terima dari Procurement</label>
                    <input required class="form-control" value="" name="tanggal_terima_procurement" id="tanggal_terima_procurement"type="date">
                </div>
                <div class="form-group col">
                    <label for="ppb_pengaju" class="form-label">Tanggal Serah ke Finance</label>
                    <input  class="form-control"  name="tanggal_serah_finance" type="date" value="<?php echo date('Y-m-d')?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col">
                    <label for="ppb_tgl_pengajuan" class="form-label">Tanggal Input</label>
                    <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_input" type="date">
                </div>
                <div class="form-group col">
                    <label for="ppb_pengaju" class="form-label">Nama Inputer</label>
                    <input  class="form-control"  name="nama_input" type="text" value="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col">
                    <label for="tanggal_proses_pi" class="form-label">Tanggal Proses PI</label>
                    <input required class="form-control" value="<?php echo date('Y-m-d')?>" name="tanggal_proses_pi" type="date">
                </div>
                <div class="form-group col">
                    <label for="nomor_faktur " class="form-label">Nomor Faktur</label>
                    <input  class="form-control"  name="nomor_faktur" type="text">
                </div>

            </div>
            <div class="form-group col">
                <label for="catatan_pi" class="form-label">Catatan PI</label>
                <!-- <input  class="form-control"  name="ppb_tgl_po" type="text"> -->
                <textarea name="catatan_pi" id="" cols="30" rows="10" class="form-control"></textarea>
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
        // console.log(x);
        $.get('{{ route('lokal_procurement_getData') }}', {
            'passdata': x
        }, function(response) {
            $.each($.parseJSON(response), function(key, value) {
                // console.log(value.nomor_po);
                $("#nomor_po").val(value.nomor_po);
                $("#nama_vendor").val(value.nama_vendor);
                $("#tanggal_terima_procurement").val(value.tanggal_serah_pi);
            });
        });
    }
</script>
@endsection
