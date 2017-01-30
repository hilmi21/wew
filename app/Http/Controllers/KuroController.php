<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KuroController extends Controller
{
    public function index()
    {
    return view('web/asal');
    }
    public function show($id)
    {
    return view('web/asalwae', ['web' => $id]);
    }
}
