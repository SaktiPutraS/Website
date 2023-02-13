@extends('layout.main')
@section('title')
    Inventaris PC
@endsection
@section('main_header')
    Inventaris PC
@endsection
@can('isAdmin')
    @section('header')
        <a href="{{ route('pc_create') }}" class="btn btn-secondary btn-round">Add PC</a>
    @endsection
@endcan
@section('content')

    <div class="card card-shadow">
        <div class="card-shadow">
            <form method="POST" action="{{route('pc_import')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                  <label for="exampleFormControlFile1"><h3>Import File PC</h3></label>
                  <input type="file" class="form-control-file form-control" name="your_file"id="exampleFormControlFile1">
                  <button class="btn btn-success mt-3 btn-block">Confirm</button>
                </div>
              </form>
        </div>
    </div>
    @endsection
