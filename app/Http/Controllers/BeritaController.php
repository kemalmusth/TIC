<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Berita',
            'berita' => Berita::paginate(5)
        ];

        return view('media.berita', ['data' => $data]);
    }
    public function admIndexBerita()
    {
        $data = [
            'judul' => 'Berita',
            'berita' => Berita::paginate(5)
        ];

        return view('admin.adm_media.adm_berita', ['data' => $data]);
    }

    public function adminTBerita()
    {
        return view('admin.adm_media.adm_tmbh_berita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required|unique:Berita,judul_berita', //unique samain dengan nama tabel dalam database
            'foto_berita' => 'required|mimes:png,jpg,jpeg',
            'highlight_berita' => 'required',
            'detail_berita' => 'required',
            'kategori_berita' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_berita->getClientOriginalName() . '-' . time() . '.' . $request->foto_berita->extension();

        // memindahkan file ke directory public
        $request->foto_berita->move(public_path('img'), $imgName);

        //create
        Berita::create([
            'judul_berita' => $request->judul_berita,
            'slug' => Str::slug($request->judul_berita, '-'),
            'foto_berita' => $imgName,
            'highlight_berita' => $request->highlight_berita,
            'detail_berita' => $request->detail_berita,
            'kategori_berita' => $request->kategori_berita,
        ]);

        return redirect('/admin/berita');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'berita' => Berita::find($id)
        ];

        return view('media.berita.vberita', ['data' => $data]);
    }

    // fungsi edit
    public function edit($id)
    {
        $data = [
            'berita' => Berita::find($id)
        ];

        return view('admin.adm_media.adm_edit_berita', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {
        $oldData = Berita::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_berita != '') {
            $request->validate([
                'judul_berita' => 'required|unique:Berita,judul_berita',
                'kategori_berita' => 'required',
                'highlight_berita' => 'required',
                'detail_berita' => 'required',
                'foto_berita' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_berita->getClientOriginalName() . '-' . time() . '.' . $request->foto_berita->extension();

            // memindahkan file ke dirctory public
            $request->foto_berita->move(public_path('img'), $imgName);
        } elseif ($request->judul_berita != $oldData->judul_berita) {
            $request->validate([
                'judul_berita' => 'required|unique:Berita,judul_berita',
                'kategori_berita' => 'required',
                'highlight_berita' => 'required',
                'detail_berita' => 'required',
                'foto_berita' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_berita != '') {
                $imgName = $request->foto_berita->getClientOriginalName() . '-' . time() . '.' . $request->foto_berita->extension();

                // memindahkan file ke dirctory public
                $request->foto_berita->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_berita;
            }
        } else {
            $request->validate([
                'judul_berita' => 'required|unique:Berita,judul_berita',
                'kategori_berita' => 'required',
                'highlight_berita' => 'required',
                'detail_berita' => 'required',
                'foto_berita' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_berita;
        }


        Berita::where('id', $id)->update([
            'judul_berita' => $request->judul_berita,
            'kategori_berita' => $request->kategori_berita,
            'highlight_berita' => $request->highlight_berita,
            'detail_berita' => $request->detail_berita,
            'foto_berita' => $imgName
        ]);
        return redirect('/admin/berita');
    }


    // fungsi delete
    public function destroy($id)
    {
        $del = Berita::find($id);
        $hps = $del->foto_berita;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/berita');
    }
}
