@extends('layout.main')
@section('head')
    <script src="{{ asset('plugins/accountingnumber/accounting.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

@endsection
@section('title')
    Report Printer
@endsection
@section('main_header')
    Report - {{ $list->printer_name }}
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h4 class="text-center">Report Printer</h4>
        </div>
        <div class="card-body">
            <div id="Detail_Data">
                <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#DetailSpec"
                    aria-expanded="false" aria-controls="DetailSpec">
                    Detail
                </button>
                <div class="collapse" id="DetailSpec">
                    <div class="card card-body">
                        <h1 class="text-center">Printer Detail - {{ $list->printer_name }} </h1>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_number" class="form-label">No Printer</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->printer_number }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_serial_number" class="form-label">Serial Number</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text"
                                    value="{{ $list->printer_serial_number }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_tanggal" class="form-label">Tanggal Beli</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->printer_buy_date }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_harga" class="form-label">Harga</label>
                            </div>
                            <div class="col-md">
                                <input readonly id="harga" class="form-control" type="text"
                                    value="{{ $list->printer_price }}">
                            </div>
                        </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="printer_energy">Daya</label>
                                </div>
                                <div class="col-md">
                                    <div class="input-group">
                                        <input required type="number" class="form-control" readonly value="{{$list->printer_energy}}" name="printer_energy">
                                        <div class="input-group-append">
                                            <span class="input-group-text">Watt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_location" class="form-label">Lokasi</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->printer_location }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_location" class="form-label">Kondisi</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->printer_condition }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_processor" class="form-label">Jenis</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->printer_kind }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="printer_vga" class="form-label">Tipe</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->printer_type }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="created_at" class="form-label">Data Awal</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->created_at }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="updated_at" class="form-label">Update Terakhir</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->updated_at }}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="Perbaikan_Data">
                <button class="btn btn-warning btn-block" type="button" data-toggle="collapse" data-target="#perbaikan"
                    aria-expanded="false" aria-controls="perbaikan">
                    Perbaikan Data
                </button>
                <div class="collapse" id="perbaikan">
                    <div class="card card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Perbaikan</th>
                                    <th>Jenis Perbaikan</th>
                                    <th>Detail</th>
                                    <th>Harga</th>
                                    <th>Vendor</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor=1;?>
                                @foreach ($fix as $fix)
                                    <tr>
                                        <td>{{ $nomor++ }}</td>
                                        <td>{{ $fix->hard_fix_number }}</td>
                                        <td>{{ $fix->hard_fix_kind }}</td>
                                        <td>{{ $fix->hard_fix_desc }}</td>
                                        <td name="harga">{{ $fix->hard_fix_price }}</td>
                                        <td>{{ $fix->hard_fix_vendor }}</td>
                                        <td>{{ $fix->created_at }}</td>
                                        <td><a target="_BLANK"
                                                href="{{ route('hard_fix_print', $fix->hard_fix_general_unique) }}">Print</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="Report_tinta">
                <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#tintaD"
                    aria-expanded="false" aria-controls="tinta">
                    Penggunaan Tinta
                </button>
                <div class="collapse" id="tintaD">
                    <div class="card card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tinta</th>
                                    <th>Pengaju</th>
                                    <th>Jumlah</th>
                                    <th>Total Print</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1; ?>
                                @foreach ($connector as $connector)
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td>{{ $connector->ink_name }}</td>
                                        <td>{{ $connector->ink_user }}</td>
                                        <td>{{ $connector->ink_qty_old - $connector->ink_qty_new }}</td>
                                        <td>{{ $connector->print_total }}</td>
                                        <td>{{ $connector->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('javascript')

        <script>
            let loops = document.getElementsByName("harga").length;
            for (let i = 0; i < loops; i++) {
                let hargaid = document.getElementsByName('harga')[i].innerText;
                let convert = accounting.formatMoney(hargaid, {
                    symbol: "Rp. ",
                    thousand: ".",
                    decimal: ",",
                });
                document.getElementsByName('harga')[i].innerText = convert;
            }
        </script>
    @endsection
