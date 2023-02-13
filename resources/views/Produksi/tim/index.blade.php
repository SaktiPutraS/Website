@extends('layout.main')
@section('title')
    Index Tim
@endsection
@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
@endsection
@section('main_header')
    List Tim
@endsection
@section('header')
    <a href="{{ route('pro_in_tim') }}" class="btn btn-secondary btn-round">Add Team</a>
@endsection
@section('content')

    <div class="card card-shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="tim">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alias</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $nom=1;
                        @endphp
                        @foreach ($tim as $tim)
                        <tr>
                            <td>{{$nom++}}</td>
                            <td>{{$tim->tim_nama}}</td>
                            <td>{{$tim->tim_alias}}</td>
                            <td class="text-center">
                                <a href="{{route('pro_edit_tim',$tim->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <a  onclick="return confirm('Yakin ingin menghapus {{ $tim->tim_nama }} ?');" href="{{route('pro_del_tim',$tim->id)}}" class="btn btn-sm btn-danger">Del</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endsection
    @section('javascript')
        <script>
            $(document).ready(function () {
                $('#tim').DataTable();
            } );
        </script>
    @endsection
