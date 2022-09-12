<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    // pemilihan table dalam database 
    protected $table = 'users';
    // fungsi guarded untuk melindungi supaya tdk bisa di tambahkan oleh pengguna
    protected $guarded = ['id'];

    //ganti get sesuai dengan menu CRUD
    // public static function getLogin()
    // {
    //     $records = DB::table('user')
    //         ->select('name', 'email', 'password', 'role')
    //         ->get()->toArray();
    //     return $records;
    // }
}
