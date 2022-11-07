<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\LugaresRequest;

class LugaresController extends Controller
{
    public function index(){
        $lugar = Lugares::orderBy('nombre', 'ASC')->get();
        //return view('tourist_places/lugares', compact('lugar'));
        return view('tourist_places/lugares')->with('lugar', $lugar);
    }
    /* FUNCIONES DE BUSQUEDA */
    public function search(Request $request){
        $lugar = Lugares::where('nombre', 'like', '%'.$request->nombre.'%')->orderBy('nombre', 'ASC')->get();
        return view('tourist_places/lugares')->with('lugar', $lugar);
    }
    public function search_letter($letra){
        $lugar = Lugares::where('nombre', 'like', $letra.'%')->orderBy('nombre', 'ASC')->get();
        return view('tourist_places/lugares')->with('lugar', $lugar);
    }
    public function create(){
        return view('tourist_places/form');
    }
    public function store(LugaresRequest $request, Lugares $lugar){
        $lugar->nombre = $request->nombre;
        $lugar->descripcion = $request->descripcion;
        $lugar->ubicacion = $request->ubicacion;

        if($request->hasFile('imagen')){
            $NombreImagen = time().'_'.$request->imagen->getClientOriginalName();
            $lugar->imagen = $request->file('imagen')->storeAs('images_of_places',$NombreImagen, 'public');
        }else{
            $lugar->imagen = "";
        }

        $lugar->save();
        return redirect()->route('lugares.show',$lugar->id);
    }
    public function show(Lugares $lugar)
    {
        return view('tourist_places/lugar')->with('lugar', $lugar);
    }


    public function edit(Lugares $lugar)
    {
        return view('tourist_places/form')->with('lugar', $lugar);;
    }

    public function update(LugaresRequest $request, $id)
    {
        $lugar = Lugares::findOrFail($id);
        
        if($request->hasFile('imagen')){
            Storage::delete('public/'.$lugar->imagen);
            $NombreImagen = time().'_'.$request->imagen->getClientOriginalName();
            $lugar->imagen = $request->file('imagen')->storeAs('images_of_places',$NombreImagen, 'public');
        }else{
            $lugar->imagen = "";
        }

        Lugares::where('id','=',$id)->update([
            'nombre'=>$request->nombre, 
            'descripcion'=>$request->descripcion, 
            'ubicacion'=>$request->ubicacion,
            'imagen'=>$lugar->imagen,
        ]);

        return redirect()->route('lugares.show',$lugar->id);
    }

    public function destroy($id)
    {
        $lugar = Lugares::findOrFail($id);
        
        Storage::delete('public/'.$lugar->imagen);

        $lugar->delete();
        return redirect()->route('admin.index');
    }
}
