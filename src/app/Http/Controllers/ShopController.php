<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area; 
use App\Models\Genre;

class ShopController extends Controller
{
    public function index()
  {
    $areas = Area::all();
    $genres = Genre::all();

    return view('shops.index', compact('areas', 'genres'));
  }

  public function search(Request $request)
    {
      
      return redirect()->route('shops.index');
    }

  public function detail($shop_id)
  {
    return view('shops.detail', ['shop_id' => $shop_id]);
  }

  public function done()
  {
    return view('done');
  }
}
