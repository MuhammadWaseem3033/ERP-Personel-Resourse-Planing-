<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(5);
        return view('item.index',compact('items'));
    }
    public function form()
    {  
        $item = null;
        if (request('id')) {
            $item = Item::find(request('id'));
        }
        return view('item.form',compact('item')); 
    }
   
    public function delete($id){
        $item = Item::find($id);
        $item->delete();

        return redirect()->to(route('item.index'));
    }
}
