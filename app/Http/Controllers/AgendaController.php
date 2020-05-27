<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agenda;
class AgendaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agenda = agenda::paginate(5);

        return view('agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //registrar datos
        $agenda = new agenda();
        $agenda->nombres = $request->nombres;
        $agenda->apellidos = $request->apellidos;
        $agenda->telefono = $request->telefono;
        $agenda->celular = $request->celular;
        $agenda->sexo = $request->sexo;
        $agenda->email = $request->email;
        $agenda->posicion = $request->posicion;
        $agenda->departamento = $request->departamento;
        $agenda->salario = $request->salario;
        $agenda->fechadenacimiento = $request->fechadenacimiento;
        $agenda->save();
        return redirect()->route('agenda.index')->with('datos','Registro completado');
        ;
        // return 'Registro completado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $agenda = agenda::findOrFail($id);
        return view('agenda.show',compact('agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $agenda = agenda::findOrFail($id);
        return view('agenda.edit',compact('agenda'));
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
        $agenda = agenda::findOrFail($id);
        $agenda->nombres = $request->nombres;
        $agenda->apellidos = $request->apellidos;
        $agenda->telefono = $request->telefono;
        $agenda->celular = $request->celular;
        $agenda->sexo = $request->sexo;
        $agenda->email = $request->email;
        $agenda->posicion = $request->posicion;
        $agenda->departamento = $request->departamento;
        $agenda->salario = $request->salario;
        $agenda->fechadenacimiento = $request->fechadenacimiento;
        $agenda->save();
        return redirect()->route('agenda.index')->with('datos','Registro actualizado correctamente');

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
        $agenda = agenda::findOrFail($id);
        $agenda->delete();
        return redirect()->route('agenda.index')->with('datos','Registro eliminado con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id)
    {
        //
        $agenda = agenda::findOrFail($id);
        return view('agenda.confirm',compact('agenda'));
    }
}
