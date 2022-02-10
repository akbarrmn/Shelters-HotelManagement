<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookedListRequest;
use App\Models\booked_list;
use App\Models\catalog_room;
use DateTime;
use Illuminate\Http\Request;

class BookedListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = new booked_list();
        $item = $items->ambil();

        return view('pages.admin.booked-list.index',[
            'items' => $item,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $catalog_room= catalog_room::all();
        return view('pages.admin.booked-list.create',[
            'catalog_room' => $catalog_room
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookedListRequest $request)
    {
        $kategori_room = catalog_room::first();

        $cindate = $request->checkin;
        $cotdate = $request->checkout;
        $datetime1 = new DateTime($cindate);
        $datetime2 = new DateTime($cotdate);
        $interval = $datetime1->diff($datetime2);
        $hasil = ($interval->format('%a'))+1;

        $data = new booked_list();
        $data->catalog_room_id = $request->catalog_room_id;
        $data->nama = $request->nama;
        $data->ktp = $request->ktp;
        $data->nohp = $request->nohp;
        $data->checkin = $request->checkin;
        $data->checkout = $request->checkout;
        $data->lama_menginap = $hasil;
        $data->save();

        $jumlah_kamar_sekarang = $kategori_room->jumlah;
        $jumlah_kamar_digunakan = $kategori_room->kamar_digunakan;

        if ($jumlah_kamar_sekarang - $jumlah_kamar_digunakan >= 1 && $jumlah_kamar_digunakan <= $jumlah_kamar_sekarang) {
            $kategori_room->kamar_digunakan = $jumlah_kamar_digunakan+=1;
            $kategori_room->save();
            $data->save();

        };
        return redirect()->route('booked-list.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = booked_list::findOrFail($id);
        $catalog_room= catalog_room::all();

        return view('pages.admin.booked-list.edit',[
            'item' => $item,
            'catalog_room' => $catalog_room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookedListRequest $request, $id)
    {
        $data = $request->all();
        $item = booked_list::findOrFail($id);

        $item -> update($data);

        return redirect()->route('booked-list.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_room = catalog_room::first();
        $kategori_room->kamar_digunakan = $kategori_room->kamar_digunakan-1;
        $kategori_room->save();

        $item = booked_list::findOrFail($id);
        $item->delete();

        return redirect()->route('booked-list.index');
    }
}
