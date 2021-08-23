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

    public function Edit($id)
    {
        $item = Item::findOrFail($id);

       return view('item.itemEdit', compact('item'));
    }

    public function Update(Request $request)
    {
        $item = Item::findOrFail($request->id);

        $item->name = $request->name;
        $item->type = $request->type;
        $item->qty = $request->qty;

        $item->Update();

        return redirect('item')->with('message', 'Item Updated successfully');
    }

    public function Delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect('item')->with('message', 'Item Deleted successfully');
    }
}
