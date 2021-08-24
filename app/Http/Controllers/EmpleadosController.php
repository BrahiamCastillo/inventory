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
            $newEmpleado = new Empleado;
            $newEmpleado->nombre = $nombre;
            $newEmpleado->rol_empleados_id = $rolEmpleado;
            $newEmpleado->establecimiento_id = $establecimiento;
            $newEmpleado->save();
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
    public function update(Request $request)
    {
        //

        if($request->input('type') === 'editarempleado') {

            $nombre = $request->input('nombre');
            $rolEmpleado = $request->input('rol_empleado');
            $establecimiento = $request->input('establecimiento');
            $newEmpleado = Empleado::find($request->input('id'));
            $newEmpleado->nombre = $nombre;
            $newEmpleado->rol_empleados_id = $rolEmpleado;
            $newEmpleado->establecimiento_id = $establecimiento;
            $newEmpleado->save();
            return $newEmpleado;
        } else {

            return response()->json([
                'status' => 'Mal update',
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        if($request->input('type') === 'eliminarempleado') {

            $empleado = Empleado::find($request->input('id'));
            $empleado->delete();
            return response()->json([
                'status' => 'Exitoso',
            ]);
        } else {
            return response()->json([
                'status' => 'Mal Delete',
            ]);
        }
    }
}
