<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengumuman extends Model
{
    // pemilihan table dalam database 
    protected $table = 'pengumuman';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getPengumuman()
    {
        $records = DB::table('pengumuman')
            ->select('judul_pengumuman', 'detail_pengumuman', 'kategori_pengumuman', 'foto_pengumuman')
            ->get()->toArray();
        return $records;
    }
}
