<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];



    protected $table = 'users';
    //whitelist
    //protected $fillable = ['kode_produk', 'nama_produk', 'spek', 'harga'];

    //blacklist
    protected $guarded = [];
}
