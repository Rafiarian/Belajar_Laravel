<div class="container">
    @extends('rafi')<br>



    @section('konten')
        <a href="/hasilstudi"> Kembali</a>

        <br />
        <br />

        <form action="/hasilstudi/store" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Matkul</label>
                <div class="col-sm-10">
                    <input type="string" class="form-control" id="normorinduksiswa" name="normorinduksiswa" rows="3" required="required">
                </div>
            </div><br>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-10">
                    <input type="string" class="form-control" id="normorinduksiswa" name="normorinduksiswa" rows="3" required="required">
                </div>
            </div><br>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Nilai Angka</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="nilaiangkaa" name="nilaiangkaa" rows="3" required="required"></textarea>
                </div>
            </div><br>
            <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="sks" name="sks" rows="3" required="required"></textarea>
                </div>
            </div><br>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="normorinduksiswa" name="normorinduksiswa" rows="3" required="required"></textarea>
                </div>
            </div><br>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Nilai Angka</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="nilaiangkaa" name="nilaiangkaa" rows="3" required="required"></textarea>
                </div>
            </div><br>
            <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="sks" name="sks" rows="3" required="required"></textarea>
                </div>
            </div><br>

            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </form>
    </div>

    </body>

    </html>
@endsection
