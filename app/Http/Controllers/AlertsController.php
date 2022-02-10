<?php

namespace App\Http\Controllers;

use App\Models\booked_list;
use App\Models\catalog_room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mengambil data dari database dengan model booked_list ()
        $name = Auth::user();
        $item = booked_list::where('nama', '=', $name->name )->get();

        return view('pages.alert',[
            'items' => $item
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = booked_list::findOrFail($id);
        $item->delete();


        $kategori_room = catalog_room::first();
        $kategori_room->kamar_digunakan = $kategori_room->kamar_digunakan-1;
        $kategori_room->save();

        return redirect()->route('alert');
    }
}
