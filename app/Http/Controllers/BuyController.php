<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Data;
use App\Models\Buy;

class BuyController extends Controller
{
    public function view($id)
    {
       $produk = Data::find($id);
        return view('blog/view', ['produk' => $produk]);
    }

    public function bought(Request $request)
      {
       $data = new Buy;
       $data->kode_produk = $request->kode_produk;
       $data->harga = $request->harga;
       $data->jumlah = $request->jumlah;
       $data->nama = $request->nama;
       $data->nomor_ktp = $request->nomor_ktp;
       $data->no_hp = $request->no_hp;
       $data->alamat = $request->alamat;
       $data->via = $request->via;
       $data->jumlah_pembayaran = ($request->harga)*($request->jumlah);
       $gambar = $request->file('foto_ktp');
       $namaFile = $gambar->getClientOriginalName();
       $request->file('foto_ktp')->move('uploadgambar', $namaFile);
       $data->foto_ktp = $namaFile;
      $data->save();

       return view('blog/success');
      }

    public function viewuser($id)
    {
       $produk = Data::find($id);
        return view('blog/viewuser', ['produk' => $produk]);
    }

    public function boughtuser(Request $request)
      {
       $data = new Buy;
       $data->kode_produk = $request->kode_produk;
       $data->harga = $request->harga;
       $data->jumlah = $request->jumlah;
       $data->nama = $request->nama;
       $data->nomor_ktp = $request->nomor_ktp;
       $data->no_hp = $request->no_hp;
       $data->alamat = $request->alamat;
       $data->via = $request->via;
       $data->jumlah_pembayaran = ($request->harga)*($request->jumlah);
       $gambar = $request->file('foto_ktp');
       $namaFile = $gambar->getClientOriginalName();
       $request->file('foto_ktp')->move('uploadgambar', $namaFile);
       $data->foto_ktp = $namaFile;
      $data->save();

        return view('blog/successuser');
      }

    public function transaksi()
    {
    	$pembelian = Buy::paginate(7);

        return view('blog/transaksi', ['pembelian' => $pembelian]);
    }

    public function destroytransaksi($id)
    {
        $data   = Buy::find($id);
        $data->delete();
        return redirect('transaksi');
    }

    public function pelanggan($id)
    {
       $pelanggan = Buy::find($id);
        return view('blog/pelanggan', ['pelanggan' => $pelanggan]);
    }

}
