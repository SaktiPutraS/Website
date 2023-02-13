@extends('layout.main')
@section('title')
    Input Panel P3c
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

            <form method='post' action="{{ route('pn_01_store') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama_customer">Nama Customer <span class="text-red">*Wajib</span></label>
                            <input name="nama_customer" required type="text" class="form-control" id="nama_customer" placeholder="Enter Nama Customer">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="namaProyek">Nama Proyek <span class="text-red">*Wajib</span></label>
                            <input name="nama_proyek" required type="text" class="form-control" id="namaProyek" placeholder="Enter Nama Proyek">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="namaPanel">Nama Panel <span class="text-red">*Wajib</span></label>
                            <input name="nama_panel"required type="text" class="form-control" id="namaPanel" placeholder="Enter Nama Panel">
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nomorWO">Nomor WO <span class="text-red">*Wajib</span></label>
                            <input  name="nomor_wo" required type="text" class="form-control" id="nomorWO" placeholder="Enter Nomor WO">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cell">Cell <span class="text-red">*Wajib</span></label>
                            <input name="cell" required type="number" class="form-control" min="1" id="cell" placeholder="Enter Cell">
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="deadlineProduksi">Deadline Produksi <span class="text-red">*Wajib</span></label>
                            <input required name="deadline_produksi" type="datetime-local" class="form-control" id="deadlineProduksi" placeholder="Enter Deadline Produksi">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="deadlineQC">Deadline QC pass <span class="text-red">*Wajib</span></label>
                            <input required name="deadline_qc_pass" type="datetime-local" class="form-control" id="deadlineQC" placeholder="Enter Deadline QC pass">
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="jenisPanel">Jenis Panel (F/W) <span class="text-red">*Wajib</span></label>
                            <select required  name="jenis_panel" id="" class="form-control">
                                <option value="" selected disabled>Pilih Panel</option>
                                <option value="F">Free Standing</option>
                                  <option value="W">Wall Mounting</option>
                              </select>
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="jenisTegangan">Jenis Tegangan (L/M) <span class="text-red">*Wajib</span></label>
                              <select required  name="jenis_tegangan" id="jenisTegangan" class="form-control">
                                  <option value="" selected disabled>Pilih Tegangan</option>
                                  <option value="L">Low</option>
                                  <option value="M">Medium</option>
                              </select>
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tipePanel">Tipe Panel (Outdoor/Indoor) <span class="text-red">*Wajib</span></label>
                              <select  required name="tipe_panel" id="tipePanel" class="form-control">
                                  <option value="" selected disabled>Pilih Tipe</option>
                                  <option value="Outdoor">Outdoor</option>
                                  <option value="Indoor">Indoor</option>
                              </select>
                          </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-success btn-block" onclick="return confirm('Udah yakin semua datanya benar?')" type="submit">Submit</button>
                    <button class="btn btn-sm btn-danger shadow" id="floating" onclick="return confirm('Yakin ingin reset ulang?')" type="reset">Reset</button>
                </div>
            </form>


            </div> <!-- End of card-body -->
        </div><!-- End Card -->

    @endsection
    @section('javascript')
    {{-- <script src="https://cdnjs.cloudflare .com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script> --}}
    <script>
        // $(document).ready(function() {
        //   $('#nama_customer').typeahead({
        //     minLength: 2,
        //     highlight: true,
        //   },
        //   {
        //     display: function(suggestion) {
        //       return suggestion.nama_customer;
        //     },
        //     source: function(query, syncResults, asyncResults) {
        //       $.get('{{route('pn_01_getCust')}}', {searchTerm: query}, function(suggestions) {
        //         asyncResults(suggestions);
        //       });
        //     }
        //   });
        // });
        </script>
    @endsection
