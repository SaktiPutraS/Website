@extends('layout.main')
@section('content')
<div class="card card-shadow">
    <div class="card-body">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nomor Barang</th>
                <th>Kode Barang</th>
                <th>Divisi</th>
                <th>Status</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $list)
            <tr>
                <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PinjamBarang">
                            Pinjam
                        </button>
                </td>
                <td>{{$list->nomor_barang}}</td>
                <td>{{$list->barang}}</td>
                <td>{{$list->divisi}}</td>
                <td>{{$list->status}}</td>
                <td>{{$list->keterangan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</div>

        <!-- Modal -->
        <div class="modal fade" id="PinjamBarang" tabindex="-1" aria-labelledby="PinjamBarangLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="PinjamBarangLabel">Pinjam Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>

                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>


@endsection
