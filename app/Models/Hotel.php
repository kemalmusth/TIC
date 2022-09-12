<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hotel extends Model
{
    // pemilihan table dalam database 
    protected $table = 'hotel';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getHotel()
    {
        $records = DB::table('hotel')
            ->select('judul_hotel', 'detail_hotel', 'harga_hotel', 'foto_hotel')
            ->get()->toArray();
        return $records;
    }
}
