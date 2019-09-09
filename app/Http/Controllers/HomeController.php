<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Docente;
use App\Escuela;
use App\Evaluacion;
use App\Instituto;
use App\Modulo;
use App\Sede;
use App\User;
use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Carrera = Carrera::count();
        $Docente = Docente::count();
        $Escuela = Escuela::count();
        $Evaluacion = Evaluacion::count();
        $Instituto = Instituto::count();
        $Modulo = Modulo::count();
        //$Permission = Permission::count();
        $Role = Role::count();
        $Sede = Sede::count();
        $User = User::count();
        
        return view('home',compact('Carrera','Docente', 'Escuela', 'Evaluacion', 'Instituto', 'Modulo', 'Role', 'Sede', 'User'));
    }
}
