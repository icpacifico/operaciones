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
        
    }
    public function saveParametros(Request $request){
        dd($request->input('parametros'));
    }
   
}
