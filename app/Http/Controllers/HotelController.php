<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Hotel',
            'hotel' => Hotel::paginate(5)
        ];

        return view('wisata.hotel', ['data' => $data]);
    }
    public function admIndexHotel()
    {
        $data = [
            'judul' => 'Hotel',
            'hotel' => Hotel::paginate(5)
        ];

        return view('admin.adm_wisata.adm_hotel', ['data' => $data]);
    }

    public function adminTHotel()
    {
        return view('admin.adm_wisata.adm_tmbh_hotel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_hotel' => 'required|unique:Hotel,judul_hotel', //unique samain dengan nama tabel dalam database
            'foto_hotel' => 'required|mimes:png,jpg,jpeg',
            'highlight_hotel' => 'required',
            'detail_hotel' => 'required',
            'harga_hotel' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_hotel->getClientOriginalName() . '-' . time() . '.' . $request->foto_hotel->extension();

        // memindahkan file ke directory public
        $request->foto_hotel->move(public_path('img'), $imgName);

        //create
        Hotel::create([
            'judul_hotel' => $request->judul_hotel,
            'foto_hotel' => $imgName,
            'highlight_hotel' => $request->highlight_hotel,
            'detail_hotel' => $request->detail_hotel,
            'harga_hotel' => $request->harga_hotel,
        ]);

        return redirect('/admin/hotel');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'hotel' => Hotel::find($id)
        ];

        return view('wisata.hotel.vhotel', ['data' => $data]);
    }

    // fungsi edit
    public function edit($id)
    {
        $data = [
            'hotel' => Hotel::find($id)
        ];

        return view('admin.adm_wisata.adm_edit_hotel', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {
        $oldData = Hotel::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_hotel != '') {
            $request->validate([
                'judul_hotel' => 'required|unique:Hotel,judul_hotel',
                'harga_hotel' => 'required',
                'highlight_hotel' => 'required',
                'detail_hotel' => 'required',
                'foto_hotel' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_hotel->getClientOriginalName() . '-' . time() . '.' . $request->foto_hotel->extension();

            // memindahkan file ke dirctory public
            $request->foto_hotel->move(public_path('img'), $imgName);
        } elseif ($request->judul_hotel != $oldData->judul_hotel) {
            $request->validate([
                'judul_hotel' => 'required|unique:Hotel,judul_hotel',
                'harga_hotel' => 'required',
                'highlight_hotel' => 'required',
                'detail_hotel' => 'required',
                'foto_hotel' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_hotel != '') {
                $imgName = $request->foto_hotel->getClientOriginalName() . '-' . time() . '.' . $request->foto_hotel->extension();

                // memindahkan file ke dirctory public
                $request->foto_hotel->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_hotel;
            }
        } else {
            $request->validate([
                'judul_hotel' => 'required|unique:Hotel,judul_hotel',
                'harga_hotel' => 'required',
                'highlight_hotel' => 'required',
                'detail_hotel' => 'required',
                'foto_hotel' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_hotel;
        }


        Hotel::where('id', $id)->update([
            'judul_hotel' => $request->judul_hotel,
            'harga_hotel' => $request->harga_hotel,
            'highlight_hotel' => $request->highlight_hotel,
            'detail_hotel' => $request->detail_hotel,
            'foto_hotel' => $imgName
        ]);
        return redirect('/admin/hotel');
    }

    // fungsi delete
    public function destroy($id)
    {
        $del = Hotel::find($id);
        $hps = $del->foto_hotel;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/hotel');
    }
}
