@extends('layout.main')
@section('title')
    Permintaan ATK
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h1><strong>
                Permintaan ATK
            </strong>
            </h1>
        </div>
        <div class="card-body">
            <form action="{{ route('reqitem_store') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
            <div class="form-group">
                <label for="">Tanggal Pengajuan</label>
                <input type="date" name="tgl_pengajuan"class="form-control" value="<?php echo date('Y-m-d')?>">
            </div>
            <div class="row form-group">
                <div class=" col">
                    <label for="" class="form-label">Nama Pengaju</label>
                    <select name="id_user" id="karyawan" required class="form-control">
                        <option value="" selected disabled>Pilih Pengaju</option>
                        @foreach ($karyawan as $karyawan)
                        <option value="{{$karyawan->k_nik}}">{{$karyawan->k_nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" col">
                    <label for="" class="form-label">Divisi Pengaju</label>
                    <select name="id_divisi" id="divisi" required class="form-control">
                        <option value="" selected disabled>Pilih Divisi</option>
                        @foreach ($divisi as $divisi)
                        <option value="{{$divisi->div_unique}}">{{$divisi->div_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" col">
                    <label for="" class="form-label">Lokasi</label>
                    <select name="id_gudang" id="gudang" required class="form-control">
                        <option value="" selected disabled>Pilih Lokasi</option>
                        @foreach ($gudang as $gudang)
                        <option value="{{$gudang->id_gudang}}">{{$gudang->nama_gudang}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class=" form-group">
                <a class="btn btn-block btn-primary" onclick="addhere()"> Add item</a>
            </div>
            <div class="form-group">
                <label for="">Pilih Barang</label>
                <div class="row">
                    <div class="col">
                        <div id="cop">

                            <select name="id_barang[]" id="sel-data" required class="sel-data col form-control">
                                <option value="" selected>Pilih Barang</option>
                                </select>
                            </div>
                    </div>
                    {{-- <input type="number" readonly value="" class="form-control col-1"> --}}
                    <input type="number" required min=0 name="qty[]" class="mx-2 form-control col-1">
                </div>
                <div id="addhereloh"></div>
            </div>
            <div class="form-group">
                <label for="atk_reason">Alasan</label>
                <textarea name="alasan_pengajuan" id="atk_reason" required rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        function addhere(){
            // document.getElementById('addhereloh');
            var cop = document.getElementById('sel-data');
            var taradd = document.getElementById('addhereloh');
            var newcol = '<div class="row form-group" name="addcol">' +
                // '<input type="text" name="col[]" class="form-control col">' +
                cop.outerHTML +
                '<input type="number" required min=0 name="qty[]" class="mx-2 form-control col-1">' +
                // '<input type="number" readonly value="" class="form-control col-1">'+
                '<button onclick="remove(this)" class="btn btn-warning col-1">Delete</button></div>';
                // var newcol= 'tes';
                // taradd.appendChild(newcol);
                taradd.innerHTML += newcol;
                // $("#sel-data[]").select2();
            }
        function remove(elem){
                elem.parentNode.remove(elem);
            }
    </script>
    <script type="text/javascript">


        $("#gudang").on("change", function() {
            var data = $(this).find(":selected").val() ;
            // Take data from server
            $.get("{{route('reqitem_reqloc')}}",
            {'data' : data},
            function(hasil){
                // Ganti Kategori chart
                // typelabel = Object.keys(hasil);
                // typeval = Object.values(hasil);
                // typedata.labels=typelabel;
                // typedata.datasets[0].data=typeval;
                // typechart.update();
                var paste = document.getElementById('sel-data');
                var data=""
                paste.innerHTML="<option value='' selected disabled>Pilih Barang</option>";
                for(var i=0;i<hasil.length;i++){
                    // data+='<option value="'+hasil[i].id_barang+'">'+hasil[i].nama_barang+' Qty :'+hasil[i].qty_barang+'</option>';

                    var opt = document.createElement('option');
                    opt.value = hasil[i].id_barang;
                    opt.innerHTML = hasil[i].nama_barang+' Qty :'+hasil[i].qty_barang;
                    paste.appendChild(opt);
                }
                // paste.innerHTML+=data;
            });
        });
        </script>
    <script>
        $(document).ready(function() {
            $("#divisi").select2();
            $("#karyawan").select2({
                    width: 'resolve',
                    placeholder: "Cari User",
                    allowClear: true,
                    minimumInputLength: 3,
                });
            $("#gudang").select2();
            // $(".sel-data").select2({
                    // width: 'resolve',
                    // placeholder: "Cari Barang",
                    // allowClear: true,
                    // minimumInputLength: 3,
                // });
        });
    </script>
@endsection
