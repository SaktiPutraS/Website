@extends('layout.main')
@section('title')
    Daftar Tim
@endsection
@section('header')
    {{-- <a href="{{ route('ticket_export') }}" class="btn btn-secondary btn-round">Report</a> --}}
    <a href="{{ route('pn_00_create') }}" class="btn btn-secondary btn-round">Tambah baru</a>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#exampleModal"> Import Tim  </button>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Tim</h3>
        </div>
        <div class="card-body">
            <table class="table table-border" id="tim">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Nama Panggilan</th>
                        <th>Alias</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomor=1
                    @endphp
                    @foreach ( $list as $list)
                        <tr>
                            <td>
                                @php
                                    echo $nomor++;
                                @endphp
                            </td>
                            <td>
                                {{$list->Fullname}}
                            </td>
                            <td>
                                {{$list->Nickname}}
                            </td>
                            <td>
                                {{$list->Alias}}
                            </td>
                            <td>
                                <div class="form-button-action">
                                    <form method="get" action="{{route('pn_00_edit',$list->id)}}">
                                        @csrf
                                        @method('get')
                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="{{route('pn_00_delete',$list->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger delete-button" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import Tim</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('pn_00_import')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="file">File</label>
                      <input type="file" class="form-control" id="file" name="file">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection
@section('javascript')
<script>
    $(document).ready( function () {
    $('#tim').DataTable();
} );
</script>
<script>
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
      button.addEventListener('click', function(event) {
        if (!confirm('Are you sure you want to delete this item?')) {
          event.preventDefault();
        }
      });
    });
    </script>
@endsection
