<?php

namespace App\Http\Controllers;

use App\Escuela;
use App\Carrera;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Instantiate a new EscuelaController instance.
     */
    public function __construct()
    {
        $this->middleware('permission:escuela-list|escuela-create|escuela-edit|escuela-delete', ['only' => ['index','show']]);
        $this->middleware('permission:escuela-create', ['only' => ['create','store']]);
        $this->middleware('permission:escuela-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:escuela-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuelas = Escuela::latest('id')->paginate(10);
        return view('escuelas.index')->with('escuelas', $escuelas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrera = Carrera::get();
        return view('escuelas.create',compact('carrera'));
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
            'nombre' => 'required|unique:escuelas,nombre',
            'carrera' => 'required',
        ]);
        
        $escuela = new Escuela;
        $escuela->nombre = $request->input('nombre');
        $escuela->descripcion = $request->input('descripcion');
        $escuela->user_id = auth()->user()->id;

        $escuela->save();
        $escuela->carreras()->sync($request->input('carrera'));

        return redirect()->route('escuelas.index')
                        ->with('success', trans('School').' '.trans('created successfully '));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escuela = Escuela::find($id);
        $escuelaCarrera = $escuela->carreras;

        return view('escuelas.show',compact('escuela','escuelaCarrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escuela = Escuela::find($id);
        $carrera = Carrera::all();
        $escuelaCarreras = $escuela->carreras->pluck('id')->toArray();
        
        return view('escuelas.edit',compact('escuela','carrera','escuelaCarreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'carrera' => 'required',
        ]);

        $escuela = Escuela::find($id);
        $escuela->nombre = $request->input('nombre');
        $escuela->descripcion = $request->input('descripcion');
        $escuela->save();

        $escuela->carreras()->sync($request->input('carrera'));

        return redirect()->route('escuelas.index')
                        ->with('success', trans('School').' '.trans('updated successfully '));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escuela = Escuela::find($id);

        $escuela->delete();
        return redirect()->route('escuelas.index')
                        ->with('success', trans('School').' '.trans('deleted successfully '));
    }
}
