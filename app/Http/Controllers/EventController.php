<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Event',
            'event' => Event::paginate(5)
        ];

        return view('layananpublik.event', ['data' => $data]);
    }
    public function admIndexEvent()
    {
        $data = [
            'judul' => 'Event',
            'event' => Event::paginate(5)
        ];

        return view('admin.adm_layananpublik.adm_event', ['data' => $data]);
    }

    public function adminTEvent()
    {
        return view('admin.adm_layananpublik.adm_tmbh_event');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_event' => 'required|unique:Event,judul_event', //unique samain dengan nama tabel dalam database
            'foto_event' => 'required|mimes:png,jpg,jpeg',
            'highlight_event' => 'required',
            'detail_event' => 'required',
            'kategori_event' => 'required',
        ]);

        // memberi nama supaya file tidak sama
        $imgName = $request->foto_event->getClientOriginalName() . '-' . time() . '.' . $request->foto_event->extension();

        // memindahkan file ke directory public
        $request->foto_event->move(public_path('img'), $imgName);

        //create
        Event::create([
            'judul_event' => $request->judul_event,
            'foto_event' => $imgName,
            'highlight_event' => $request->highlight_event,
            'detail_event' => $request->detail_event,
            'kategori_event' => $request->kategori_event,
        ]);

        return redirect('/admin/event');
    }

    // fungsi view
    public function view($id)
    {
        $data = [
            'event' => Event::find($id)
        ];

        return view('layananpublik.event.vevent', ['data' => $data]);
    }

    // fungsi edit
    public function edit($id)
    {
        $data = [
            'event' => Event::find($id)
        ];

        return view('admin.adm_layananpublik.adm_edit_event', ['data' => $data]);
    }

    //fungsi update

    public function update(Request $request, $id)
    {
        $oldData = Event::find($id);
        // dd($request);
        // memberi nama supaya file tidak sama
        if ($request->foto_event != '') {
            $request->validate([
                'judul_event' => 'required|unique:Event,judul_event',
                'kategori_event' => 'required',
                'highlight_event' => 'required',
                'detail_event' => 'required',
                'foto_event' => 'required|mimes:png,jpg,jpeg',
            ]);

            $imgName = $request->foto_event->getClientOriginalName() . '-' . time() . '.' . $request->foto_event->extension();

            // memindahkan file ke dirctory public
            $request->foto_event->move(public_path('img'), $imgName);
        } elseif ($request->judul_event != $oldData->judul_event) {
            $request->validate([
                'judul_event' => 'required|unique:Event,judul_event',
                'kategori_event' => 'required',
                'highlight_event' => 'required',
                'detail_event' => 'required',
                'foto_event' => 'required|mimes:png,jpg,jpeg',
            ]);
            if ($request->foto_event != '') {
                $imgName = $request->foto_event->getClientOriginalName() . '-' . time() . '.' . $request->foto_event->extension();

                // memindahkan file ke dirctory public
                $request->foto_event->move(public_path('img'), $imgName);
            } else {
                $imgName = $oldData->foto_event;
            }
        } else {
            $request->validate([
                'judul_event' => 'required|unique:Event,judul_event',
                'kategori_event' => 'required',
                'highlight_event' => 'required',
                'detail_event' => 'required',
                'foto_event' => 'required|mimes:png,jpg,jpeg',
            ]);
            $imgName = $oldData->foto_event;
        }


        Event::where('id', $id)->update([
            'judul_event' => $request->judul_event,
            'kategori_event' => $request->kategori_event,
            'highlight_event' => $request->highlight_event,
            'detail_event' => $request->detail_event,
            'foto_event' => $imgName
        ]);
        return redirect('/admin/event');
    }


    // fungsi delete
    public function destroy($id)
    {
        $del = Event::find($id);
        $hps = $del->foto_event;
        $gmbrHps = public_path('img/' . $hps);
        if (file_exists($gmbrHps)) {
            unlink($gmbrHps);
        }

        $del->delete();

        return redirect('/admin/event');
    }
}
