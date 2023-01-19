<div class="container">
@extends('rafi')<br>



@section('konten')
    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter name"
                        required="required">
                </div></div><br>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Enter Jabatan"
                            required="required">
                    </div> </div><br>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="umur" id="umur"
                                placeholder="Insert Age" required="required">
                        </div></div><br>
                        <div class="row mb-3">
                            <label for="jabatan" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Insert Address" required="required">
                            </div></div><br>

                            <input type="submit" value="Simpan Data">
        </form>
    </div>

    </body>

    </html>
@endsection
