@extends('layout.main')
@section('title')
    Permintaan Software - {{$softReq->soft_req_number }}
@endsection
@section('main_header')
    Permintaan Software - {{$softReq->soft_req_number }}
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">
            <form method='post' action="{{route('soft_req_update')}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <div class="form-group input-right">
                    <label for="Tanggal">Tanggal</label>
                    <input readonly name="soft_req_date" type="text" class="form-control"value="{{$softReq->soft_req_date }}">
                </div>
                <div class="form-group">
                    <label for="type">Unique Number</label>
                    <input class="form-control"readonly name="soft_req_unique" type="text" value="{{$softReq->soft_req_unique}}">
                </div>
                <div class="form-group">
                    <label for="type">Tipe Input</label>
                    <input class="form-control"readonly name="type" type="text" value="edit">
                </div>
                <div class="form-row">
                    <div class="col">

                        <div class="form-group">
                            <label for="soft_req_user">Nama Pengaju</label>
                            <input type="text" value="{{$softReq->soft_req_user }}" class="form-control" name="soft_req_user">
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="soft_req_divisi">Divisi</label>
                            <input type="text" value="{{$softReq->soft_req_divisi }}" class="form-control" name="soft_req_divisi">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="soft_req_location">Lokasi</label>
                    <input type="text" value="{{$softReq->soft_req_location }}" class="form-control" name="soft_req_location">
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="soft_req_email">Email</label>
                            <input type="email" value="{{$softReq->soft_req_email }}"  placeholder="example@ptduta.com" class="form-control"
                                name="soft_req_email">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="soft_req_email_forward">Email Forward</label>
                            <input value="{{$softReq->soft_req_email_forward }}" type="text" placeholder="example1@ptduta.com ; example2@ptduta.com"
                                class="form-control" name="soft_req_email_forward">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="soft_req_akses_fina">Akses Fina - Nama User</label>
                            <input value="{{$softReq->soft_req_akses_fina }}" type="text" class="form-control"
                                name="soft_req_akses_fina">
                            </div>
                        </div>
                        <div class="col-md-2 ml-auto mr-auto">
                            <div class="form-group">
                                <label class="form-label" for="soft_req_akses_server">Akses Server</label>
                                <input value="{{$softReq->soft_req_akses_server }}" readonly type="text" class="form-control"
                                    name="soft_req_akses_server">
                                </div>
                            </div>
                            <div class="col-md-2 ml-auto mr-auto">
                                <div class="form-group">
                                    <label class="form-label" for="soft_req_akses_internet">Akses Internet</label>
                                    <input value="{{$softReq->soft_req_akses_internet }}" readonly type="text" class="form-control" name="soft_req_akses_internet">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="soft_req_other">Permintaan Lainnya</label>
                    <textarea class="form-control" name="soft_req_other">{{$softReq->soft_req_other}} </textarea>
                </div>
                <div class="form-group">
                    <label for="soft_req_reason">Alasan Permintaan</label>
                    <textarea required class="form-control" name="soft_req_reason">{{$softReq->soft_req_reason}} </textarea>
                </div>
                <div class="form-group">
                    <label for="soft_req_status">Status</label>
                    <select required name="soft_req_status" id="soft_req_status" class="form-control custom-select" style="width:100%">
                        <option value="{{$softReq->soft_req_status }}">{{$softReq->soft_req_status }}</option>
                        <option  value="Progress">Progress</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Batal">Batal</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
            $("#soft_req_divisi").select2();
            $("#soft_req_location").select2();
        });
    </script>
@endsection
