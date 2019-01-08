<?php

namespace App\Http\Controllers;

use App\Advertisement;

class UserPanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showAdvertisements()
    {
        $advertisements = Advertisement::showAllAdvertisementsBelongTo(\Auth::user());
        return view('userPanel.advertisements', [
            'advertisements' => $advertisements
        ]);
    }
}
