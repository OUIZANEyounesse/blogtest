<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Visiteur;
use App\Models\Annonce;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // protected $table = 'visiteurs';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


   public function showLogin()
   {
       return view('auth.login');
   }


   public function login(Request $request)
    {
        //validate the form
    $this->validate($request, [
        'email' => 'required|string',
        'password' => 'required|min:8',
    ]);

    // dd(auth::guard('visiteur')->attempt(['email' => $request->email, 'password' => $request->password]));
    //attempt ro log the uer in
    // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
    $val = $request->only(['email', 'password']);
    dd(Auth::guard('visiteur')->attempt($val));
    if (Auth::guard('visiteur')->attempt(['email' => $request->email, 'password' => $request->password])) {
        dd("attempt");

        $request->session()->flash('success', 'vous êtes identifié ');
        //if successful
        return redirect()->intended('/professeur');
    }

    $request->session()->flash('danger', 'cin ou mot de passe incorect');
    //if unsuccessful
    return redirect()
        ->back();
        // ->withInput($request->only('email', 'remember'));
        // //validate the form
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required|min:8',
        // ]);

        // //attempt ro log the uer in
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

        //     dd('login');
        //     $request->session()->flash('success', 'vous êtes identifié ');
        //     //if successful
        //     return redirect()->intended('/');
        //     // return redirect()->route('etudiant');
        // }

        // // dd(1);
        // $request->session()->flash('danger', 'email ou mot de passe incorect');
        // //if unsuccessful
        // return redirect()
        //     ->route('home')
        //     ->withInput($request->only('email', 'remember'));
    }

    public function showRegister()
    {

        return view('visiteur.register');
    }
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:visiteurs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $visiteur = new  Visiteur();
        $visiteur->username     =  $request['username'];
        $visiteur->email        =  $request['email'];
        $visiteur->password     =  Hash::make($request->password);
        $visiteur->avatar       =  "images/avatars/avatar.png";
        $visiteur->save();

        $request->session()->flash('success', 'inscription success');
        $annonces = Annonce::with('images')->where('date_debut', '<=', now())->get();

        return view('home', compact(['annonces']));

    }



}
