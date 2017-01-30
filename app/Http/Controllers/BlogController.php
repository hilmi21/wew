<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Requests;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {

        // insert biasa
        //$blog = new Blog;
        //$blog->tittle = 'omm telolet om';
        //$blog->description = 'teloletloletloletlolet';
        //$blog = save();


        //insert mass assignment
        //Blog::create([
        //    'tittle' => 'omm telolet om221 ',
        //    'description' => 'teloletloletloletlolet221',
        //    'created_at' => '2017-02-04 21:35:49',
        //    'updated_at' => '2017-01-05 12:45:49',
        //]);

        //update
        //$blog = Blog::where('tittle', 'omm telolet om ')->get();
        //$blog = save();

        //update mass assignment
        //Blog::find(5)->update([
        // 'tittle' => 'mang telolet mang ',
        // 'description' => 'teettttotttetttttt',
        //]);

        //delete
        //$blog = Blog::find(5);
        //$blog->delete();

        //destroy (delete kedua)
        //Blog::destroy([1, 2]);

        //SoftDeletes
        //$blog = Blog::find(10);
        //$blog->delete();



        $blog = Blog::all();
    	return view('blog/home', ['blog' => $blog]);
    }

     public function show($id)
    {
    //$nilai =  'ini adalah linknya ' . $id;
    //      $users =  DB::table('user')->where('username', 'like', '%a%')->get();
    //      insert
    //      DB::table('user')->insert([
    //      ['username' => 'WhoAmI', 'password' => '123die']
    //      ]);

        // update
        //DB::table('user')->where('username', 'Fuck U Bitch')
        //                ->update(['username' => 'Thug Life', 'password' => '123door']);

    //    DB::table('user')->where('id', '>', 5)->delete();

    //    $users =  DB::table('user')->get();
        $blog = Blog::find($id);
        if(!$blog)
            abort(404);

        return view('blog/single', ['blog' =>  $blog]);
    }



    public function create()
    {
        return view('blog/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tittle'        =>  'required|min:5',
            'description'   =>  'required|min:10|max:30'
        ]);
        //$blog = new Blog;
        //$blog->tittle = $request->tittle;
        //$blog->description = $request->description;
        //$blog = save();
        Blog::create([
            'tittle' => $request->tittle,
            'description' => $request->description,
        ]);

        return redirect('/blog');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        if(!$blog)
            abort(404);

        return view('blog/edit', ['blog' =>  $blog]);

    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->tittle = $request->tittle;
        $blog->description = $request->description;
        $blog->save();


        return redirect('blog/' . $id);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('blog');
    }

}
