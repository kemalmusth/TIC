<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    // pemilihan table dalam database 
    protected $table = 'event';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getEvent()
    {
        $records = DB::table('event')
            ->select('judul_event', 'detail_event', 'kategori_event', 'foto_event')
            ->get()->toArray();
        return $records;
    }
}
