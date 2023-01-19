<div class="container">
@extends('rafi')
@section('atas')
    <a href="/pegawai" class=""> Kembali</a>
@endsection
@section('konten')
    @foreach ($pegawai as $p)


            <div class="row mb-3">
                <label for="inputnama" class="col-sm-2 col-form-label">Pegawai ID</label>
                <div class="col-sm-10">
                    <label class="control-label">{{ $p->pegawai_id }}</label>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <label class="control-label">{{ $p->pegawai_nama }}</label>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <label class="control-label">{{ $p->pegawai_jabatan }}</label>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputumur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <label class="control-label">{{ $p->pegawai_umur }}</label>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <label class="control-label">{{ $p->pegawai_alamat }}</label>
                </div>
              </div>
           <div class="d-grid">
              <button type="submit" class="btn btn-primary col-sm-2" value="Simpan Data">Simpan</button>
           </div>

    @endforeach
@endsection

