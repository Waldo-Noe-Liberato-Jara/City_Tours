<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function UpdateName(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:15',
        ]);
        User::where('id','=',$id)->update(['name'=>$request['name']]);
        return redirect()->route('auth.profile');
    }

    public function UpdateEmail(Request $request, $id)
    {
        $request->validate([
            'email'=>'required|max:15',
        ]);
        User::where('id','=',$id)->update(['email'=>$request['email']]);
        return redirect()->route('auth.profile');
    }
    public function UpdateImage(Request $request, $id)
    {
        $request->validate([
            'imagen'=>'required|between:0,5000',
        ]);
        $user = User::findOrFail($id);
        if($request->hasFile('imagen')){

            if(auth()->user()->rol_id == '1'){
                Storage::delete('public/'.$user->imagen);
                $NombreImagen = time().'_'.$request->imagen->getClientOriginalName();
                $user->imagen = $request->file('imagen')->storeAs('admin_profile_picture',$NombreImagen, 'public');
            }else{
                Storage::delete('public/'.$user->imagen);
                $NombreImagen = time().'_'.$request->imagen->getClientOriginalName();
                $user->imagen = $request->file('imagen')->storeAs('users_profile_picture',$NombreImagen, 'public');
            }
        }else{
            $user->imagen = "";
        }
        User::where('id','=',$id)->update(['imagen'=>$user->imagen]);
        return redirect()->route('auth.profile');
    }
    public function UpdatePassword(Request $request, $id)
    {
        $request->validate([
            'password'=>'required|max:15',
        ]);
        User::where('id','=',$id)->update(['password'=>bcrypt($request['password'])]);
        return redirect()->route('auth.profile');
    }
    public function UpdateBackground(Request $request, $id){
        if ($request->fondo == 'Fondo Oscuro') {
            $user = User::where('id','=',$id)->update(['fondo'=> 'fondo-blanco', 'value'=> 'Fondo Blanco']);
        }else if($request->fondo == 'Fondo Blanco'){
            $user = User::where('id','=',$id)->update(['fondo'=> 'fondo-negro', 'value'=> 'Fondo Oscuro']);
        }
        return  back();
    }
}
