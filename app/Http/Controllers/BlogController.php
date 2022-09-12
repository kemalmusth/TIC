<?php

namespace App\Http\Controllers;

use App\Models\BlogWisata;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Blog Wisata',
            'blogwisata' => BlogWisata::all()
        ];

        return view('wisata.blogwisata', ['data' => $data]);
    }
    public function admIndexBlog()
    {
        $data = [
            'judul' => 'Blog Wisata',
            'blogwisata' => BlogWisata::paginate(5)
        ];

        return view('admin.adm_wisata.adm_blogwisata', ['data' => $data]);
    }

    public function adminTBlog()
    {
        return view('admin.adm_wisata.adm_tmbh_blogwisata');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_blog' => 'required|unique:Blog,judul_blog', //unique samain dengan nama tabel dalam database
            'foto_blog' => 'required|mimes:png,jpg,jpeg',
            'highlight_blog' => 'required',
            'detail_blog' => 'required',
            'kategori_blog' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_blog->getClientOriginalName() . '-' . time() . '.' . $request->foto_blog->extension();

        // memindahkan file ke directory public
        $request->foto_blog->move(public_path('img'), $imgName);

        //create
        BlogWisata::create([
            'judul_blog' => $request->judul_blog,
            'foto_blog' => $imgName,
            'highlight_blog' => $request->highlight_blog,
            'detail_blog' => $request->detail_blog,
            'kategori_blog' => $request->kategori_blog,
        ]);

        return redirect('/admin/blogwisata');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'blogwisata' => BlogWisata::find($id)
        ];

        return view('wisata.blogwisata.vblogwisata', ['data' => $data]);
    }

    // fungsi edit
    public function edit($id)
    {
        $data = [
            'blogwisata' => BlogWisata::find($id)
        ];

        return view('admin.adm_wisata.adm_edit_blogwisata', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {
        $oldData = BlogWisata::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_blog != '') {
            $request->validate([
                'judul_blog' => 'required|unique:Blog,judul_blog',
                'kategori_blog' => 'required',
                'highlight_blog' => 'required',
                'detail_blog' => 'required',
                'foto_blog' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_blog->getClientOriginalName() . '-' . time() . '.' . $request->foto_blog->extension();

            // memindahkan file ke dirctory public
            $request->foto_blog->move(public_path('img'), $imgName);
        } elseif ($request->judul_blog != $oldData->judul_blog) {
            $request->validate([
                'judul_blog' => 'required|unique:Blog,judul_blog',
                'kategori_blog' => 'required',
                'highlight_blog' => 'required',
                'detail_blog' => 'required',
                'foto_blog' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_blog != '') {
                $imgName = $request->foto_blog->getClientOriginalName() . '-' . time() . '.' . $request->foto_blog->extension();

                // memindahkan file ke dirctory public
                $request->foto_blog->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_blog;
            }
        } else {
            $request->validate([
                'judul_blog' => 'required|unique:Blog,judul_blog',
                'kategori_blog' => 'required',
                'highlight_blog' => 'required',
                'detail_blog' => 'required',
                'foto_blog' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_blog;
        }


        BlogWisata::where('id', $id)->update([
            'judul_blog' => $request->judul_blog,
            'kategori_blog' => $request->kategori_blog,
            'highlight_blog' => $request->highlight_blog,
            'detail_blog' => $request->detail_blog,
            'foto_blog' => $imgName
        ]);
        return redirect('/admin/blogwisata');
    }


    // fungsi delete
    public function destroy($id)
    {
        $del = BlogWisata::find($id);
        $hps = $del->foto_blog;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/blogwisata');
    }
}
