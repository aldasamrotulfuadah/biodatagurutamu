<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    Public function menampilkanBiodata ()
        {
            $nama = Biodata::$nama;
            $kelas = Biodata::$kelas;
            $alamat = Biodata::$alamat;
            $hobi = Biodata::$hobi;

            return view('biodata', compact('nama','kelas','alamat','hobi'));
        }
}
