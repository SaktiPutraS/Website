@extends('layout.main')
@section('title')
List Barang General Affair
    @endsection
    @section('main_header')
    List Barang General Affair
@endsection
@section('header')
    {{-- <a href="{{ route('hard_fix_report') }}" class="btn btn-secondary btn-round">Report</a> --}}
    <a href="{{ route('itm_create') }}" class="btn btn-secondary btn-round">Add Barang</a>
    <a href="{{ route('itm_export') }}" class="btn btn-secondary btn-round">Export Barang</a>
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h3 class="text-center">List Barang</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive text-center ">
                <table class="table table-striped table-bordered display" id="listbarang">
                    <caption>List Barang</caption>
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        {{-- @can('HardFixView',$hardFixG) --}}
                        @foreach ($list as $list)
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td>{{$list->nama_barang}}</td>
                                <td><a  onclick="return confirm('Are you sure to delete {{ $list->nama_barang }} ?');" href="{{ route('itm_del', $list->id_barang) }}" class="text-danger"><i class="fas fa-trash"data-toggle="tooltip" data-placement="top" title="Delete Data"></i></a></td>
                            </tr>
                            <?php $nomor++; ?>
                        @endforeach
                        {{-- @endcan --}}
                    </tbody>

                </table>
            </div>
        </div>

    </div>

@endsection
@section('javascript')

    <script>
        $(document).ready(function() {
    $('#listbarang').DataTable();
} );
    </script>

@endsection
