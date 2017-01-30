<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Data;
use App\Models\Buy;

class DataController extends Controller
{
    public function index()
    {

        $produk = Data::paginate(5);

        return view('blog/index', ['produk' => $produk]);
    }

     public function indexuser()
    {

        $produk = Data::paginate(5);

        return view('blog/indexuser', ['produk' => $produk]);
    }


    public function Home()
    {
    return view('layouts/masterhome');
    }
    public function homeadmin()
    {
    return view('layouts/game');
    }
    public function homeuser()
    {
    return view('layouts/gameuser');
    }

    


        public function create()
        {
        return view('blog/create');
        }

        public function store(Request $request)
        {
            $this->validate($request, [
            'kode_produk' => 'required|min:5|max:25',
            'nama_produk' => 'required|min:5|max:25',
            ]);

            $data = new Data;
            $data->kode_produk = $request->kode_produk;
            $data->nama_produk = $request->nama_produk;
            $data->spek = $request->spek;
            $data->harga = $request->harga;
            $data->youtube = $request->youtube;
            $gambar = $request->file('file_gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('file_gambar')->move('uploadgambar', $namaFile);
            $data = new Data($request->all());
            $data->file_gambar = $namaFile;
            $data->save();

            return redirect('/data');
        }



        public function edit($id)
        {
            $data = Data::find($id);

            if(!$data)
            abort(404);

            return view('blog/edit', ['data'=> $data]);
        }

        public function update(Request $request, $id)
        {
            $data   = Data::find($id);
            $data->kode_produk = $request->kode_produk;
            $data->nama_produk = $request->nama_produk;
            $data->spek = $request->spek;
            $data->harga = $request->harga;
            $gambar = $request->file('file_gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('file_gambar')->move('uploadgambar', $namaFile);
            $data->file_gambar = $namaFile;
            $data->save();


            return redirect('data');
        }



        public function destroy($id)
        {
            $data   = Data::find($id);
            $data->delete();
            return redirect('data')->with('message', 'Data berhasil dihapus!');
        }

        public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Data::where('nama_produk', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('/blog/result', compact('hasil', 'query'));
    }

    public function searchuser(Request $request)
    {
        $query = $request->get('q');
        $hasil = Data::where('nama_produk', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('/blog/resultuser', compact('hasil', 'query'));
    }

    public function galeri()
    {
        return view('/blog/galeri');
    }

    public function galeriuser()
    {
        return view('/blog/galeriuser');
    }

    public function contact()
    {
        return view('blog/contact');
    }
    public function contactuser()
    {
        return view('blog/contactuser');
    }

    public function about()
    {
        return view('blog/about');
    }
    public function aboutuser()
    {
        return view('blog/aboutuser');
    }


}
