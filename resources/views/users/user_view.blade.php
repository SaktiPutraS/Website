@extends('layout.main')
@section('title')
    My Account
@endsection
@section('head')
<link rel="stylesheet" href="{{asset('css/switch.css')}}">
@endsection
{{-- @section('main_header')
My Account
@endsection --}}
@section('content')
    <div class="card card-shadow">
        <div class="card-header">
            <h1>
                {{ $list->name }}
                {{-- {{Auth::user()->name}} --}}
            </h1>
        </div>
        <form action="{{route('users.update')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @if ($errors->any())
                <p class="alert alert-danger">{{ $errors->first() }}</p>
            @endif
        <div class="card-body">
            <div class="form-group input-right">
                <label for="Tanggal">Your Name</label>
                <input readonly type="text" value="{{ $list->name }}" class="form-control">
            </div>
            <div class="form-group input-right pt-4">
                <label for="Tanggal">Email Address</label>
                <input readonly type="text" name="email" value="{{ $list->email }}" class="form-control">
            </div>
            <div class="form-group input-right pt-4">
                <label for="user_nik">NIK</label>
                <input name="user_nik" type="text" value="{{ $list->user_nik }}" class="form-control">
            </div>
            <div class="row pt-4">
                <div class="col">
                    <div class="form-group input-right">
                        <label for="user_gender">Gender</label>
                        <select name="user_gender" id="user_gender"
                            class="form-control custom-select" style="width:100%">
                            {{-- <option selected>{{$list->user_gender}}</option> --}}
                            {{-- <option disabled>------------------------------------------------------</option> --}}
                            <option <?php echo ($list->user_gender == "Pria") ? "selected" : "" ;?>>Pria</option>
                            <option <?php echo ($list->user_gender == "Wanita") ? "selected" : "" ;?>>Wanita</option>
                            {{-- <option>Wanita</option> --}}

                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group input-right">
                        <label for="user_divisi">Division</label>
                        <select name="user_divisi" id="divisi"
                            class="form-control custom-select" style="width:100%">
                            {{-- <option selected>{{$list->user_divisi}}</option> --}}
                            @foreach ($divisi as $divisi)
                                <option <?php echo ($list->user_divisi == $divisi->div_name) ? "selected" : "" ;?>>{{ $divisi->div_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group input-right">
                        <label for="user_birthday">Birthday</label>
                        <input name="user_birthday" type="date" value="{{ $list->user_birthday }}" class="form-control">
                    </div>
                </div>
            </div>
            @can('isAdmin')
            <table class="table text-center">
                <thead class="table-primary">
                    <th>#</th>
                    <th>isAdmin</th>
                    <th>isRole</th>
                    <th>isCreate</th>
                    <th>isRead</th>
                    <th>isUpdate</th>
                    <th>isDelete</th>
                    <th>isActive</th>
                </thead>
                <tbody>
                    <tr>
                    <td>#</td>
                    <td class="text-center">
                        <label class="switch">
                            <input type="hidden" name="isAdmin" value=0>
                            <input type="checkbox" <?php echo ($list->isAdmin == true)
                            ? 'checked':'';
                        ?>  name="isAdmin" value=1>
                            <span class="slider round"></span>
                          </label>
                        {{-- <input type="checkbox" name="isAdmin"> --}}
                    </td>
                    <td class="text-center">
                        <label class="switch">
                            <input type="hidden" value=0 name="isRole">
                            <input type="checkbox" <?php echo ($list->isRole == true)
                            ? 'checked':'';
                        ?> name="isRole" value=1>
                            <span class="slider round"></span>
                          </label>
                        {{-- <input type="checkbox" name="isRole"> --}}
                    </td>
                    <td class="text-center">
                        <label class="switch">
                            <input type="hidden" value=0 name="isCreate">
                            <input type="checkbox" <?php echo ($list->isCreate == true)
                            ? 'checked':'';
                        ?> name="isCreate" value=1>
                            <span class="slider round"></span>
                          </label>
                        {{-- <input type="checkbox" name="isCreate"> --}}
                    </td>
                    <td class="text-center">
                        <label class="switch">
                            <input type="hidden" value=0 name="isRead">
                            <input type="checkbox" <?php echo ($list->isRead == true)
                            ? 'checked':'';
                        ?> name="isRead" value=1>
                            <span class="slider round"></span>
                          </label>
                        {{-- <input type="checkbox" name="isRead"> --}}
                    </td>
                    <td class="text-center">
                        <label class="switch">
                            <input type="hidden" value=0 name="isUpdate">
                            <input type="checkbox" <?php echo ($list->isUpdate == true)
                                ? 'checked':'';
                            ?> name="isUpdate" value=1
                            >
                            <span class="slider round"></span>
                          </label>
                        {{-- <input type="checkbox" name="isUpdate"> --}}
                    </td>
                    <td class="text-center">
                        <label class="switch">
                            <input type="hidden" value=0 name="isDelete">
                            <input type="checkbox" <?php echo ($list->isDelete == true)
                            ? 'checked':'';
                        ?> name="isDelete" value=1>
                            <span class="slider round"></span>
                          </label>
                        {{-- <input type="checkbox" name="isDelete"> --}}
                    </td>
                    <td class="text-center">
                        <label class="switch">
                            <input type="hidden" value=0 name="isActive">
                            <input type="checkbox" <?php echo ($list->isActive == true)
                            ? 'checked':'';
                        ?> name="isActive" value=1>
                            <span class="slider round"></span>
                          </label>
                        {{-- <input type="checkbox" name="isActive"> --}}
                    </td>
                </tr>
                </tbody>
            </table>
            @endcan
            <div class="form-group pt-5">
                <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
            </div>
        </form>
        </div>
    @endsection
@section('javascript')
    <script>
         $("#divisi").select2({
                    width: 'resolve',
                    placeholder: "Pilih Divisi",
                    allowClear: true
                });
    </script>
@endsection
