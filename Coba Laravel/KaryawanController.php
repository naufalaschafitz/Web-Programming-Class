<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function index(){
        // mengambil data dari table pegawai(1)
        $pegawai = DB::table('karyawan')->get();


        // mengirim data pegawai ke view index
        return view('indexkaryawan',['karyawan' => $pegawai]);

    }

    public function tambah(){

        // memanggil view tambah
       return view('tambahkaryawan');
    }

    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }

    public function hapus($id){
        //menghapus data pegawai berdasarkan id
        DB::table('karyawan')->where('kodepegawai',$id)->delete();
        //alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }


}
