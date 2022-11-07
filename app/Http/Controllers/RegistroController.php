<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function store(RegisterRequest $request, User $user) {

        
        $user = User::create($request->validated());
        if($request->hasFile('imagen')){
            $NombreImagen = time().'_'.$request->imagen->getClientOriginalName();
            $user->imagen = $request->file('imagen')->storeAs('users_profile_picture',$NombreImagen, 'public');
        }
        $user->save();
        Auth::login($user);
        return redirect()->to('/home');
    }
}
