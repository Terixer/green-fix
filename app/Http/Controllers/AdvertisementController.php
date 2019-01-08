<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Picture;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        $advertisements = Advertisement::where('isAccepted', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('advertisement.index', [
            'advertisements' => $advertisements
        ]);
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
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'phone' => 'required_without:email',
            'email' => 'required_without:phone|email',
//            'pictures' => 'required',
            'pictures.*' => 'image|mimes:jpeg,bmp,png'
        ]);
        $advertisement = new Advertisement();
        $advertisement->title = $validatedData['title'];
        $advertisement->description = $validatedData['description'];
        $advertisement->phone = $validatedData['phone'];
        $advertisement->email = $validatedData['email'];
        $advertisement->user_id = \Auth::user()->id;
        $advertisement->save();
        foreach ($request->file('pictures') as $picture) {
            $filename = $picture->store('public/pictures');
            Picture::create([
                'advertisement_id' => $advertisement->id,
                'filename' => $filename
            ]);
        }

        return redirect()->route('showAdvertisement', ['id' => $advertisement->id]);
    }


    public function show($id){
        $advertisement = Advertisement::where('id',$id)->first();
        $user = User::where('id',$advertisement->user_id)->first();

        return view('advertisement.show',[
            'advertisement' => $advertisement,
            'user' => $user
        ]);
    }
}
