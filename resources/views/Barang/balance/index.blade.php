@extends('layout.main')
@section('title')
    Inventaris Barang
@endsection
@section('main_header')
    Inventaris Barang
@endsection
{{-- @can('isAdmin') --}}
    @section('header')
        <a href="{{ route('reqitem_create') }}" class="btn btn-secondary btn-round">Req Barang</a>
        {{-- <a href="{{ route('ga_balance_insert') }}" class="btn btn-secondary btn-round">Tambah Stok Barang</a> --}}
        <button type="button" class="btn btn-secondary btn-round" data-toggle="modal" data-target="#addstockModal">
            Tambah Stok Barang
          </button>
        <a href="{{ route('itm_balance_export') }}" type="button" class="btn btn-secondary btn-round" >
            Export Excel
          </a>
    @endsection
{{-- @endcan --}}
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h3 class="text-center">Barang</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive text-center ">
                <table class="table table-striped table-bordered" id="barang">
                    <caption>Inventaris Barang</caption>
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Nama</th>
                            <th>HO</th>
                            <th>Legok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        @foreach ($list as $list)

                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td>{{ $list->nama_barang }}</td>
                                <td>{{ $list->HO }}</td>
                                <td>{{ $list->Legok }}</td>
                            </tr>
                            <?php $nomor++; ?>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
{{-- Modal --}}
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="addstockModal" tabindex="-1" aria-labelledby="addstockModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addstockModalLabel">Atur Stock</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
                    <select name="id_barang" id="sel-data" class="form-control" style="width: 100%;">
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

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-block btn btn-primary">Submit</button>
        </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
            $('#barang').DataTable();
            $("#sel-data").select2();
        });
        // $(document).ready(function() {
        // });
    </script>
@endsection
