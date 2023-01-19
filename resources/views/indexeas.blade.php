<div class="container">
@extends('rafi')<br>

@section('atas')

@endsection

@section('konten')

<h3>Data Nilai Hasil Studi</h3>
<a href="/hasilstudi/tambaheas"> + Tambah Data</a> <br>
<br>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Nilai Bobot</th>
		</tr>
		@foreach($hasilstudi as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->normorinduksiswa }}</td>
			<td>{{ $p->nilaiangkaa }}</td>
			<td>{{ $p->sks }}</td>
            @if ($p->nilaiangkaa >= 81)
                        <td>A</td>
                    @elseif ($p->nilaiangkaa <= 80 && $p->nilaiangkaa >= 61)
                        <td>B</td>
                    @elseif ($p->nilaiangkaa <= 60 && $p->nilaiangkaa >= 41)
                        <td>C</td>
                    @elseif ($p->nilaiangkaa <= 40)
                        <td>D</td>
                    @endif
            <td>{{ $p->nilaiangkaa * $p->sks; }}</td>
		</tr>
		@endforeach
	</table>
</div>
    @endsection



