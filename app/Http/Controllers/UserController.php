<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Users;

class UserController extends Controller
{
    public function user()
    {
        $users = Users::paginate(7);

        return view('blog/user', ['users' => $users]);
    }

    public function createuser()
    {
    return view('blog/createuser');
    }

    public function storeuser(Request $request)
    {
        $data = new Users;
        $data->kode_produk = $request->kode_produk;
        $data->nama_produk = $request->nama_produk;
        $data->spek = $request->spek;
        $data->harga = $request->harga;
        $data->save();

        return redirect('/user');
    }



    public function edituser($id)
    {
        $data = Users::find($id);

        if(!$data)
        abort(404);

        return view('blog/edituser', ['data'=> $data]);
    }

    public function updateuser(Request $request, $id)
    {
        $data   = Users::find($id);
        $data->kode_produk = $request->kode_produk;
        $data->nama_produk = $request->nama_produk;
        $data->spek = $request->spek;
        $data->harga = $request->harga;
        $data->save();


        return redirect('user');
    }

    public function destroyuser($id)
    {
        $data   = Users::find($id);
        $data->delete();
        return redirect('user');
    }

    public function search(Request $request)
{
    $query = $request->get('q');
    $hasil = Data::where('kode_produk', 'LIKE', '%' . $query . '%')->paginate(10);

    return view('/blog/result', compact('hasil', 'query'));
}
}
