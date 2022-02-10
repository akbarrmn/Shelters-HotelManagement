<?php

namespace App\Http\Controllers;

use App\Models\booked_list;
use App\Models\catalog_room;
use App\Models\news;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
        $items = catalog_room::with(['booked_list'])->get();
        $news = news::all();
        return view('pages.home',[
            'items' => $items,
            'news' => $news

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $kategori_room = catalog_room::where('title', $request->kategori)->first();

        //Menghitung interval check-in dan check-out
        $cindate = $request->date_in;
        $cotdate = $request->date_out;
        $datetime1 = new DateTime($cindate);
        $datetime2 = new DateTime($cotdate);
        $interval = $datetime1->diff($datetime2);
        $hasil = ($interval->format('%a'))+1;

        //Reset specific session
        session()->forget('Success');
        session()->forget('Gagal');


        if ($datetime2 >= $datetime1) {
            //Insert data booking
            $data = new booked_list();
            $data->nama = $request->name;
            $data->ktp = $request->ktp;
            $data->nohp = $request->contact;
            $data->catalog_room_id = $kategori_room->id;
            $data->checkin = $request->date_in;
            $data->checkout = $request->date_out;
            $data->lama_menginap = $hasil;

            //Membuat variabel untuk menghitung avaibility pemesanan
            $jumlah_kamar_sekarang = $kategori_room->jumlah;
            $jumlah_kamar_digunakan = $kategori_room->kamar_digunakan;

            if ($jumlah_kamar_sekarang - $jumlah_kamar_digunakan >= 1 && $jumlah_kamar_digunakan <= $jumlah_kamar_sekarang) {
                $kategori_room->kamar_digunakan = $jumlah_kamar_digunakan+=1;
                Session::put('Success', 'Sukses Booking Kamar');
                $kategori_room->save();
                $data->save();

            }else{
                Session::put('Gagal', 'Kamar Penuh, gagal booking kamar');
            };

        } else {
            Session::put('Gagal', 'Anda salah menginputkan tanggal, Gagal booking kamar');
        }

        return redirect()->route('alert');
    }
}
