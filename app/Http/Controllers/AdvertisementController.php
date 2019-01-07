<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
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
    public function index()
    {
        return view('advertisement.index');
    }

    /**
     * Show the form to create a new advertisement.
     *
     * @return Response
     */
    public function create()
    {
        return view('advertisement.create');
    }

    /**
     * Store a new advertisement.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

//        Advertisement::create(array_merge($request->all(), ['index' => 'value']));
        dump("hi");
    }
}
