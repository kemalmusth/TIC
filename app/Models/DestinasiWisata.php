<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DestinasiWisata extends Model
{
    // pemilihan table dalam database 
    protected $table = 'destinasi';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getDestinasi()
    {
        $records = DB::table('destinasi')
            ->select('judul_destinasi', 'detail_destinasi', 'kategori_destinasi', 'foto_destinasi')
            ->get()->toArray();
        return $records;
    }
}
