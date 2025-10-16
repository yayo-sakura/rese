<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::where('user_id', Auth::id())
            ->with('shop')
            ->get();

        return view('mypage.favorites', compact('favorites'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
        ]);

        Favorite::firstOrCreate([
            'user_id' => Auth::id(),
            'shop_id' => $validated['shop_id'],
        ]);

        return back();
    }

    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
        ]);
        
        Favorite::where('user_id', Auth::id())
            ->where('shop_id', $validated['shop_id'])
            ->delete();

        return back();
    }
}
