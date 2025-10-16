<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Favorite;
use Carbon\Carbon;

class MyPageController extends Controller
{
  public function index()
    {
      $user = \App\Models\User::first();

      // $user = Auth::user();

      $reservations = Reservation::where('user_id', $user->id)
          ->where('date', '>=', Carbon::today())
          ->with('shop')
          ->orderBy('date', 'asc')
          ->orderBy('time', 'asc')
          ->get();

      $favorites = $user->favorites()->with('shop')->get();

      return view('mypage.index', compact('user', 'reservations', 'favorites'));
    }
}
