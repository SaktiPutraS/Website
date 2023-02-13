@extends('layout.main')
@section('title')
    Input Panel Logistik
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
    Input Logistik
@endsection
@section('content')
{{-- <div class="loading">
    <div class="spinner"></div>
  </div> --}}

    <div class="card card-shadow">

        <div class="card-body">

            <form method='post' action="{{ route('pn_04_store') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="namaProyek">ID PANEL</label>
                                <input name="id_panel" value="{{$p3c_list->id}}" readonly type="text" class="form-control" id="namaCustomer" placeholder="Enter Nama Customer">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="namaProyek">Nama Customer</label>
                                <input name="nama_customer" value="{{$p3c_list->nama_customer}}" readonly type="text" class="form-control" id="namaCustomer" placeholder="Enter Nama Customer">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="namaProyek">Nama Proyek</label>
                                <input name="nama_proyek" value="{{$p3c_list->nama_proyek}}" readonly type="text" class="form-control" id="namaProyek" placeholder="Enter Nama Proyek">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="namaPanel">Nama Panel</label>
                                <input name="nama_panel" value="{{$p3c_list->nama_panel}}" readonly type="text" class="form-control" id="namaPanel" placeholder="Enter Nama Panel">
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
                            <label for="capacity">Tanggal Kirim <span class="text-red">*Wajib</span></label>
                            <input type="date" class="form-control" name="tgl_kirim" id="tgl_kirim">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="keterangan">Keterangan BAKK<span class="text-red">*Optional</span></label>
                            <input type="number" class="form-control" name="keterangan" id="keterangan" placeholder="Enter keterangan">
                        </div>
                    </div>
                </div>

                  <button class="btn btn-sm btn-success btn-block" onclick="return confirm('Udah yakin semua datanya benar?')" type="submit">Submit</button>
                  <button class="btn btn-sm btn-danger shadow" id="floating" onclick="return confirm('Yakin ingin reset ulang?')" type="reset">Reset</button>
            </form>


            </div> <!-- End of card-body -->
        </div><!-- End Card -->

    @endsection
    @section('javascript')


    <script>

        $(document).ready(function() {
            $('#view_panel').select2();
        });
        </script>
          <script>
            $('#view_panel').on('change', function() {
                var selectedOption = $(this).val();

                // Send the AJAX request to the server
                $.ajax({
                    url: '{{route('pn_02_search')}}',
                    data: { term: selectedOption },
                    success: function(data) {
                    // Update the input field with the data obtained from the search
                    // $('#exampleFormControlInput1').val(data);
                    $('#namaProyek').val(data['nama_proyek']);
                    $('#namaCustomer').val(data['nama_customer']);
                    $('#namaPanel').val(data['nama_panel']);
                    // console.log(data['nama_panel']);
                    }
                });
            });
        </script>
        @endsection

