@extends('layout.main')
@section('title')
    List Lokasi
@endsection
@section('main_header')
    List Lokasi
@endsection
@section('header')
    {{-- <a href="{{ route('hard_req_create') }}" class="btn btn-secondary btn-round">Add Divisi</a> --}}
    <button type="button" class="btn btn-secondary btn-round" data-toggle="modal" data-target="#addLokasi">
        Add Lokasi
      </button>
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h3 class="text-center">List Lokasi</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive text-center ">
                <table class="table table-striped table-bordered display nowrap" id="list_lokasi">
                    <caption>List Divisi</caption>
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Name</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $nomor = 1; ?>

                        @foreach ($list as $list)
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td>{{ $list->loc_name }}</td>
                            <td>
                                {{-- <a target="__BLANK" href="{{ route('divisi.view', $list->div_unique) }}"
                                    class="text-primary"><i class="fas fa-edit"data-toggle="tooltip" data-placement="top" title="Edit Data"></i></a> --}}
                                <a onclick="return confirm('Are you sure to delete {{ $list->loc_name }} ?');" href="{{ route('lokasi.delete', $list->loc_unique) }}"
                                    class="text-danger"><i class="fas fa-trash"data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>

{{-- Modal Add Divisi --}}

  <!-- Modal -->
  <div class="modal fade" id="addLokasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Lokasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('lokasi.create')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group row">
                  <label for="div_name" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="loc_name" id="loc_name">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection
@section('javascript')
<script id="dataTables">
    $(document).ready(function() {
        $('#list_lokasi').DataTable();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    });
</script>
@endsection
