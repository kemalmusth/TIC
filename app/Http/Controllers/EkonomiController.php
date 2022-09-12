<?php

namespace App\Http\Controllers;

use App\Models\Ekonomi;
use App\Models\EkonomiKreatif;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EkonomiController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Ekonomi',
            'ekonomi' => EkonomiKreatif::all()
        ];

        return view('informasi.ekonomi', ['data' => $data]);
    }
    public function admIndexEkonomi()
    {
        $data = [
            'judul' => 'Ekonomi',
            'ekonomi' => EkonomiKreatif::all()
        ];

        return view('admin.adm_informasi.adm_ekonomi', ['data' => $data]);
    }

    public function adminTEkonomi()
    {
        return view('admin.adm_informasi.adm_tmbh_ekonomi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_ekonomikreatif' => 'required|unique:Ekonomikreatif,judul_ekonomikreatif', //unique samain dengan nama tabel dalam database
            'foto_ekonomikreatif' => 'required|mimes:png,jpg,jpeg',
            'detail_ekonomikreatif' => 'required',
            'kategori_ekonomikreatif' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_ekonomikreatif->getClientOriginalName() . '-' . time() . '.' . $request->foto_ekonomikreatif->extension();

        // memindahkan file ke directory public
        $request->foto_ekonomikreatif->move(public_path('img'), $imgName);

        //create
        EkonomiKreatif::create([
            'judul_ekonomikreatif' => $request->judul_ekonomikreatif,
            'foto_ekonomikreatif' => $imgName,
            'detail_ekonomikreatif' => $request->detail_ekonomikreatif,
            'kategori_ekonomikreatif' => $request->kategori_ekonomikreatif,
        ]);

        return redirect('/admin/ekonomi');
    }


    // fungsi delete
    public function destroy($id)
    {
        $del = EkonomiKreatif::find($id);
        $hps = $del->foto_ekonomikreatif;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/ekonomi');
    }
}
