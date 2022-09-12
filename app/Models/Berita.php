<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Berita extends Model
{
    // pemilihan table dalam database 
    protected $table = 'berita';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getBerita()
    {
        $records = DB::table('berita')
            ->select('judul_berita', 'detail_berita', 'kategori_berita', 'foto_berita')
            ->get()->toArray();
        return $records;
    }
}
