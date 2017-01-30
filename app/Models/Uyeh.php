<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uyeh extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];



    protected $table = 'user';
    //whitelist
    //protected $fillable = ['kode_produk', 'nama_produk', 'spek', 'harga'];

    //blacklist
    protected $guarded = [];
}
