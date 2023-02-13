@extends('layout.main')
@section('title')
    Edit Panel ENG - {{$list->nomor_seri_panel}}
@endsection
@section('head')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- <link rel="stylesheet" href="{{asset('css/loading-1.css')}}"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" --}}
<style>

    button#floating {
    position: fixed;
    right: 35px;
    bottom: 10px;
    border-radius: 50%;
    width: 75px;
    height: 75px;
    animation: bounce 0.8s;
  animation-direction: alternate;
  animation-iteration-count: infinite;
}

@keyframes bounce {
  0% { transform: translateY(0); }
  100% { transform: translateY(-30px); }
}
</style>
@endsection
@section('main_header')
    Edit Panel - {{$list->nomor_seri_panel}}
@endsection
@section('content')
{{-- <div class="loading">
    <div class="spinner"></div>
  </div> --}}

    <div class="card card-shadow">

        <div class="card-body">

            <form method='post' action="{{ route('pn_04_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <input type="hidden" name="id" value="{{$list->id}}">
                <input type="hidden" name="id_panel" value="{{$list->id_panel}}">
                <hr>
                <h2>Panel</h2>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="namaProyek">Nama Customer</label>
                                <input name="nama_customer" readonly type="text" class="form-control" id="namaCustomer" placeholder="Enter Nama Customer" value="{{$list->nama_customer}}" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="namaProyek">Nama Proyek</label>
                                <input name="nama_proyek" readonly type="text" class="form-control" id="namaProyek" placeholder="Enter Nama Proyek" value="{{$list->nama_proyek}}" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="namaPanel">Nama Panel</label>
                                <input name="nama_panel"readonly type="text" class="form-control" id="namaPanel" placeholder="Enter Nama Panel" value="{{$list->nama_panel}}" >
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h2>Detail</h2>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="capacity">Capacity <span class="text-red">*Wajib</span></label>
                            <input type="number" class="form-control" name="capacity" id="capacity" placeholder="Enter capacity" value="{{$list->capacity}}" >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="voltage">Voltage <span class="text-red">*Wajib</span></label>
                            <input type="number" class="form-control" name="voltage" id="voltage" placeholder="Enter voltage" value="{{$list->voltage}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ampere">Ampere <span class="text-red">*Wajib</span></label>
                            <input type="number" class="form-control" name="ampere" id="ampere" placeholder="Enter ampere" value="{{$list->ampere}}" >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phasa_3">3 Phase <span class="text-red">*Wajib</span></label>
                            <input type="number" class="form-control" id="phase_3" name="phasa_3" placeholder="Enter 3 phasa" value="{{$list->phasa_3}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ip">IP <span class="text-red">*Wajib</span></label>
                            <input type="number" class="form-control" id="ip" name="ip" placeholder="Enter IP" value="{{$list->ip}}" >
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="frekuensi">Frekuensi <span class="text-red">*Wajib</span></label>
                            <input type="number" class="form-control" id="frekuensi" name="frekuensi" value="{{$list->frekuensi}}" placeholder="Enter frekuensi">
                          </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="frekuensi">Name Plate</label>
                    <hr>
                    <span for="frekuensi">FORMAT : Nama;jumlah;satuan; contoh: ON/OFF;10;PCS;PANEL;1;PCS </span>
                    <textarea name="name_plate" class="form-control" id="" cols="30" rows="10" placeholder="Pembuatan dengan format, Nama;jumlah;satuan; contoh: ON/OFF;10;PCS;PANEL;1;PCSs">{{$list->name_plate}}</textarea>
                  </div>

              <button class="btn btn-sm btn-success btn-block" onclick="return confirm('Udah yakin semua datanya benar?')" type="submit">Submit</button>
              <button class="btn btn-sm btn-danger shadow" id="floating" onclick="return confirm('Yakin ingin reset ulang?')" type="reset">Reset</button>
            </form>


            </div> <!-- End of card-body -->
        </div><!-- End Card -->

    @endsection
@section('javascript')
<script>
    function calculateCapacity() {
        var ampere=$("#ampere").val();
        var voltage=$("#voltage").val();
        var phase_3=$("#phase_3").val();
        var capacity=ampere*voltage*phase_3;
        $("#capacity").val(capacity);
    }
    $("#ampere").on('change', calculateCapacity);
    $("#voltage").on('change', calculateCapacity);
    $("#phase_3").on('change', calculateCapacity);
</script>
@endsection
