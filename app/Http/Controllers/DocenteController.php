<?php

namespace App\Http\Controllers;

use App\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Instantiate a new DocenteController instance.
     */
    public function __construct()
    {
        $this->middleware('permission:docente-list|docente-create|docente-edit|docente-delete', ['only' => ['index','show']]);
        $this->middleware('permission:docente-create', ['only' => ['create','store']]);
        $this->middleware('permission:docente-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:docente-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::latest('id')->paginate(10);
        return view('docentes.index')->with('docentes', $docentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
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
            'nombre' => 'required',
            'appat' => 'required',
            'apmat' => '',
        ]);
        
        $docente = new Docente;
        $docente->nombre = $request->input('nombre');
        $docente->appat = $request->input('appat');
        $docente->apmat = $request->input('apmat');
        $docente->save();

        return redirect()->route('docentes.index')
                        ->with('success', trans('Teacher').' '.trans('created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::find($id);

        return view('docentes.show',compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        
        return view('docentes.edit',compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'appat' => 'required',
            'apmat' => '',
        ]);

        $docente = Docente::find($id);
        $docente->nombre = $request->input('nombre');
        $docente->appat = $request->input('appat');
        $docente->apmat = $request->input('apmat');
        $docente->save();

        return redirect()->route('docentes.index')
                        ->with('success', trans('Teacher').' '.trans('updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);

        $docente->delete();
        return redirect()->route('docentes.index')
                        ->with('success', trans('Teacher').' '.trans('deleted successfully'));
    }
}
