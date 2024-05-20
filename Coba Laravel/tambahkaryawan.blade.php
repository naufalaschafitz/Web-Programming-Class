@extends('dbtemplate')


@section('atas')
    <a href="/karyawan" class="btn btn-dark"> Kembali</a>
@endsection


@section('bawah')
    <form class="form-horizontal" action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kode" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode" required="required" id="kode"
                    placeholder="Masukkan Kode">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" required="required" id="nama"
                    placeholder="Siapa Namanya?">
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="divisi" required="required" id="divisi"
                    placeholder="Dimana divisinya?">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <textarea name="departemen" class="form-control" required="required" id="departemen" placeholder="Dimana departemennya?"></textarea>
            </div>
        </div>

        <input type="submit" value="Simpan Data">
    </form>
@endsection
