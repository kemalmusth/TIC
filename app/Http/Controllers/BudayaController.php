<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Budaya',
            'budaya' => Budaya::paginate(5)
        ];

        return view('informasi.budaya', ['data' => $data]);
    }
    public function admIndexBudaya()
    {
        $data = [
            'judul' => 'Budaya',
            'budaya' => Budaya::paginate(5)
        ];

        return view('admin.adm_informasi.adm_budaya', ['data' => $data]);
    }

    public function adminTBudaya()
    {
        return view('admin.adm_informasi.adm_tmbh_budaya');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_budaya' => 'required|unique:Budaya,judul_budaya', //unique samain dengan nama tabel dalam database
            'foto_budaya' => 'required|mimes:png,jpg,jpeg',
            'highlight_budaya' => 'required',
            'detail_budaya' => 'required',
            'kategori_budaya' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_budaya->getClientOriginalName() . '-' . time() . '.' . $request->foto_budaya->extension();

        // memindahkan file ke directory public
        $request->foto_budaya->move(public_path('img'), $imgName);

        //create
        Budaya::create([
            'judul_budaya' => $request->judul_budaya,
            'foto_budaya' => $imgName,
            'highlight_budaya' => $request->highlight_budaya,
            'detail_budaya' => $request->detail_budaya,
            'kategori_budaya' => $request->kategori_budaya,
        ]);

        return redirect('/admin/budaya');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'budaya' => Budaya::find($id)
        ];

        return view('informasi.budaya.vbudaya', ['data' => $data]);
    }


    // fungsi edit
    public function edit($id)
    {
        $data = [
            'budaya' => Budaya::find($id)
        ];

        return view('admin.adm_informasi.adm_edit_budaya', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {
        $oldData = Budaya::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_budaya != '') {
            $request->validate([
                'judul_budaya' => 'required|unique:Budaya,judul_budaya',
                'kategori_budaya' => 'required',
                'highlight_budaya' => 'required',
                'detail_budaya' => 'required',
                'foto_budaya' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_budaya->getClientOriginalName() . '-' . time() . '.' . $request->foto_budaya->extension();

            // memindahkan file ke dirctory public
            $request->foto_budaya->move(public_path('img'), $imgName);
        } elseif ($request->judul_budaya != $oldData->judul_budaya) {
            $request->validate([
                'judul_budaya' => 'required|unique:Budaya,judul_budaya',
                'kategori_budaya' => 'required',
                'highlight_budaya' => 'required',
                'detail_budaya' => 'required',
                'foto_budaya' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_budaya != '') {
                $imgName = $request->foto_budaya->getClientOriginalName() . '-' . time() . '.' . $request->foto_budaya->extension();

                // memindahkan file ke dirctory public
                $request->foto_budaya->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_budaya;
            }
        } else {
            $request->validate([
                'judul_budaya' => 'required|unique:Budaya,judul_budaya',
                'kategori_budaya' => 'required',
                'highlight_budaya' => 'required',
                'detail_budaya' => 'required',
                'foto_budaya' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_budaya;
        }


        Budaya::where('id', $id)->update([
            'judul_budaya' => $request->judul_budaya,
            'kategori_budaya' => $request->kategori_budaya,
            'highlight_budaya' => $request->highlight_budaya,
            'detail_budaya' => $request->detail_budaya,
            'foto_budaya' => $imgName
        ]);
        return redirect('/admin/budaya');
    }


    // fungsi delete
    public function destroy($id)
    {
        $del = Budaya::find($id);
        $hps = $del->foto_budaya;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/budaya');
    }
}
