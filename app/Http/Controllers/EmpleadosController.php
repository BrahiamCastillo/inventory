<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Empleado::with('rol_empleado', 'establecimiento')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->input('type') === 'agregarempleado') {

            $nombre = $request->input('nombre');
            $rolEmpleado = $request->input('rol_empleado');
            $establecimiento = $request->input('establecimiento');
            $newEmpleado = Empleado::create(['nombre' => $nombre,
            'rol_empleados_id' => $rolEmpleado,
            'establecimiento_id' => $establecimiento]);
            return $newEmpleado;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return Empleado::where('id',$request->input('id'))->with('rol_empleado', 'establecimiento')->get();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
