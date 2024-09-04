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
        return "add item";
    }

    public function editItem(Request $request, $id)
    {
        return "edit item";
    }

    public function deleteItem(Request $request, $id)
    {
        return "delete item";
    }
}
