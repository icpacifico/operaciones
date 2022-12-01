<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorreoPortal;
use App\Models\ContactoEspecial;
use App\Models\ContactoGeneral;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametros = DB::table('parametro_parametro')->orderBy('id_par', 'asc')->get(); 
        $leads = CorreoPortal::orderBy('id_cor', 'desc')->limit(100)->get();
        return view('/admin/leads',['leads'=>$leads,'vendedora'=>$parametros]);
    }

    public function leadCotizacion(){
        $parametros = DB::table('parametro_parametro')->orderBy('id_par', 'asc')->get(); 
        $leads = ContactoEspecial::orderBy('id_con_esp', 'desc')->limit(100)->get();
        return view('/admin/cotizaciones',['leads'=>$leads,'vendedora'=>$parametros]);
    }

    public function leadContacto(){
        $parametros = DB::table('parametro_parametro')->orderBy('id_par', 'asc')->get(); 
        $leads = ContactoGeneral::orderBy('id_con_gen', 'desc')->limit(100)->get();
        return view('/admin/contactos',['leads'=>$leads,'vendedora'=>$parametros]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
