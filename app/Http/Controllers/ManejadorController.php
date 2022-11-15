<?php

namespace App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ManejadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');       
    }

    public function parametros()
    {
        $parametros = DB::table('parametro_parametro')
                ->orderBy('id_par', 'asc')
                ->get();
        $cant = $parametros->count();
        
        return view('/admin/parametros',['parametros' => $parametros,'cant'=>$cant]);
    }
   
}
