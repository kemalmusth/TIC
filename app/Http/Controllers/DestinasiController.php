<?php

namespace App\Http\Controllers;

use App\Models\DestinasiWisata;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Destinasi Wisata',
            'destinasiwisata' => DestinasiWisata::paginate(4)
        ];

        return view('wisata.destinasiwisata', ['data' => $data]);
    }
    public function admIndexDestinasi()
    {
        $data = [
            'judul' => 'Destinasi Wisata',
            'destinasiwisata' => DestinasiWisata::paginate(4)
        ];

        return view('admin.adm_wisata.adm_destinasiwisata', ['data' => $data]);
    }

    public function adminTDestinasi()
    {
        return view('admin.adm_wisata.adm_tmbh_destinasiwisata');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_destinasi' => 'required|unique:Destinasi,judul_destinasi', //unique samain dengan nama tabel dalam database
            'foto_destinasi' => 'required|mimes:png,jpg,jpeg',
            'highlight_destinasi' => 'required',
            'detail_destinasi' => 'required',
            'kategori_destinasi' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_destinasi->getClientOriginalName() . '-' . time() . '.' . $request->foto_destinasi->extension();

        // memindahkan file ke directory public
        $request->foto_destinasi->move(public_path('img'), $imgName);

        //create
        DestinasiWisata::create([
            'judul_destinasi' => $request->judul_destinasi,
            'foto_destinasi' => $imgName,
            'highlight_destinasi' => $request->highlight_destinasi,
            'detail_destinasi' => $request->detail_destinasi,
            'kategori_destinasi' => $request->kategori_destinasi,
        ]);

        return redirect('/admin/destinasiwisata');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'destinasiwisata' => DestinasiWisata::find($id)
        ];

        return view('wisata.destinasiwisata.vdestinasiwisata', ['data' => $data]);
    }

    // fungsi edit
    public function edit($id)
    {
        $data = [
            'destinasiwisata' => DestinasiWisata::find($id)
        ];

        return view('admin.adm_wisata.adm_edit_destinasiwisata', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {

        $oldData = DestinasiWisata::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_destinasi != '') {
            $request->validate([
                'judul_destinasi' => 'required',
                'kategori_destinasi' => 'required',
                'highlight_destinasi' => 'required',
                'detail_destinasi' => 'required',
                'foto_destinasi' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_destinasi->getClientOriginalName() . '-' . time() . '.' . $request->foto_destinasi->extension();

            // memindahkan file ke dirctory public
            $request->foto_destinasi->move(public_path('img'), $imgName);
        } elseif ($request->judul_destinasi != $oldData->judul_destinasi) {
            $request->validate([
                'judul_destinasi' => 'required',
                'kategori_destinasi' => 'required',
                'highlight_destinasi' => 'required',
                'detail_destinasi' => 'required',
                'foto_destinasi' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_destinasi != '') {
                $imgName = $request->foto_destinasi->getClientOriginalName() . '-' . time() . '.' . $request->foto_destinasi->extension();

                // memindahkan file ke dirctory public
                $request->foto_destinasi->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_destinasi;
            }
        } else {
            $request->validate([
                'judul_destinasi' => 'required',
                'kategori_destinasi' => 'required',
                'highlight_destinasi' => 'required',
                'detail_destinasi' => 'required',
                'foto_destinasi' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_destinasi;
        }


        DestinasiWisata::where('id', $id)->update([
            'judul_destinasi' => $request->judul_destinasi,
            'kategori_destinasi' => $request->kategori_destinasi,
            'highlight_destinasi' => $request->highlight_destinasi,
            'detail_destinasi' => $request->detail_destinasi,
            'foto_destinasi' => $imgName
        ]);
        return redirect('/admin/destinasiwisata');
    }

    // fungsi delete
    public function destroy($id)
    {
        $del = DestinasiWisata::find($id);
        $hps = $del->foto_destinasi;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/destinasiwisata');
    }
}
