<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use Carbon\Carbon;

class ItemsController extends Controller
{
    public function index()
    {
    	return Item::all();
    }

    public function show($id)
    {
        return Item::where('id', $id)->first();
    }

    public function insert(Request $request)
    {
    	$item_code 	= $request->item_code;
    	$item_name 	= $request->item_name;
    	$price 		= $request->price;
    	$date 		= Carbon::now();

    	$query = Item::insert(['item_code' => $item_code, 'item_name' => $item_name, 'price' => $price, 'created_at' => $date]);

    	return response()->json(200);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $item_code  = $request->item_code;
        $item_name  = $request->item_name;
        $price      = $request->price;
        $date       = Carbon::now();

        $query = Item::where('id', $id)->update(['item_code' => $item_code, 'item_name' => $item_name, 'price' => $price, 'updated_at' => $date]);

        return response()->json(200);
    }

    public function destroy($id)
    {
    	$query = Item::destroy($id);
    	
    	return response()->json(200);
    }
}