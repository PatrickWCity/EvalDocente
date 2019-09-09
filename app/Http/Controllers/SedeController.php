<?php

namespace App\Http\Controllers;

use App\Sede;
use App\Escuela;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Instantiate a new SedeController instance.
     */
    public function __construct()
    {
        $this->middleware('permission:sede-list|sede-create|sede-edit|sede-delete', ['only' => ['index','show']]);
        $this->middleware('permission:sede-create', ['only' => ['create','store']]);
        $this->middleware('permission:sede-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:sede-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::latest('id')->paginate(10);
        return view('sedes.index')->with('sedes', $sedes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuela = Escuela::get();
        return view('sedes.create',compact('escuela'));
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
            'nombre' => 'required|unique:sedes,nombre',
            'escuela' => 'required',
        ]);
        
        $sede = new Sede;
        $sede->nombre = $request->input('nombre');
        $sede->descripcion = $request->input('descripcion');
        $sede->user_id = auth()->user()->id;

        $sede->save();
        $sede->escuelas()->sync($request->input('escuela'));

        return redirect()->route('sedes.index')
                        ->with('success', trans('Office').' '.trans('created successfully '));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::find($id);
        $sedeEscuela = $sede->escuelas;

        return view('sedes.show',compact('sede','sedeEscuela'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::find($id);
        $escuela = Escuela::all();
        $sedeEscuelas = $sede->escuelas->pluck('id')->toArray();
        
        return view('sedes.edit',compact('sede','escuela','sedeEscuelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'escuela' => 'required',
        ]);

        $sede = Sede::find($id);
        $sede->nombre = $request->input('nombre');
        $sede->descripcion = $request->input('descripcion');
        $sede->save();

        $sede->escuelas()->sync($request->input('escuela'));

        return redirect()->route('sedes.index')
                        ->with('success', trans('Office').' '.trans('updated successfully '));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sede = Sede::find($id);

        $sede->delete();
        return redirect()->route('sedes.index')
                        ->with('success', trans('Office').' '.trans('deleted successfully '));
    }
}
