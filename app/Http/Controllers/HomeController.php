<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $annonces = Annonce::with('images')->where('date_debut', '<=', now())->get();

        return view('home', compact(['annonces']));
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
