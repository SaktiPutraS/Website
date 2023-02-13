@extends('layout.main')
@section('title')
    Edit
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
    Edit
@endsection
@section('content')
    <div class="card card-shadow">
        <div class="card-body">

            <form method='post' action="{{ route('pn_00_update') }}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <p class="alert alert-danger">{{ $errors->first() }}</p>
                @endif
                <!-- resources/views/form.blade.php -->
                <input type="hidden" value="{{$list->id}}" name="id">
                    <div class="form-group">
                      <label for="fullname">Full Name</label>
                      <input type="text" value="{{$list->Fullname}}" required class="form-control" id="fullname" name="fullname" placeholder="Enter full name">
                    </div>
                    <div class="form-group">
                      <label for="nickname">Nickname</label>
                      <input type="text" value="{{$list->Nickname}}" required class="form-control" id="nickname" name="nickname" placeholder="Enter nickname">
                    </div>
                    <div class="form-group">
                      <label for="alias">Alias</label>
                      <input type="text" value="{{$list->Alias}}" required class="form-control" id="alias" name="alias" placeholder="Enter alias">
                    </div>


                {{-- <div class="card-footer"> --}}
                    <button class="btn btn-sm btn-success btn-block" type="submit">Submit</button>
                    <button class="btn btn-sm btn-danger shadow" id="floating" type="reset">Reset</button>
                {{-- </div> --}}
            </form>


            </div> <!-- End of card-body -->
        </div><!-- End Card -->

    @endsection
    @section('javascript')

    @endsection

