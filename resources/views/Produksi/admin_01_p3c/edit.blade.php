@extends('layout.main')
@section('title')
    Edit Panel P3C- {{$list->nomor_seri_panel}}
@endsection
@section('head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
    <div class="card card-shadow">
        <div class="card-header">


        </div>
        <div class="card-body">

            <form method='post' action="{{ route('pn_01_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <input type="hidden" name="id" value="{{$list->id}}" required readonly>
                <hr>
                <h3>Detail</h3>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="namaProyek">Nama Customer <span class="text-red">*Wajib</span></label>
                            <input name="nama_customer" value="{{$list->nama_customer}}" required type="text" class="form-control" id="namaProyek" placeholder="Enter Nama Proyek">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="namaProyek">Nama Proyek <span class="text-red">*Wajib</span></label>
                            <input name="nama_proyek"  value="{{$list->nama_proyek}}" required type="text" class="form-control" id="namaProyek" placeholder="Enter Nama Proyek">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="namaPanel">Nama Panel <span class="text-red">*Wajib</span></label>
                            <input name="nama_panel"  value="{{$list->nama_panel}}" required type="text" class="form-control" id="namaPanel" placeholder="Enter Nama Panel">
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nomorWO">Nomor WO <span class="text-red">*Wajib</span></label>
                            <input  name="nomor_wo" value="{{$list->nomor_wo}}" required type="text" class="form-control" id="nomorWO" placeholder="Enter Nomor WO">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cell">Cell <span class="text-red">*Wajib</span></label>
                            <input name="cell"  value="{{$list->cell}}" required type="number" min="1" class="form-control" id="cell" placeholder="Enter Cell">
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="deadlineProduksi">Deadline Produksi <span class="text-red">*Wajib</span></label>
                            <input required name="deadline_produksi" value="{{$list->deadline_produksi}}" type="datetime-local" class="form-control" id="deadlineProduksi" placeholder="Enter Deadline Produksi">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="deadlineQC">Deadline QC pass <span class="text-red">*Wajib</span></label>
                            <input required  name="deadline_qc_pass" value="{{$list->deadline_qc_pass}}"  type="datetime-local" class="form-control" id="deadlineQC" placeholder="Enter Deadline QC pass">
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="jenisPanel">Jenis Panel (F/W) <span class="text-red">*Wajib</span></label>
                            <select required  name="jenis_panel" id="" class="form-control">
                                <option value="F"  <?php if ($list->jenis_panel == 'F') { echo 'selected'; } ?>>Free Standing</option>
                                  <option value="W"  <?php if ($list->jenis_panel == 'W') { echo 'selected'; } ?>>Wall Mounting</option>
                              </select>
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="jenisTegangan">Jenis Tegangan (L/M) <span class="text-red">*Wajib</span></label>
                              <select required  name="jenis_tegangan" id="jenisTegangan" class="form-control">
                                  <option value="L" <?php if ($list->jenis_tegangan == 'L') { echo 'selected'; } ?> >Low</option>
                                  <option value="M" <?php if ($list->jenis_tegangan == 'M') { echo 'selected'; } ?>>Medium</option>
                              </select>

                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tipePanel">Tipe Panel (Outdoor/Indoor) <span class="text-red">*Wajib</span></label>
                              <select  required name="tipe_panel" id="tipePanel" class="form-control">
                                  <option value="Outdoor" <?php if ($list->tipe_panel == 'Outdoor') { echo 'selected'; } ?>>Outdoor</option>
                                  <option value="Indoor" <?php if ($list->tipe_panel == 'Indoor') { echo 'selected'; } ?>>Indoor</option>
                              </select>
                          </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3 row form-group">
                    <label for="kirim_email" class="col-4">Status Panel <span class="text-red">*Wajib</span></label>
                    <div class="selectgroup w-100 col-8">
                        <label class="selectgroup-item">
                            <input type="radio" required id="currentStatus" name="panel_status" value="{{$list->panel_status}}" checked class="selectgroup-input">
                            <span class="selectgroup-button">{{strtoupper($list->panel_status)}}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" required name="panel_status" value="Batal" class="selectgroup-input">
                            <span class="selectgroup-button">Batal</span>
                        </label>
                        {{-- <label class="selectgroup-item">
                            <input type="radio" id="Terkirim" name="panel_status" value="Terkirim" class="selectgroup-input">
                            <span class="selectgroup-button">Terkirim</span>
                        </label> --}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Status Pekerjaan</label>
                    <input type="text" name="status_pekerjaan" readonly value="{{$list->status_pekerjaan}}" id="status_pekerjaan" class="form-control">
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
    <script>
        // $(document).ready(function() {
        //     var currentStatus= $("#status_pekerjaan").val();
        //     if (currentStatus != "Selesai Test"){
        //         $("#Terkirim").attr('disabled',true);
        //     }
        // });
    </script>
    @endsection
