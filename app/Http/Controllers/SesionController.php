<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SesionController extends Controller
{
    /*public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'message' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('message');*/
        
        public function store(LoginRequest $request)
        {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials))
        {
            return back()->withErrors([
                'message' => 'Las credenciales proporcionadas no coinciden.',
            ])->onlyInput('message');
        }
        //$credentials = $request->to('/login')->withErrors('auth/faild');
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user);

        /*
        //OTRA MANERA:
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Credenciales incorrectas.',
            ]);

        } else {

            if(auth()->user()->rol_id == '1') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/home');
            }
        }*/
    }
    public function authenticated(Request $request, $user)
    {
        return redirect('/home');
    }
}
