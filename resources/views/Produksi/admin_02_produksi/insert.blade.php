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
.text-red{
    color: red;
    font-size:12px;
    vertical-align: super;
}
</style>
@endsection
@section('main_header')
    Input Panel
@endsection
@section('content')
    <div class="card card-shadow">

        <div class="card-body">

            <form method='post' action="{{ route('pn_02_store') }}" enctype="multipart/form-data">
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
                    <label class="form-label">SPV</label>
                    <div class="selectgroup w-100">
                        <select required name="spv" id="spv" class="form-control" style="width: 100%">
                            <option value="" selected disabled>----Pilih SPV-----</option>
                            @for ($i = 0; $i < count($teams); $i++)
                            <option value="{{ $teams[$i]->id }}" >{{ $teams[$i]->Fullname }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="form-group">
                            <label class="form-label">Tim Wiring</label>
                            <div class="selectgroup selectgroup-pills" style="overflow: scroll; height: 200px;">
                                @for ($i = 0; $i < count($teams); $i++)
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="wiring[]" value="{{ $teams[$i]->Fullname }}" class="selectgroup-input">
                                        <span class="selectgroup-button">{{ $teams[$i]->Fullname }}</span>
                                    </label>
                                    @endfor
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="form-label">Tim Mekanik</label>
                            <div class="selectgroup selectgroup-pills" style="overflow: scroll; height: 200px;">
                                @for ($i = 0; $i < count($teams); $i++)
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="mekanik[]" value="{{ $teams[$i]->Fullname }}" class="selectgroup-input">
                                        <span class="selectgroup-button">{{ $teams[$i]->Fullname }}</span>
                                    </label>
                                    @endfor
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="form-group mt-3">
                    <label for="" class="form-label">Actual Produksi</label>
                    <input type="date" class="form-control" name="actual_produksi"value="<?php echo date("Y-m-d");?>">
                </div> --}}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Status Komponen</label>
                            <div class="form-group">
                                <!-- Radio buttons with labels "Lengkap" and "Kurang" -->
                                <label class="form-check">
                                <input type="radio" name="status_komponen" value="Lengkap" id="Lengkap" /> Lengkap
                                </label>
                                <label class="form-check">
                                <input type="radio" name="status_komponen" value="Kurang" id="Kurang" /> Kurang
                                </label>
                                <!-- Textarea input field, initially hidden -->
                                <textarea id="Kurang-text" class="form-control" height="50px" name="status_komponen_text" style="display: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Status Pekerjaan</label>
                            <div class="form-group">
                                <!-- Radio buttons with labels "Lengkap" and "Kurang" -->
                                <label class="form-check">
                                  <input type="radio" name="status_pekerjaan" value="Test-QC" id="Test-QC" /> Test QC
                                </label>
                                <label class="form-check">
                                  <input type="radio" name="status_pekerjaan" checked  value="Progress" id="Progress" /> Progress
                                </label>
                                <label class="form-check">
                                  <input type="radio" name="status_pekerjaan" value="Tunda" id="Tunda" /> Tunda
                                </label>
                                <!-- Textarea input field, initially hidden -->
                                <textarea id="status_pekerjaan_txt" class="form-control" height="50px" name="status_pekerjaan_txt" style="display: none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kirim_email" class="col-sm-4 col-form-label">Kirim email QC untuk pengetesan <span class="text-red">*ketika submit</span></label>
                    <div class="selectgroup w-100 col-sm-8">
                        <label class="selectgroup-item">
                            <input type="radio" required name="kirim_email" value="Iya" class="selectgroup-input">
                            <span class="selectgroup-button">Iya</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="kirim_email" value="Tidak" class="selectgroup-input">
                            <span class="selectgroup-button">Tidak</span>
                        </label>
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
            $("#spv").select2({
                minimumInputLength: 3
            });
            $('#view_panel').select2({
                // minimumInputLength: 3 // only start searching when the user has input 3 or more characters
            });
        });
        </script>
         <script>
            // Get a reference to the "Lengkap" and "Kurang" radio buttons and the textarea
            const LengkapRadio = document.getElementById('Lengkap');
            const KurangRadio = document.getElementById('Kurang');
            const KurangText = document.getElementById('Kurang-text');

            // Listen for changes in the state of the radio buttons
            LengkapRadio.addEventListener('change', handleRadioChange);
            KurangRadio.addEventListener('change', handleRadioChange);

            function handleRadioChange(event) {
              // If the "Lengkap" radio button is selected, reset the value of the textarea
              if (event.target.id === 'Lengkap' && event.target.checked) {
                //   LengkapRadio.value='Complete';
                KurangText.value = '';
                KurangText.style.display = 'none';
              } else if (event.target.id === 'Kurang' && event.target.checked) {
                // If the "Kurang" radio button is selected, show the textarea
                // LengkapRadio.value='';
                KurangText.style.display = 'block';
              }
            }
          </script>
        <script>
            // Get a reference to the "Lengkap" and "Kurang" radio buttons and the textarea
            const progressRadio = document.getElementById('Progress');
            const tundaRadio = document.getElementById('Tunda');
            const testRadio = document.getElementById('Test-QC');
            const status_pekerjaan_txt = document.getElementById('status_pekerjaan_txt');

            // Listen for changes in the state of the radio buttons
            progressRadio.addEventListener('change', handleRadioChange_status);
            tundaRadio.addEventListener('change', handleRadioChange_status);
            testRadio.addEventListener('change', handleRadioChange_status);

            function handleRadioChange_status(event) {
              // If the "Lengkap" radio button is selected, reset the value of the textarea
              if (event.target.id === 'Progress' && event.target.checked) {
                //   LengkapRadio.value='Complete';
                status_pekerjaan_txt.value = '';
                status_pekerjaan_txt.style.display = 'none';
              } else if(event.target.id === 'Test-QC' && event.target.checked){
                status_pekerjaan_txt.value = '';
                status_pekerjaan_txt.style.display = 'none';
              }

              else if (event.target.id === 'Tunda' && event.target.checked) {
                // If the "Kurang" radio button is selected, show the textarea
                // LengkapRadio.value='';
                status_pekerjaan_txt.style.display = 'block';
              }
            }
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
