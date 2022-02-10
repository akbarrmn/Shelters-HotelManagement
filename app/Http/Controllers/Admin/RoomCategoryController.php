<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CatalogRoomRequest;
use App\Models\catalog_room;
use CreateBookedListTable;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = catalog_room::all();
        return view('pages.admin.room-category.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.room-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogRoomRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/gallery','public');

        catalog_room::create($data);
        return redirect()->route('room-category.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = catalog_room::findOrFail($id);

        return view('pages.admin.room-category.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatalogRoomRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/gallery','public');

        $item = catalog_room::findOrFail($id);

        $item -> update($data);

        return redirect()->route('room-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = catalog_room::findOrFail($id);
        $item->delete();

        return redirect()->route('room-category.index');
    }
}
