<?php

namespace App\Http\Controllers;

use App\Instituto;
use App\Sede;
use Illuminate\Http\Request;

class InstitutoController extends Controller
{
    /**
     * Instantiate a new InstitutoController instance.
     */
    public function __construct()
    {
        $this->middleware('permission:instituto-list|instituto-create|instituto-edit|instituto-delete', ['only' => ['index','show']]);
        $this->middleware('permission:instituto-create', ['only' => ['create','store']]);
        $this->middleware('permission:instituto-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:instituto-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutos = Instituto::latest('id')->paginate(10);
        return view('institutos.index')->with('institutos', $institutos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sede = Sede::get();
        return view('institutos.create',compact('sede'));
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
            'nombre' => 'required|unique:institutos,nombre',
            'sede' => 'required',
        ]);
        
        $instituto = new Instituto;
        $instituto->nombre = $request->input('nombre');
        $instituto->descripcion = $request->input('descripcion');
        $instituto->user_id = auth()->user()->id;

        $instituto->save();
        $instituto->sedes()->sync($request->input('sede'));

        return redirect()->route('institutos.index')
                        ->with('success', trans('Institute').' '.trans('created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instituto  $instituto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instituto = Instituto::find($id);
        $institutoSede = $instituto->sedes;

        return view('institutos.show',compact('instituto','institutoSede'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instituto  $instituto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instituto = Instituto::find($id);
        $sede = Sede::all();
        $institutoSedes = $instituto->sedes->pluck('id')->toArray();
        
        return view('institutos.edit',compact('instituto','sede','institutoSedes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instituto  $instituto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'sede' => 'required',
        ]);

        $instituto = Instituto::find($id);
        $instituto->nombre = $request->input('nombre');
        $instituto->descripcion = $request->input('descripcion');
        $instituto->save();

        $instituto->sedes()->sync($request->input('sede'));

        return redirect()->route('institutos.index')
                        ->with('success',trans('Institute').' '.trans('updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instituto  $instituto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instituto = Instituto::find($id);

        $instituto->delete();
        return redirect()->route('institutos.index')
                        ->with('success', trans('Institute').' '.trans('deleted successfully'));
    }
}
