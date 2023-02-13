@extends('layout.main')
@section('title')
    Edit {{ $printer->printer_name }}
@endsection
@section('main_header')
    Edit {{ $printer->printer_name }}
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#detail"
                aria-expanded="false" aria-controls="detail">
                Detail
            </button>

            <div class="collapse" id="detail">
                <form method='post' action="{{ route('printer_update') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @if ($errors->any())
                        <p class="alert alert-danger">{{ $errors->first() }}</p>
                    @endif
                <div class="card card-body">
                    <div class="row mb-2 pt-5 px-4">
                        <div class="col-md-3">
                            <label for="printer_no_baru" class="form-label">No Printer/Scanner</label>
                        </div>
                        <div class="col-md">
                            <input readonly class="form-control" type="text" value="{{ $printer->printer_number }}">
                            <input type="hidden" value="{{$printer->printer_unique}}" name="printer_unique">
                            <input type="hidden" value="edit" name="type">
                        </div>
                    </div>
                    <div class="row mb-2 px-4">
                        <div class="col-md-3">
                            <label for="printer_price" class="form-label">Harga</label>
                        </div>
                        <div class="col-md">
                            <input name="printer_price" class="form-control" type="text"
                                value="{{ $printer->printer_price }}">
                        </div>
                    </div>
                        <div class="row mb-2 px-4">
                            <div class="col-md-3">
                                <label for="printer_energy">Daya</label>
                            </div>
                            <div class="col-md">
                                <div class="input-group">
                                    <input required type="number" class="form-control" value="{{$printer->printer_energy}}" name="printer_energy">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Watt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row mb-2 px-4">
                        <div class="col-md-3">
                            <label for="printer_condition">Kondisi</label>
                        </div>
                        <div class="col-md">
                            <select required name="printer_condition" class="col-md custom-select form-control">
                                <option>{{ $printer->printer_condition }}</option>
                                <option>Performa Sempurna</option>
                                <option>Performa Bagus</option>
                                <option>Performa Cukup</option>
                                <option>Performa Kurang</option>
                                <option>Perlu Perbaikan</option>
                                <option>Rusak</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2 px-4">
                        <div class="col-md-3">
                            <label for="printer_location" class="form-label">Lokasi</label>
                        </div>
                        <div class="col-md">
                            <select name="printer_location" class="custom-select col-md form-control">
                                <option selected>{{ $printer->printer_location }}</option>
                                <option>HO LT-1</option>
                                <option>HO LT-2F</option>
                                <option>HO LT-2J</option>
                                <option>HO LT-3F</option>
                                <option>HO LT-3J</option>
                                <option>HO LT-4F</option>
                                <option>HO LT-4J</option>
                                <option>HO LT-4JA</option>
                                <option>LGK LT-1</option>
                                <option>LGK LT-2</option>
                                <option>LGK LT-3</option>
                                <option>LGK LT-4</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2 px-4">
                        <div class="col-md-3">
                            <label for="printer_kind" class="form-label">Jenis</label>
                        </div>
                        <div class="col-md">
                            <select name="printer_kind" class="custom-select col-md form-control">
                                <option selected>{{ $printer->printer_kind }}</option>
                                <option>Printer</option>
                                <option>Scanner</option>
                                <option>Printer dan Scanner</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2 px-4">
                        <div class="col-md-3">
                            <label for="printer_type" class="form-label">Tipe</label>
                        </div>
                        <div class="col-md">
                            <select name="printer_type" class="custom-select col-md form-control">
                                <option selected>{{ $printer->printer_type }}</option>
                                <option>Laset Jet</option>
                                <option>Dot Matrix</option>
                                <option>Plotter</option>
                                <option>Inkjet</option>
                                <option> All in One</option>
                                <option>Grafir</option>
                                <option>Mesin Barcode</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
            {{-- Pembatas Tinta --}}
            <button class="btn btn-warning btn-block" type="button" data-toggle="collapse" data-target="#ink"
                aria-expanded="false" aria-controls="ink">
                Tinta
            </button>
            <div class="collapse card-body card" id="ink">
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
                        <input required type="text" class="col-md form-control" name="printer_name" readonly
                            value="{{ $printer->printer_name }}">
                    </div>
                    <div class="form-group row">
                        <label for="printer_unique" class="col-md-3">Printer IDr</label>
                        <input required type="text" class="col-md form-control" name="printer_unique" readonly
                            value="{{ $printer->printer_unique }}">
                    </div>
                    <div class="form-group row">
                        <label for="ink_unique" class="col-md-3">Nama Tinta</label>
                        <select name="ink_unique" class="col-md custom-select form-control">
                      <option disabled selected value="">Pilih Tinta</option>
                            @foreach ($ink as $ink)
                                <option value="{{ $ink->ink_unique }}">{{ $ink->ink_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
                        <?php $nomor = 1; ?>
                        @foreach ($connector as $connector)
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td>{{ $connector->printer_name }}</td>
                                <td>{{ $connector->ink_name }}</td>
                                <td>{{ $connector->ink_qty }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
