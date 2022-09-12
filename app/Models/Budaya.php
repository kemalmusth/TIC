<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Budaya extends Model
{
    // pemilihan table dalam database 
    protected $table = 'budaya';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getBudaya()
    {
        $records = DB::table('budaya')
            ->select('judul_budaya', 'detail_budaya', 'kategori_budaya', 'foto_budaya')
            ->get()->toArray();
        return $records;
    }
}
