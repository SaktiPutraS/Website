@extends('layout.main')
@section('title')
    Template PC
@endsection
@section('main_header')
    Template PC
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            <form method='post' action="{{route('template_update')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif

                <div class="form-group">
                    <label for="type">Tipe Input</label>
                    <input  type="text" readonly value="create" class="form-control" name="type">
                </div>
                <div class="form-group">
                    <label for="template_name">Nama Template</label>
                    <input  type="text" value="" class="form-control" name="template_name">
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="template_mainboard">Mainboard</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control" name="template_mainboard">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="template_processor">Processor</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control"
                                name="template_processor">
                        </div>
                    </div>
                </div>
                <div class="form row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="template_memory">Memory</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control" name="template_memory">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="template_hdd">Hard Disk</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control"
                                name="template_hdd">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="template_hdd">SSD</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control"
                                name="template_ssd">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="template_vga">VGA</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control" name="template_vga">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="template_casing">Casing</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control"
                                name="template_casing">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="template_keyboard">Keyboard</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control" name="template_keyboard">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="template_mouse">Mouse</label>
                            <input type="text" placeholder="Merk - Specs" class="form-control"
                                name="template_mouse">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection
