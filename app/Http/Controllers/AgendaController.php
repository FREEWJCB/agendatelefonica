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
    public function index(Request $request)
    {
        //
        $nombres = $request->get('bs-nombres');
        $apellidos = $request->get('bs-apellidos');
        $telefono = $request->get('bs-telefono');

        // Hacen la misma funcion, captura los datos get necesarios cuando el appends no está en la vista
        $variableurl=$request->all();
        /*$variableurl=$request->input();
        $variableurl=$request->query();
        $variableurl=$request->only(['bs-nombres','bs-apellidos','bs-telefono']);
        $variableurl=$request->except(['page']);
        $variableurl=$_GET;
        $variableurl=[
            'bs-nombres' => $nombres,
            'bs-apellidos' => $apellidos,
            'bs-telefono' => $telefono];*/

        // cuando el appends está en la vista
        // $agenda = agenda::nombres($nombres)->apellidos($apellidos)->telefono($telefono)->paginate(5);
        // cuando el appends no está en la vista
        $agenda = agenda::nombres($nombres)->apellidos($apellidos)->telefono($telefono)->paginate(5)->appends($variableurl);

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
