<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getItems(Request $request)
    {
        return Item::all();
    }

    public function addItem(Request $request)
    {
        $data = $request->all();
        return Item::create($data);
    }

    public function editItem(Request $request, $id)
    {
        $item = Item::find($id);
        $data = $request->all();

        return $item->update($data);
    }

    public function deleteItem(Request $request, $id)
    {
        return Item::destroy($id);
    }
}
