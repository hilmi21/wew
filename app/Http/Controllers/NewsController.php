<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\News;

class NewsController extends Controller
{
    public function news()
    {

        $news = News::paginate(5);

        return view('blog/news', ['news' => $news]);
    }

     public function newsuser()
    {

        $news = News::paginate(5);

        return view('blog/newsuser', ['news' => $news]);
    }

        public function createnews()
        {
        return view('blog/createnews');
        }

        public function inputnews(Request $request)
        {
            $news = new News;
            $news->judul = $request->judul;
            $news->game = $request->game;
            $news->tanggal = $request->tanggal;
            $news->link = $request->link;
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar', $namaFile);
            $news = new News($request->all());
            $news->gambar = $namaFile;
            $news->save();

            return redirect('/news');
        }



        public function editnews($id)
        {
            $news = News::find($id);

            if(!$news)
            abort(404);

            return view('blog/editnews', ['news'=> $news]);
        }

        public function updatenews(Request $request, $id)
        {
          	$news   = News::find($id);
            $news->judul = $request->judul;
            $news->game = $request->game;
            $news->tanggal = $request->tanggal;
            $news->link = $request->link;
            $gambar = $request->file('gambar');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('gambar')->move('uploadgambar', $namaFile);
            $news->gambar = $namaFile;
            $news->save();

            return redirect('/news');
        }



        public function destroynews($id)
        {
            $news   = News::find($id);
            $news->delete();
            return redirect('news');
        }


}
