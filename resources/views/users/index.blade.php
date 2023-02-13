@extends('layout.main')
@section('title')
    List Users
@endsection
@section('main_header')
    List Users
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h3 class="text-center">List Users</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive text-center ">
                <table class="table table-striped table-bordered display nowrap" id="list_users">
                    <caption>List Users</caption>
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $nomor = 1; ?>

                        @foreach ($list as $list)
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td>{{ $list->user_nik }}</td>
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->created_at }}</td>
                            <td>
                                <a target="__BLANK" href="{{ route('users.view', $list->id) }}"
                                    class="text-primary"><i class="fas fa-print"data-toggle="tooltip" data-placement="top" title="Print Data"></i></a>
                                <a target="__BLANK" href="{{ route('users.delete', $list->email) }}"
                                    class="text-danger"><i class="fas fa-trash"data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>

@endsection
@section('javascript')
<script id="dataTables">
    $(document).ready(function() {
        $('#list_users').DataTable();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    });
</script>
@endsection
