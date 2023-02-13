@extends('layout.main')
@section('title')
    List Template
@endsection
@section('main_header')
    List Template
@endsection
@section('header')
    <a href="{{ route('template_create') }}" class="btn btn-secondary btn-round">Add Template PC</a>
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h3 class="text-center">Template List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive text-center ">
                <table class="table table-striped table-bordered display nowrap" id="perbaikan_master">
                    <caption>Template</caption>
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Nama Template</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        @foreach ($list as $list)

                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td>{{ $list->template_name }}</td>
                                <td>
                                    <button onClick="showData({{ $list->id }})" type="button" class="btn btn-primary"
                                        data-toggle="modal" data-target="#showData">
                                        Show
                                    </button>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    {{-- Modal untuk show Data --}}
    <div class="modal fade" id="showData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="template_name">Show Data</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="template_mainboard">Mainboard</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_mainboard" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_processor">Processor</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_processor" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_memory">Memory</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_memory" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_hdd">HDD</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_hdd" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_ssd">SSD</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_ssd" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_vga">VGA</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_vga" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_casing">Casing</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_casing" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_keyboard">Keyboard</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_keyboard" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="template_mouse">Mouse</label>
                        </div>
                        <div class="col">
                            <input class="form-control" readonly type="text" value="" id="template_mouse" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        function showData(id) {
            $.get('{{ route('template_data') }}', {
                'id': id
            }, function(response) {
                $.each($.parseJSON(response), function(key, value) {
                    $("#template_name").html(value.template_name);
                    $("#template_mainboard").val(value.template_mainboard);
                    $("#template_processor").val(value.template_processor);
                    $("#template_memory").val(value.template_memory);
                    $("#template_hdd").val(value.template_hdd);
                    $("#template_ssd").val(value.template_ssd);
                    $("#template_vga").val(value.template_vga);
                    $("#template_casing").val(value.template_casing);
                    $("#template_keyboard").val(value.template_keyboard);
                    $("#template_mouse").val(value.template_mouse);
                });
            });
        }
    </script>
@endsection
