<?php

namespace App\Http\Controllers;

use App\Modulo;
use App\Docente;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    /**
     * Instantiate a new ModuloController instance.
     */
    public function __construct()
    {
        $this->middleware('permission:modulo-list|modulo-create|modulo-edit|modulo-delete', ['only' => ['index','show']]);
        $this->middleware('permission:modulo-create', ['only' => ['create','store']]);
        $this->middleware('permission:modulo-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:modulo-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::latest('id')->paginate(10);
        return view('modulos.index')->with('modulos', $modulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = Docente::get();
        return view('modulos.create',compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|unique:modulos,nombre',
            'docente' => 'required',
        ]);
        
        $modulo = new Modulo;
        $modulo->nombre = $request->input('nombre');
        $modulo->descripcion = $request->input('descripcion');
        $modulo->user_id = auth()->user()->id;

        $modulo->save();
        $modulo->docentes()->sync($request->input('docente'));

        return redirect()->route('modulos.index')
                        ->with('success', trans('Module').' '.trans('created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modulo = Modulo::find($id);
        $moduloDocente = $modulo->docentes;

        return view('modulos.show',compact('modulo','moduloDocente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modulo = Modulo::find($id);
        $docente = Docente::all();
        $moduloDocentes = $modulo->docentes->pluck('id')->toArray();
        
        return view('modulos.edit',compact('modulo','docente','moduloDocentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'docente' => 'required',
        ]);

        $modulo = Modulo::find($id);
        $modulo->nombre = $request->input('nombre');
        $modulo->descripcion = $request->input('descripcion');
        $modulo->save();

        $modulo->docentes()->sync($request->input('docente'));

        return redirect()->route('modulos.index')
                        ->with('success', trans('Module').' '.trans('updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modulo = Modulo::find($id);

        $modulo->delete();
        return redirect()->route('modulos.index')
                        ->with('success', trans('Module').' '.trans('deleted successfully'));
    }
}
