<div class="container">
@extends('rafi')
@section('atas')
    <a href="/pegawai" class=""> Kembali</a>
@endsection
@section('konten')
    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="row mb-3">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputumur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
                </div>
              </div>
           <div class="d-grid">
              <button type="submit" class="btn btn-primary col-sm-2" value="Simpan Data">Simpan</button>
           </div>
        </form>
    @endforeach
@endsection

