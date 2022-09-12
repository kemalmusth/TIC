<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kuliner extends Model
{
    // pemilihan table dalam database 
    protected $table = 'kuliner';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getKuliner()
    {
        $records = DB::table('kuliner')
            ->select('judul_kuliner', 'detail_kuliner', 'kategori_kuliner', 'foto_kuliner')
            ->get()->toArray();
        return $records;
    }
}
