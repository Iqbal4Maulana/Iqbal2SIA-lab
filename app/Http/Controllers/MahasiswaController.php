<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function detail()
    {
        return "<h1>Selamat Datang!</h1><p>Ini halaman Detail Mahasiswa</p>";
    }

    public function profile()
    {
        return "<h1>Selamat Datang!</h1><p>Ini halaman Profil Mahasiswa</p>";
    }
}