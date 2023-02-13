@extends('layout.main')
@section('title')
    Request Tinta by Printer - {{ $printer->printer_name }}
@endsection
@section('main_header')
    Request Tinta by Printer - {{ $printer->printer_name }}
@endsection
@section('content')

    <div class="card card-shadow">
        <div class="card-body">
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
                            <td> <button id="{{ $connector->ink_unique }}req" ink_code="{{ $connector->ink_code }}"
                                ink_name="{{ $connector->ink_name }}" ink_qty="{{ $connector->ink_qty }}"
                                ink_type="Request" onClick="request_data('{{ $connector->ink_unique }}')"
                                ink_unique={{ $connector->ink_unique }} type="button"
                                class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#request_modal">
                                Request
                            </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="request_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" id="header"></div>
                <div class="modal-body">
                    <form action="{{ route('ink_update') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @if ($errors->any())
                            <p class="alert alert-danger">{{ $errors->first() }}</p>
                        @endif
                        <div class="form-group row">
                            <div class="col">
                                <label for="type" class="form-label">Input Type</label>
                                <input type="text" name="type" id="edit" value="update" readonly class="form-control" />
                            </div>
                            <div class="col">
                                <label for="process" class="form-label">Input Process</label>
                                <input type="text" name="process" id="process" value="" readonly class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="lokasi">Printer</label>
                            <div class="col-md" id="ink_printer_unique">
                                <input type="text" name="ink_printer_unique" id="ink_printer_unique" value=" {{ $printer->printer_unique }}" readonly
                                class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="ink_unique" class="form-label">Ink Unique</label>
                                <input type="text" name="ink_unique" id="ink_unique" value="" readonly
                                    class="form-control" />
                            </div>
                            <div class="col">
                                <label for="ink_user" class="form-label col-md-3">Pengaju</label>
                                <input type="text" name="ink_user" id="ink_user" value="" class="form-control col-md" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="ink_code" class="form-label">Kode Tinta</label>
                                <input type="text" name="ink_code" id="ink_code" readonly class="form-control" />
                            </div>
                            <div class="col">
                                <label for="ink_name" class="form-label col-md-3">Nama Tinta</label>
                                <input type="text" name="ink_name" id="ink_name" readonly class="form-control col-md" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="ink_qty_old" class="form-label">Saat Ini</label>
                                <input type="text" name="ink_qty_old" id="ink_qty_old" readonly
                                    class="form-control col-md" />
                            </div>
                            <div class="col">
                                <label for="ink_qty_new" class="form-label">Permintaan</label>
                                <input type="number" name="ink_qty_new" id="ink_qty_new" min="1"
                                    class="form-control col-md" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ink_desc" class="form-label col-md-3">Alasan Permintaan</label>
                            <input type="text" name="ink_desc" class="form-control col-md" />
                        </div>
                        <div class="form-group row">
                            <label for="ink_status" class="form-label col-md-3"> Ink Status</label>
                            <input type="text" name="ink_status" value="Request" readonly class="form-control col-md" />
                        </div>
                        <button type="submit" class="btn btn-primary btn_block">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        function request_data(clicked_id) {
            let clicked = clicked_id + "req";
            let ink_unique = document.getElementById(clicked).getAttribute("ink_unique");
            let ink_code = document.getElementById(clicked).getAttribute("ink_code");
            let ink_name = document.getElementById(clicked).getAttribute("ink_name");
            let ink_qty = document.getElementById(clicked).getAttribute("ink_qty");
            let ink_type = document.getElementById(clicked).getAttribute("ink_type");
            $("#ink_unique").val(ink_unique);
            $("#ink_code").val(ink_code);
            $("#ink_name").val(ink_name);
            $("#ink_qty_old").val(ink_qty);
            $("#ink_type").val(ink_type);
            $("#process").val("min");
            $("#header").html("<h3>Request</h3>");
            $("#ink_qty_new").attr({
                max: ink_qty
            });

        }
    </script>
@endsection
