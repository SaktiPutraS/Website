@extends('layout.main')
@section('title')
    Permintaan Hardware Edit
@endsection
@section('main_header')
    Permintaan Hardware Edit
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            <form method='post' action="{{ route('hard_req_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <div class="form-group input-right">
                    <label for="Tanggal">Tanggal</label>
                    <input readonly name="trDate" type="text" value="{{ date('d/m/Y') }}" class="form-control">
                </div>
                <div class="form-group input-right">
                    <label for="type">Tipe</label>
                    <input readonly name="type" type="text" value="edit" class="form-control">
                </div>
                <div class="form-group input-right">
                    <label for="hard_req_unique">Tipe</label>
                    <input readonly name="hard_req_unique" type="text" value="{{$hardReq->hard_req_unique}}" class="form-control">
                </div>
                <div class="form-group input-right">
                    <label for="hard_req_referensi">Nomor Referensi</label>
                    <input  readonly name="hard_req_referensi" type="text" value="{{$hardReq->hard_req_referensi}}" class="form-control" data-toggle="tooltip"
                        data-placement="top" title="Nomor Referensi Perbaikan Hardware">
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_user">Nama Pengaju</label>
                            <input type="text" readonly value="{{$hardReq->hard_req_user}}" class="form-control" name="hard_req_user">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_divisi">Divisi</label>
                            <input type="text" readonly value="{{$hardReq->hard_req_divisi}}" class="form-control" name="hard_req_divisi">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" readonly value="{{$hardReq->hard_req_location}}" class="form-control" name="hard_req_location">
                </div>
                <div class="form-group">
                    <label for="hard_req_name">Laptop/PC</label>
                    <input type="text" readonly  placeholder="Merk - Specs" class="form-control" name="hard_req_name"
                        id="hard_req_name" value="{{$hardReq->hard_req_name}}">
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_mainboard">Mainboard</label>
                            <input type="text" readonly  placeholder="Merk - Specs" class="form-control" name="hard_req_mainboard"
                                id="hard_req_mainboard" value="{{$hardReq->hard_req_mainboard}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_processor">Processor</label>
                            <input type="text" readonly  placeholder="Merk - Specs" class="form-control" name="hard_req_processor"
                                id="hard_req_processor" value="{{$hardReq->hard_req_processor}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="hard_req_memory">Memory</label>
                            <input type="text" readonly  placeholder="Merk - Specs" class="form-control" name="hard_req_memory"
                                id="hard_req_memory" value="{{$hardReq->hard_req_memory}}">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="hard_req_hdd">Hard Disk</label>
                            <input type="text"  readonly placeholder="Merk - Specs" class="form-control" name="hard_req_hdd"
                                id="hard_req_hdd" value="{{$hardReq->hard_req_hdd}}">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="hard_req_ssd">SSD</label>
                            <input type="text" readonly  placeholder="Merk - Specs" class="form-control" name="hard_req_ssd"
                                id="hard_req_ssd"value="{{$hardReq->hard_req_ssd}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_vga">VGA</label>
                            <input type="text"  readonly placeholder="Merk - Specs" class="form-control" name="hard_req_vga"
                                id="hard_req_vga"value="{{$hardReq->hard_req_vga}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_casing">Casing</label>
                            <input type="text"  readonly placeholder="Merk - Specs" class="form-control" name="hard_req_casing"
                                id="hard_req_casing"value="{{$hardReq->hard_req_casing}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_keyboard">Keyboard</label>
                            <input type="text"  readonly placeholder="Merk - Specs" class="form-control" name="hard_req_keyboard"
                                id="hard_req_keyboard"value="{{$hardReq->hard_req_keyboard}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_mouse">Mouse</label>
                            <input type="text" readonly  placeholder="Merk - Specs" class="form-control" name="hard_req_mouse"
                                id="hard_req_mouse"value="{{$hardReq->hard_req_mouse}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_monitor">Monitor</label>
                            <input type="text"  readonly placeholder="Merk - Specs" class="form-control" name="hard_req_monitor"value="{{$hardReq->hard_req_monitor}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="hard_req_printer">Printer</label>
                            <input type="text" readonly  placeholder="Merk - Specs" class="form-control" name="hard_req_printer"value="{{$hardReq->hard_req_printer}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hard_req_other">Permintaan Lainnya</label>
                    <textarea class="form-control" readonly  name="hard_req_other">{{$hardReq->hard_req_other}}</textarea>
                </div>
                <div class="form-group">
                    <label for="hard_req_alasan">Alasan Permintaan</label>
                    <textarea  readonly required class="form-control" name="hard_req_alasan">{{$hardReq->hard_req_alasan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="hard_req_status" class="col-md-3">Status</label>
                    <select class="custom-select col-md" name="hard_req_status">

                        <option>{{ $hardReq->hard_req_status }}</option>
                        <option value="Progress">Progress</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Batal">Batal</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-shadow">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection
