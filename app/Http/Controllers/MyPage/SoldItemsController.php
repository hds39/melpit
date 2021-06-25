<?php

namespace App\Http\Controllers\mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoldItemsController extends Controller
{
    public function showSolditems()
    {
        $user = Auth::user();

        $items = $user->soldItems()->orderBy('id', 'DESC')->get();

        return view('mypage.sold_items')
            ->with('items', $items);
    }
}
