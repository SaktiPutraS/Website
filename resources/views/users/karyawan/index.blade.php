@extends('layout.main')
@section('title')
    List Karyawan
@endsection
@section('main_header')
    List Karyawan
@endsection
@section('header')
    {{-- <a href="{{ route('hard_req_create') }}" class="btn btn-secondary btn-round">Add Divisi</a> --}}
    {{-- <button type="button" class="btn btn-secondary btn-round" data-toggle="modal" data-target="#addLokasi">
        Add Karyawan
      </button> --}}
      <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#importKaryawan">
        Import Karyawan
      </button>
      <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#addKaryawan">
        Add karyawan
      </button>
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h3 class="text-center">List Karyawan</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive text-center ">
                <table class="table table-striped table-bordered display nowrap" id="list_karyawan">
                    <caption>List Karyawan</caption>
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $nomor = 1; ?>

                        @foreach ($list as $list)
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td>{{ $list->k_nik }}</td>
                            <td>{{ $list->k_nama }}</td>
                            <td>{{ $list->k_divisi }}</td>
                            <td>
                                <button type="button" class="btn-success" data-toggle="modal" data-target="#editKaryawan" id="edit" onclick="alertMe({{$list->id}})">
                                    <i class="fas fa-edit"data-toggle="tooltip" data-placement="top" title="Edit Data"></i>
                                </button>
                                {{-- <a target="__BLANK" href="{{ route('divisi.view', $list->div_unique) }}"
                                    class="text-primary"><i class="fas fa-edit"data-toggle="tooltip" data-placement="top" title="Edit Data"></i></a> --}}
                                <a onclick="return confirm('Are you sure to delete {{ $list->k_nama }} ?');" href="{{ route('karyawan_delete', $list->id) }}"
                                    class="text-danger"><i class="fas fa-trash"data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    {{-- Batas Modal --}}
    <!-- Button trigger modal -->

{{-- Modal Insert --}}
  <!-- Modal -->
  <div class="modal fade" id="addKaryawan" tabindex="-1" aria-labelledby="addKaryawanLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addKaryawanLabel">Add Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method='post' action="{{route('karyawan_store')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
            {{-- Add NIK --}}
          <div class="row form-group">
            <div class="col-3">
                <label for="" class="form-label">NIK</label>
            </div>
            <div class="col">
                <input type="text" name="k_nik" id="" required class="form-control" placeholder="Masukkan NIK">
            </div>
          </div>
          {{-- End Add NIK --}}
            {{-- Add Nama --}}
          <div class="row form-group">
            <div class="col-3">
                <label for="" class="form-label">Nama</label>
            </div>
            <div class="col">
                <input type="text" name="k_nama" required id="" class="form-control" placeholder="Masukkan Nama">
            </div>
          </div>
          {{-- End Add Nama --}}
            {{-- Add Divisi --}}
          <div class="row form-group">
            <div class="col-3">
                <label for="" class="form-label">Divisi</label>
            </div>
            <div class="col">
                <select name="k_divisi" id="selDiv" class="form-control" required>
                    <option value="" selected disabled>Pilih Divisi</option>
                    @foreach ($divisi as $divisi)
                        <option>{{$divisi->div_name}}</option>
                    @endforeach
                </select>
            </div>
          </div>
          {{-- End Add Divisi --}}
        </div>
        {{-- End modal body --}}
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        {{-- End Form --}}
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal --}}


    {{-- Batas Modal Edit--}}
    <!-- Button trigger modal -->

{{-- Modal Edit --}}
  <!-- Modal -->
  <div class="modal fade" id="editKaryawan" tabindex="-1" aria-labelledby="editKaryawanLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editKaryawanLabel">Edit Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method='post' action="{{route('karyawan_update')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
            {{-- Add NIK --}}
          <input type="hidden" name="id" id="k_id">
            <div class="row form-group">
            <div class="col-3">
                <label for="" class="form-label">NIK</label>
            </div>
            <div class="col">
                <input type="text" name="k_nik" id="k_nik" required class="form-control">
            </div>
          </div>
          {{-- End Add NIK --}}
            {{-- Add Nama --}}
          <div class="row form-group">
            <div class="col-3">
                <label for="" class="form-label">Nama</label>
            </div>
            <div class="col">
                <input type="text" name="k_nama" required id="k_nama" class="form-control">
            </div>
          </div>
          {{-- End Add Nama --}}
            {{-- Add Divisi --}}
          <div class="row form-group">
            <div class="col-3">
                <label for="" class="form-label">Divisi</label>
            </div>
            <div class="col">
                <select name="k_divisi" id="selDiv" class="form-control" >
                    <option value="" selected disabled>Pilih Divisi</option>
                    {{-- @foreach ($divisi as $divisi1) --}}
                        {{-- <option>{{$divisi1->div_name}}</option> --}}
                    {{-- @endforeach --}}
                </select>
            </div>
          </div>
          {{-- End Add Divisi --}}
        </div>
        {{-- End modal body --}}
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        {{-- End Form --}}
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal --}}



    {{-- Batas Modal Imprt--}}
    <!-- Button trigger modal -->

{{-- Modal Import --}}
  <!-- Modal -->
  <div class="modal fade" id="importKaryawan" tabindex="-1" aria-labelledby="importKaryawanLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="importKaryawanLabel">Import Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('karyawan_import')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                      <input type="file" class="form-control-file form-control" name="your_file"id="exampleFormControlFile1">
            </div>
            {{-- End modal body --}}
            <div class="modal-footer">
            <button type="submit"class="btn btn-success">Confirm</button>
        </form>
        {{-- End Form --}}
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal --}}
@endsection
@section('javascript')
<script>
    $(document).ready(function() {
        $('#list_karyawan').DataTable();
    });
</script>
    <script>

    function alertMe($id){
        var jqxhr = $.get( "{{route('karyawan_get')}}",
            {'id':$id},
            function(response) {
            // alert(response);
            $.each($.parseJSON(response), function(key, value) {
                $('#k_nik').val(value.k_nik);
                $('#k_nama').val(value.k_nama);
                $('#k_id').val(value.id);
                });
            })
            .fail(function() {
                alert( "error" );
            });
    }
    </script>
@endsection
