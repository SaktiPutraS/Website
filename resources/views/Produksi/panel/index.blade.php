@extends('layout.main')
@section('title')
    Index Panel
@endsection
@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
@endsection
@section('main_header')
    List Panel
@endsection
@section('header')
    <a href="{{ route('pro_in_panel') }}" class="btn btn-secondary btn-round">Add Panel</a>
    <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#importModal">
        Import
      </button>
    <a href="{{ route('pro_export') }}" class="btn btn-success btn-round">Export Excel</a>
@endsection
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-shadow">
            <div class="card-body bg-warning">
                <strong>{{$Tunda}} Tunda</strong>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card card-shadow">
            <div class="card-body bg-light">
                <strong>{{$Progress}} Progress</strong>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card card-shadow">
            <div class="card-body bg-success">
                <strong>{{$Selesai}} Selesai</strong>
            </div>
        </div>
    </div>
</div>
    <div class="card card-shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="panel">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>No Seri</th>
                            <th>Nama Panel</th>
                            <th>Nama Proyek</th>
                            <th>Status Komponen</th>
                            <th>Status Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $nom=1;
                        @endphp
                        @foreach ($panel as $panel)
                        <tr>
                            <td>{{$nom++}}</td>
                            <td>{{$panel->panel_seri}}</td>
                            <td>{{$panel->panel_nama}}</td>
                            <td>{{$panel->panel_proyek}}</td>
                            <td>{{$panel->panel_status_komponen}}</td>
                            <td>{{$panel->panel_status_pekerjaan}}</td>
                            <td><a class="btn btn-sm btn-success" href="{{route('pro_edit',[$panel->panel_seri])}}">Edit</a>
                            <a  onclick="return confirm('Are you sure to delete {{ $panel->panel_seri }} ?');" class="btn btn-sm btn-danger" href="{{route('pro_delete',[$panel->panel_seri])}}">Del</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Modal Import --}}
        <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="importModalLabel">Import</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('pro_import')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group">
                          <label for="exampleFormControlFile1"><h3>Import File Panel</h3></label>
                          <a class="btn btn-sm btn-primary btn-border" href="{{route('download_file','template_panel.xlsx')}}">Download Template</a>
                          <input type="file" class="form-control-file form-control" name="your_file"id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success mt-3 btn-block">Confirm</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
          {{-- End modal Import --}}
    @endsection
    @section('javascript')
        <script>
            $(document).ready(function () {
                $('#panel').DataTable();
            } );
        </script>
    @endsection
