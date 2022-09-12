<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Kuliner',
            'kuliner' => Kuliner::paginate(5)
        ];

        return view('informasi.kuliner', ['data' => $data]);
    }
    public function admIndexKuliner()
    {
        $data = [
            'judul' => 'Kuliner',
            'kuliner' => Kuliner::paginate(5)
        ];

        return view('admin.adm_informasi.adm_kuliner', ['data' => $data]);
    }

    public function adminTKuliner()
    {
        return view('admin.adm_informasi.adm_tmbh_kuliner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_kuliner' => 'required|unique:Kuliner,judul_kuliner', //unique samain dengan nama tabel dalam database
            'foto_kuliner' => 'required|mimes:png,jpg,jpeg',
            'highlight_kuliner' => 'required',
            'detail_kuliner' => 'required',
            'kategori_kuliner' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_kuliner->getClientOriginalName() . '-' . time() . '.' . $request->foto_kuliner->extension();

        // memindahkan file ke directory public
        $request->foto_kuliner->move(public_path('img'), $imgName);

        //create
        Kuliner::create([
            'judul_kuliner' => $request->judul_kuliner,
            'slug' => Str::slug($request->judul_kuliner, '-'),
            'foto_kuliner' => $imgName,
            'highlight_kuliner' => $request->highlight_kuliner,
            'detail_kuliner' => $request->detail_kuliner,
            'kategori_kuliner' => $request->kategori_kuliner,
        ]);

        return redirect('/admin/kuliner');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'kuliner' => Kuliner::find($id)
        ];

        return view('informasi.kuliner.vkuliner', ['data' => $data]);
    }

    // fungsi edit
    public function edit($id)
    {
        $data = [
            'kuliner' => Kuliner::find($id)
        ];

        return view('admin.adm_informasi.adm_edit_kuliner', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {
        $oldData = Kuliner::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_kuliner != '') {
            $request->validate([
                'judul_kuliner' => 'required|unique:Kuliner,judul_kuliner',
                'kategori_kuliner' => 'required',
                'highlight_kuliner' => 'required',
                'detail_kuliner' => 'required',
                'foto_kuliner' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_kuliner->getClientOriginalName() . '-' . time() . '.' . $request->foto_kuliner->extension();

            // memindahkan file ke dirctory public
            $request->foto_kuliner->move(public_path('img'), $imgName);
        } elseif ($request->judul_kuliner != $oldData->judul_kuliner) {
            $request->validate([
                'judul_kuliner' => 'required|unique:Kuliner,judul_kuliner',
                'kategori_kuliner' => 'required',
                'highlight_kuliner' => 'required',
                'detail_kuliner' => 'required',
                'foto_kuliner' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_kuliner != '') {
                $imgName = $request->foto_kuliner->getClientOriginalName() . '-' . time() . '.' . $request->foto_kuliner->extension();

                // memindahkan file ke dirctory public
                $request->foto_kuliner->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_kuliner;
            }
        } else {
            $request->validate([
                'judul_kuliner' => 'required|unique:Kuliner,judul_kuliner',
                'kategori_kuliner' => 'required',
                'highlight_kuliner' => 'required',
                'detail_kuliner' => 'required',
                'foto_kuliner' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_kuliner;
        }


        Kuliner::where('id', $id)->update([
            'judul_kuliner' => $request->judul_kuliner,
            'kategori_kuliner' => $request->kategori_kuliner,
            'highlight_kuliner' => $request->highlight_kuliner,
            'detail_kuliner' => $request->detail_kuliner,
            'foto_kuliner' => $imgName
        ]);
        return redirect('/admin/kuliner');
    }


    // fungsi delete
    public function destroy($id)
    {
        $del = Kuliner::find($id);
        $hps = $del->foto_kuliner;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/kuliner');
    }
}
