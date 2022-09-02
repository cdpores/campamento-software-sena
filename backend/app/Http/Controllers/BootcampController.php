<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bootcamp::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Capturar paylod
        //return $request->all();
        //Crear un nuevo bootcamp
       return Bootcamp::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bootcamp::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Encotrar el bootcamp por id
        $b=Bootcamp::find($id);
        //Actualizarlo
        $b->update($request->all());
        //Enviar response con el bootcamp actualizado
        return $b;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Encontrar el bootcamp a eliminar por id
        $b=Bootcamp::find($id);
        //Eliminarlo
        $b->delete();
        //Response con el objeto eliminado
        return $b;
    }
}
