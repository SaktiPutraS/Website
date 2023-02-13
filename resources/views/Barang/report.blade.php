@extends('layout.main')
@section('title')
List Permintaan Barang
    @endsection
    @section('main_header')
    List Permintaan Barang
@endsection
@section('header')
    {{-- <a href="{{ route('hard_fix_report') }}" class="btn btn-secondary btn-round">Report</a> --}}
    {{-- <a href="{{ route('wh_create') }}" class="btn btn-secondary btn-round">Add Gudang</a> --}}
    <a href="{{ route('ga_balance_export') }}" class="btn btn-secondary btn-round">Export Excel</a>
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h3 class="text-center">Permintaan barang</h3>
        </div>
        <div class="card-body">
            <div class="text-center ">
                <table class="table table-striped table-bordered no-warp" id="listpermintaan">
                    <caption>List Permintaan</caption>
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Nama Pengaju</th>
                            <th>Divisi</th>
                            <th>Tanggal</th>
                            <th>Alasan</th>
                            <th>Status</th>
                            <th>Gudang</th>
                            <th>Detail</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        @foreach ($rep as $rep)
                            <?php
                                if ($rep->status_pengajuan=="Tolak") {
                                    $class='bg-warning';
                                } elseif ($rep->status_pengajuan=="Terima") {
                                    $class='bg-success';
                                    # code...
                                }else {
                                    $class='';
                                }

                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td>{{$rep->k_nama}}</td>
                                <td>{{$rep->div_name}}</td>
                                <td>{{$rep->tgl_pengajuan}}</td>
                                <td>{{$rep->alasan_pengajuan}}</td>
                                <td class="{{$class}}">{{$rep->status_pengajuan}}</td>
                                <td>{{$rep->nama_gudang}}</td>
                                <td><!-- Button trigger modal -->
                                    @if ($rep->status_pengajuan=='Request')
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModal" onClick="request_data('{{ $rep->id_pengajuan }}')">
                                       Detail
                                      </button>
                                      @else
                                      <button type="button" class="btn btn-success">Done</button>
                                    @endif
                                    </td>
                                {{-- <td>Aksi</td> --}}
                            </tr>
                            <?php $nomor++; ?>
                        @endforeach
                        {{-- @endcan --}}
                    </tbody>

                </table>
            </div>
        </div>

    </div>


  <!-- Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">Barang yang diminta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <table id="showdata" class="table">
                <thead>
                    <th>Nama</th>
                    <th>Qty</th>
                </thead>
                <tbody>
                    <div id="addhere"></div>
                </tbody>
            </table>
            <form action="{{ route('reqitem_update') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
            <div class="form-group">
                <input type="hidden" value="" id="id_pengajuan" name="id_pengajuan">
                <label class="form-label">Status</label>
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="status" value="Terima" required class="selectgroup-input">
                        <span class="selectgroup-button">Terima</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="status" value="Tolak" class="selectgroup-input">
                        <span class="selectgroup-button">Tolak</span>
                    </label>
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

    <script>
        $(document).ready(function() {
    $('#listpermintaan').DataTable();
} );
    </script>
    <script>
        function request_data(clicked_id) {
            $.get('{{ route('reqitem_getData') }}', {
                'passdata': clicked_id
            }, function(response) {
                    $("#showdata tbody tr").remove();
                    htmldata='';
                    id='';
                $.each($.parseJSON(response), function(key, value) {
                    htmldata += '<tr><td>' + value.nama_barang +
                        '</td><td>'+value.qty+'</td></tr>';
                        id=value.id_pengajuan;
                });
                $("#showdata").append(htmldata);
                $("#id_pengajuan").val(id);
            });
        }
    </script>

@endsection
