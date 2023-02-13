@extends('layout.main')
@section('main_header')
    Create Ticketing
@endsection
@section('title')
    Create Ticket
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            Create Ticketing
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <p class="card-title">We will do to all the best we can to solve all your problems. </p>
                    <form action="{{route('ticket-store')}}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @if ($errors->any())
                            <p class="alert alert-danger">{{ $errors->first() }}</p>
                        @endif
                        <div class="row">

                            <div class="form-group col">
                                <label for="ticket_user">Nama User</label>
                                <input type="text" class="form-control" id="ticket_user" name="ticket_user" readonly
                                value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group col">
                                <label for="ticket_referrer">Nama Pengaju</label>
                                <select class="custom-select form-control" id="ticket_referrer" name="ticket_referrer" style="width: 100%" required>
                                    <option value="" selected disabled>Cari...</option>
                                    @foreach ($karyawan as $list)
                                    <option>{{$list->k_nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ticket_type">Tipe Error</label>
                            <select class="custom-select" name="ticket_type" style="width: 100%" required id="ticket_type">
                                <option value="" selected disabled>-Pilih Case-</option>
                                <option value="Jaringan">Jaringan</option>
                                <option value="Down">Internet Down</option>
                                <option value="Program">Program</option>
                                <option value="Hardware">Hardware</option>
                                <option value="PC/Laptop">PC/Laptop</option>
                                <option value="Printer & Scanner">Printer&Scanner</option>
                                <option value="Fina">Fina</option>
                                <option value="Email">Email</option>
                                <option value="Excel">Excel</option>
                                <option value="Office">Office</option>
                                <option value="Duta Apps">Duta Apps</option>
                                <option value="GForm">Google Form</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ticket_judul">Judul</label>
                        </div>
                        <input type="text" class="form-control getTitle" id="ticket_judul" name="ticket_judul"
                            placeholder="Nama Program/Hardware + Keluhan -> Fina + Error Tarik Report">
                        <div class="form-group">
                            <label for="ticket_detail">Detail</label>
                            <textarea class="form-control" name="ticket_detail"
                                placeholder="Kode Error atau Kendala" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Screenshoot atau foto error</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md"><img src="{{ asset('images/ticket.jpg') }}" class="img-thumbnail card-shadow">
                </div>
            </div>

        </div>
    </div>
@endsection
@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script>
    // $(document).ready(function() {
    //   $('.getTitle').typeahead({
    //     minLength: 2,
    //     highlight: true,
    //   },
    //   {
    //     display: function(suggestion) {
    //       return suggestion.ticket_judul;
    //     }
    //     ,
    //     source: function(query, syncResults, asyncResults) {
    //       $.get('{{route('getTitle')}}', {searchTerm: query}, function(suggestions) {
    //         // console.log(suggestions);
    //         asyncResults(suggestions);
    //       });
    //     }
    //   });
    // });

</script>

<script>
     $("#ticket_type").select2({
                    width: 'resolve',
                    placeholder: "Pilih Case",
                    allowClear: true
                });
     $("#ticket_referrer").select2({
                    width: 'resolve',
                    placeholder: "Cari User",
                    allowClear: true,
                    minimumInputLength: 3,
                });


</script>
@endsection
