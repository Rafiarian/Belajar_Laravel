<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judulku', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('headerku')

<div class="mt-4 p-5 bg-primary text-white rounded">

	<h1>Ini Adalah Halaman Home</h1>
	<p>Selamat datang !</p>
</div>

@endsection

@section('konten')

<p>  </p>
