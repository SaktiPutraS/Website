@extends('layout.main')
@section('head')
    <script src="{{ asset('plugins/accountingnumber/accounting.min.js') }}"></script>
@endsection
@section('title')
    Report Laptop
@endsection
@section('main_header')
    Report {{ $list->laptop_user }} - {{ $list->laptop_name }}
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h4 class="text-center">Report Laptop</h4>
        </div>
        <div class="card-body">
            <div id="Detail_Data">
                <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#DetailSpec"
                    aria-expanded="false" aria-controls="DetailSpec">
                    Detail
                </button>
                <div class="collapse" id="DetailSpec">
                    <div class="card card-body">
                        <h1 class="text-center">Laptop Detail - {{ $list->laptop_name }} </h1>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_number" class="form-label">No Laptop</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_number }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_name" class="form-label">Merk</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_user" class="form-label">User</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_user }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_tanggal" class="form-label">Tanggal Beli</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_buy_date }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_harga" class="form-label">Harga</label>
                            </div>
                            <div class="col-md">
                                <input readonly id="harga" class="form-control" type="text"
                                    value="{{ $list->laptop_price }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_location" class="form-label">Status</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_status }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_location" class="form-label">Kondisi</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_condition }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_processor" class="form-label">Processor</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_processor }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_vga" class="form-label">VGA</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_vga }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_ram" class="form-label">RAM</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_ram }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_hdd" class="form-label">HDD</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_hdd }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_ssd" class="form-label">SSD</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_ssd }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_os" class="form-label">OS</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text" value="{{ $list->laptop_os }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="laptop_serial_number" class="form-label">SN</label>
                            </div>
                            <div class="col-md">
                                <input readonly class="form-control" type="text"
                                    value="{{ $list->laptop_serial_number }}">
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
            <div id="Update_Data">
                <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#Update"
                    aria-expanded="false" aria-controls="Update">
                    Update Data
                </button>
                <div class="collapse" id="Update">
                    <div class="card card-body">
                        <table class="table table-stripped table-responsive">
                            <thead class="table-primary">
                                <tr>
                                    <th>Laptop Name</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Condition</th>
                                    <th>Processor</th>
                                    <th>VGA</th>
                                    <th>RAM</th>
                                    <th>HDD</th>
                                    <th>SSD</th>
                                    <th>OS</th>
                                    <th>Tgl Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($report as $report)


                                    <tr>
                                        <td row="2">{{ $report->laptop_name }}</td>
                                        <td>{{ $report->laptop_old_user }}</td>
                                        <td>{{ $report->laptop_old_status }}</td>
                                        <td>{{ $report->laptop_old_condition }}</td>
                                        <td>{{ $report->laptop_old_processor }}</td>
                                        <td>{{ $report->laptop_old_vga }}</td>
                                        <td>{{ $report->laptop_old_ram }}</td>
                                        <td>{{ $report->laptop_old_hdd }}</td>
                                        <td>{{ $report->laptop_old_ssd }}</td>
                                        <td>{{ $report->laptop_old_os }}</td>

                                        <td row="2" class="align-middle">{{ $report->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><i class="fas fa-angle-double-right"></i></td>
                                        <td>{{ $report->laptop_new_user }}</td>
                                        <td>{{ $report->laptop_new_status }}</td>
                                        <td>{{ $report->laptop_new_condition }}</td>
                                        <td>{{ $report->laptop_new_processor }}</td>
                                        <td>{{ $report->laptop_new_vga }}</td>
                                        <td>{{ $report->laptop_new_ram }}</td>
                                        <td>{{ $report->laptop_new_hdd }}</td>
                                        <td>{{ $report->laptop_new_ssd }}</td>
                                        <td>{{ $report->laptop_new_os }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

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
                                    <td>{{$nomor++}}</td>
                                    <td>{{$fix->hard_fix_number}}</td>
                                    <td>{{$fix->hard_fix_kind}}</td>
                                    <td>{{$fix->hard_fix_desc}}</td>
                                    <td name="harga">{{$fix->hard_fix_price}}</td>
                                    <td>{{$fix->hard_fix_vendor}}</td>
                                    <td>{{$fix->created_at}}</td>
                                    <td><a target="_BLANK" href="{{ route('hard_fix_print', $fix->hard_fix_general_unique) }}">Print</a></td>
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
