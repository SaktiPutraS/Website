@extends('layout.main')
@section('title')
List PO Lokal Track
@endsection
@section('main_header')
List PO Lokal Track
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            <table class="table table-striped" id="nomor_ptf">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>No</th>
                        <th>Nomor PTF</th>
                        <th>Nomor PO</th>
                        <th>Nama Vendor</th>
                        <th>Nomor RI</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1?>
                    @foreach ($list as $list)
                    <tr>
                        <td>{{$list->status_ptf}}</td>
                        <td><?php echo $nomor++;?></td>
                        <td>{{$list->nomor_ptf}}</td>
                        <td>{{$list->nomor_po}}</td>
                        <td>{{$list->nama_vendor}}</td>
                        <td>{{$list->nomor_ri}}</td>
                        <td>Aksi</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('javascript')
<script id="dataTables">
    $(document).ready(function() {

        $('#nomor_ptf').DataTable();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    });
</script>

@endsection
