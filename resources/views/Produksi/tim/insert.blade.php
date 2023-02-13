@extends('layout.main')
@section('title')
    Input Panel
@endsection
@section('head')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" --}}
@endsection
@section('main_header')
    Input Panel
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">

            <form method='post' action="{{ route('pro_insertTim') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button accesskey="1" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Main</button>
                    </li>
                </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Menu1 -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabtim" aria-labelledby="pills-home-tab">
                            <hr>
                            <div class="mb-3 row">
                                <label for="no_tim" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control" name="tim_nama" id="tim_nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_cell" class="col-sm-4 col-form-label">Alias</label>
                                <div class="col-sm-8">
                                    <input type="text" required class="form-control" name="tim_alias" id="tim_alias">
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary shadow btn-block" type="submit">Submit</button>
                <button class="btn btn-sm btn-danger shadow btn-block mt-2" type="reset">Reset</button>
            </div>
        </form>
    </div>
        <!-- End Card -->
        <!-- <div class="card">
            <div class="card-body"> -->



    @endsection
    @section('javascript')
        <script>

        </script>
    @endsection
