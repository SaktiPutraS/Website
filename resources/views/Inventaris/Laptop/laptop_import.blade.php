@extends('layout.main')
@section('title')
    Inventaris Laptop
@endsection
@section('main_header')
    Inventaris Laptop
@endsection
@can('isAdmin')
    @section('header')
    <a href="{{ route('laptop_create') }}" class="btn btn-secondary btn-round">Add Laptop</a>
    @endsection
@endcan
@section('content')

    <div class="card card-shadow">
        <div class="card-shadow">
            <form method="POST" action="{{route('laptop_import')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                  <label for="exampleFormControlFile1"><h3>Import File Laptop</h3></label>
                  <input type="file" class="form-control-file form-control" name="your_file"id="exampleFormControlFile1">
                  <button class="btn btn-success mt-3 btn-block">Confirm</button>
                </div>
              </form>
        </div>
    </div>
    @endsection
