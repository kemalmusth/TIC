<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Pengumuman',
            'pengumuman' => Pengumuman::paginate(5)
        ];

        return view('media.pengumuman', ['data' => $data]);
    }
    public function admIndexPengumuman()
    {
        $data = [
            'judul' => 'Pengumuman',
            'pengumuman' => Pengumuman::paginate(5)
        ];

        return view('admin.adm_media.adm_pengumuman', ['data' => $data]);
    }

    public function adminTPengumuman()
    {
        return view('admin.adm_media.adm_tmbh_pengumuman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_pengumuman' => 'required|unique:Pengumuman,judul_pengumuman', //unique samain dengan nama tabel dalam database
            'foto_pengumuman' => 'required|mimes:png,jpg,jpeg',
            'highlight_pengumuman' => 'required',
            'detail_pengumuman' => 'required',
            'kategori_pengumuman' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_pengumuman->getClientOriginalName() . '-' . time() . '.' . $request->foto_pengumuman->extension();

        // memindahkan file ke directory public
        $request->foto_pengumuman->move(public_path('img'), $imgName);

        //create
        Pengumuman::create([
            'judul_pengumuman' => $request->judul_pengumuman,
            'foto_pengumuman' => $imgName,
            'highlight_pengumuman' => $request->highlight_pengumuman,
            'detail_pengumuman' => $request->detail_pengumuman,
            'kategori_pengumuman' => $request->kategori_pengumuman,
        ]);

        return redirect('/admin/pengumuman');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'pengumuman' => Pengumuman::find($id)
        ];

        return view('media.pengumuman.vpengumuman', ['data' => $data]);
    }

    // fungsi edit
    public function edit($id)
    {
        $data = [
            'pengumuman' => Pengumuman::find($id)
        ];

        return view('admin.adm_media.adm_edit_pengumuman', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {
        $oldData = Pengumuman::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_pengumuman != '') {
            $request->validate([
                'judul_pengumuman' => 'required|unique:Pengumuman,judul_pengumuman',
                'kategori_pengumuman' => 'required',
                'highlight_pengumuman' => 'required',
                'detail_pengumuman' => 'required',
                'foto_pengumuman' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_pengumuman->getClientOriginalName() . '-' . time() . '.' . $request->foto_pengumuman->extension();

            // memindahkan file ke dirctory public
            $request->foto_pengumuman->move(public_path('img'), $imgName);
        } elseif ($request->judul_pengumuman != $oldData->judul_pengumuman) {
            $request->validate([
                'judul_pengumuman' => 'required|unique:Pengumuman,judul_pengumuman',
                'kategori_pengumuman' => 'required',
                'highlight_pengumuman' => 'required',
                'detail_pengumuman' => 'required',
                'foto_pengumuman' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_pengumuman != '') {
                $imgName = $request->foto_pengumuman->getClientOriginalName() . '-' . time() . '.' . $request->foto_pengumuman->extension();

                // memindahkan file ke dirctory public
                $request->foto_pengumuman->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_pengumuman;
            }
        } else {
            $request->validate([
                'judul_pengumuman' => 'required|unique:Pengumuman,judul_pengumuman',
                'kategori_pengumuman' => 'required',
                'highlight_pengumuman' => 'required',
                'detail_pengumuman' => 'required',
                'foto_pengumuman' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_pengumuman;
        }


        Pengumuman::where('id', $id)->update([
            'judul_pengumuman' => $request->judul_pengumuman,
            'kategori_pengumuman' => $request->kategori_pengumuman,
            'highlight_pengumuman' => $request->highlight_pengumuman,
            'detail_pengumuman' => $request->detail_pengumuman,
            'foto_pengumuman' => $imgName
        ]);
        return redirect('/admin/pengumuman');
    }


    // fungsi delete
    public function destroy($id)
    {
        $del = Pengumuman::find($id);
        $hps = $del->foto_pengumuman;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/pengumuman');
    }
}
