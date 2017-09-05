<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blog;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = BLog::paginate(5);
        return view('home',['blog'=>$blog]);
    }

    public function detail($id)
    {
        $blog = Blog::find($id);

        if(!$blog)
            abort(404);

        return view('detail',['blog'=>$blog]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        if(!$blog)
            abort(404);

        return view('edit',['blog'=>$blog]);
       
    }

    public function update(Request $request,$id)
    {
        Blog::find($id)->update([
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi
            ]);
        return redirect('/home');
    }

    public function add()
    {
        return view('add');
    }

    public function insert(Request $request)
    {
        $this->validate($request,[
            'judul'        =>'required|min:5',
            'deskripsi'    =>'required|min:5',
            'featured_img' =>'mimes:jpeg,jpg,png|max:2000' 
        ]);
        $filename = time().'.png';
        $request->file('featured_img')->storeAs('public/blog',$filename);

        Blog::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'images'     => $filename
            ]);
        return redirect('/home');
    }

    public function delete($id)
    {
        Blog::destroy($id);
        return redirect('/home');
    }
}
