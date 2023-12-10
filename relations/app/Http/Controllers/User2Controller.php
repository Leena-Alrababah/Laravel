<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User2;

class User2Controller extends Controller
{
    public function index()
    {
        // $phone = User2::find(1)->phone;
        // dd($phone);
        $user = Phone::with('user')->find(1);
        // dd($user);
        return view('home', ['phone' => $user]);
}
}
