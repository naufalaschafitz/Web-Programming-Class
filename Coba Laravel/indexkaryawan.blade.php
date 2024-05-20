@extends('dbtemplate')


@section('atas')
    <table class="table table-hover " style=" width:100%">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>
                    <?php
                    echo strtoupper($p->namalengkap);
                    ?>
                </td>
                <td>{{ $p->divisi }}</td>
                <td>
                    <?php
                    echo strtolower($p->departemen);
                    ?>
                </td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-dark">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('bawah')
    <a href="/karyawan/tambah" class="btn btn-dark"> + Tambah Karyawan Baru</a>
@endsection
