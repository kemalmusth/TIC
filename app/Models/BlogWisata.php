<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogWisata extends Model
{
    // pemilihan table dalam database 
    protected $table = 'blog';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    public static function getBlog()
    {
        $records = DB::table('blog')
            ->select('judul_blog', 'highlight_blog', 'detail_blog', 'kategori_blog', 'foto_blog')
            ->get()->toArray();
        return $records;
    }
}
