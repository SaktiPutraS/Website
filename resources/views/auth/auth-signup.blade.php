@extends('layouts.auth-layout')
@section('title')
    Sign Up
@endsection
@section('content')
    @if ($errors->any())
        <div style="display: none" id="error-stats">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach

        </div>
    @endif
    <div class="auth-bg">
        <span class="r"></span>
        <span class="r s"></span>
        <span class="r s"></span>
        <span class="r"></span>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <div class="mb-4">
                <i class="feather icon-user-plus auth-icon"></i>
            </div>
            <h3 class="mb-4">Sign up</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    {{-- <input type="text" class="form-control" placeholder="Name" name="name" required autofocus> --}}
                    <select id="mySelect" class="form-control" name="name" required>
                        {{-- <option selected value="" disabled>Cari...</option> --}}
                        <option></option>
                        @foreach ($data as $data)
                            <option>{{$data->k_nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" type="email" name="email" required>
                </div>
                <div class="input-group mb-4">
                    <input class="form-control" placeholder="Password" type="password" name="password" required
                        autocomplete="new-password">
                </div>
                <div class="input-group mb-4">
                    <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation"
                        required>
                </div>
                <button type="submit" class="btn btn-primary shadow-2 mb-4">Sign up</button>
            </form>
            <p class="mb-0 text-muted">Allready have an account? <a href="{{ route('login') }}"> Log in</a></p>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let data = document.getElementById('error-stats');
        if (!!data) {
            displayMsg(data);
        }

        function displayMsg(message) {
            // alert(message.innerHTML);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message.innerHTML,
                // text: 'Something went wrong!',
                // footer: '<a href="">Why do I have this issue?</a>'
            });
        }
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#mySelect").select2({
                minimumInputLength: 3,
           allowClear: true,
           placeholder: 'Cari nama anda',
            });
    });
    </script>
    {{-- <script type="text/javascript">
        $('#mySelect').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : '{{route('search')}}',
        data:{'search':$value},
        success:function(data){
            console.log(data);
        $("#mySelect").empty();
        $.each(data, function (i, item) {
            $('#mySelect').append($('<option>', {
                text : data.k_nama
            }));
        });
        }
        });
        })
        </script>
        <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script> --}}
@endsection
