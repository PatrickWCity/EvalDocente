<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Modulo;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Instantiate a new CarreraController instance.
     */
    public function __construct()
    {
        $this->middleware('permission:carrera-list|carrera-create|carrera-edit|carrera-delete', ['only' => ['index','show']]);
        $this->middleware('permission:carrera-create', ['only' => ['create','store']]);
        $this->middleware('permission:carrera-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:carrera-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::latest('id')->paginate(10);
        return view('carreras.index')->with('carreras', $carreras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modulo = Modulo::get();
        return view('carreras.create',compact('modulo'));
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
            'nombre' => 'required|unique:carreras,nombre',
            'modulo' => 'required',
        ]);
        
        $carrera = new Carrera;
        $carrera->nombre = $request->input('nombre');
        $carrera->descripcion = $request->input('descripcion');
        $carrera->user_id = auth()->user()->id;

        $carrera->save();
        $carrera->modulos()->sync($request->input('modulo'));

        return redirect()->route('carreras.index')
                        ->with('success', trans('Career').' '.trans('created successfully '));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera = Carrera::find($id);
        $carreraModulo = $carrera->modulos;

        return view('carreras.show',compact('carrera','carreraModulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrera = Carrera::find($id);
        $modulo = Modulo::all();
        $carreraModulos = $carrera->modulos->pluck('id')->toArray();
        
        return view('carreras.edit',compact('carrera','modulo','carreraModulos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'modulo' => 'required',
        ]);

        $carrera = Carrera::find($id);
        $carrera->nombre = $request->input('nombre');
        $carrera->descripcion = $request->input('descripcion');
        $carrera->save();

        $carrera->modulos()->sync($request->input('modulo'));

        return redirect()->route('carreras.index')
                        ->with('success', trans('Career').' '.trans('updated successfully '));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrera = Carrera::find($id);

        $carrera->delete();
        return redirect()->route('carreras.index')
                        ->with('success', trans('Career').' '.trans('deleted successfully '));
    }
}
