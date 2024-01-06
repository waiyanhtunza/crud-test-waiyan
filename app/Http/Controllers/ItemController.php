<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view("items.index", ["items"=> $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("items.create");
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $items = $request->validate([
            "name"=> "required",
            "price"=>"required",
            "description"=>"required",
        ]);

        Item::create($items);
        return redirect()->route("items.index")->with("success","");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view("items.edit",['item'=> $item]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "name"=> "required",
            "price"=> "required",
            "description"=> "required",
        ]);

        $item = Item::findOrFail($id);

        $item->update($data);
        return redirect()->route("items.index")->with("success","error");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route("items.index")->with("success","");
        
    }
}
