<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();

       return view('item.item', ['allItem' => $items]);
    }

    public function ItemSave(Request $request)
    {
            $this->validate($request, [
                'name' => 'required',
                'type' => 'required',
                'qty' => 'required',

            ]);

            $item = new Item();
            $item->name = $request->name;
            $item->type = $request->type;
            $item->qty = $request->qty;

            $item->save();

            return redirect('item')->with('message', 'Item added successfully');
    }
}
