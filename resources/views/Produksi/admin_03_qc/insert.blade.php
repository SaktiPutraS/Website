@extends('layout.main')
@section('title')
    Input Panel
@endsection
@section('head')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" --}}
<style>
  .form-check {
    float: left;
  }

  textarea {
    clear: both;
  }

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
    Input Panel
@endsection
@section('content')
    <div class="card card-shadow">

        <div class="card-body">

            <form method='post' action="{{ route('pn_03_store') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <hr>
                <h2>Pilih Panel</h2>
                <hr>
                <div class="form-group">
                    <label class="form-label">Panel</label>
                    <div class="selectgroup w-100">
                        <select required name="id_panel" id="view_panel" class="form-control" style="width: 100%">
                            <option value="" selected disabled>----Pilih Panel-----</option>
                            @for ($i = 0; $i < count($p3c_list); $i++)
                            <option value="{{ $p3c_list[$i]->id }}" >{{ $p3c_list[$i]->nomor_seri_panel }} - {{ $p3c_list[$i]->nama_customer }} - {{ $p3c_list[$i]->nama_proyek }} - {{ $p3c_list[$i]->nama_panel }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="namaProyek">Nama Customer</label>
                                <input name="nama_customer" readonly type="text" class="form-control" id="namaCustomer" placeholder="Enter Nama Customer">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="namaProyek">Nama Proyek</label>
                                <input name="nama_proyek" readonly type="text" class="form-control" id="namaProyek" placeholder="Enter Nama Proyek">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="namaPanel">Nama Panel</label>
                                <input name="nama_panel"readonly type="text" class="form-control" id="namaPanel" placeholder="Enter Nama Panel">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h2>Detail</h2>
                <hr>
                <div class="form-group">
                    <label for="actual_qc_pass" class="form-label">Actual QC Pass Date</label>
                    <input type="date" id="actual_qc_pass" name="actual_qc_pass" class="form-control" />
                  </div>

                  <!-- Form group containing the textarea input field -->
                  <div class="form-group">
                    <label for="catatan_hasil_qc_test" class="form-label">Catatan Hasil QC Test</label>
                    <textarea id="catatan_hasil_qc_test" name="catatan_hasil_qc_test" class="form-control"></textarea>
                  </div>

                    <button class="btn btn-sm btn-success btn-block mt-3" type="submit">Submit</button>
                    <button class="btn btn-sm btn-danger shadow" id="floating" type="reset">Reset</button>
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
                    url: '{{route('pn_03_search')}}',
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
