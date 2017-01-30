<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Requests;
use App\Models\Blog;

class CobaController extends Controller
{
    public function home()
    {
    return view('web/coba');
    }
    public function produk()
   {
    $users =  DB::table('blog')->where('tittle')->get();
    return view('web/produk');
    }


}
