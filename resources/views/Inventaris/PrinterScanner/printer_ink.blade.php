@extends('layout.main')
@section('title')
    Printer dan Tinta
@endsection
@section('main_header')
    Printer dan Tinta
@endsection
@section('content')

    <div class="card card-shadow">
        <div class="card-body">

            <form method='post' action="{{ route('printer_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <div class="form-group row">
                    <label for="type" class="col-md-3">Tipe Input</label>
                    <input required type="text" class="col-md form-control" name="type" readonly value="ink">
                </div>
                <div class="form-group row">
                    <label for="printer_name" class="col-md-3">Nama Printer</label>
                    <input required type="text" class="col-md form-control" name="printer_name" readonly value="{{$printer->printer_name}}">
                </div>
                <div class="form-group row">
                    <label for="printer_unique" class="col-md-3">Printer ID</label>
                    <input required type="text" class="col-md form-control" name="printer_unique" readonly value="{{$printer->printer_unique}}">
                </div>
                <div class="form-group row">
                    <label for="ink_unique" class="col-md-3">Nama Tinta</label>
                    <select name="ink_unique" class="col-md custom-select form-control">
                        <option></option>
                        @foreach ($ink as $ink)
                        <option value="{{$ink->ink_unique}}">{{$ink->ink_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                </div>
            </form>

            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Printer</th>
                        <th>Tinta</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1 ?>
                    @foreach ($connector as $connector)
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td>{{$connector->printer_name}}</td>
                            <td>{{$connector->ink_name}}</td>
                            <td>{{$connector->ink_qty}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>

@endsection
