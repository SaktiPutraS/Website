{{-- Memilih template dari file layout/main.blade.php --}}
@extends('layout.main')

@section('title')
{{-- Isi Judul sebuah halaman website--}}
@endsection

@section('head')
{{-- Isi tambahan head, untuk tambah css, style, js dan keperluan lain di head --}}
@endsection

@section('header')
{{-- Hal ini bisa ditambahkan dengan tombol ataupun keterangan lain --}}
@endsection

@section('content')
{{-- Di sini merupakan tempat utama pembuatan halaman view--}}
{{-- Di sini kenapa sih menggunakan card?
    karena untuk lebih terlihat rapi --}}
<div class="card card-shadow">
    <div class="card-header">
{{-- Ini adalah header card pada konten website --}}
{{-- Isi disini untuk header --}}
    </div>
    <div class="card-body">
{{-- Ini adalah isi card konten website --}}
{{-- Isi disini untuk konten --}}
    </div>
</div>
@endsection

@section('javascript')
{{-- Isi dengan javascript tambahan untuk penambahan fitur-fitur tersendiri --}}
@endsection
