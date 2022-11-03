<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnvioContacto;
use App\Mail\EnvioCotizacion;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->validate([
            'nombre' => 'required',
            'fono' => 'required',
            'mail' => 'required',            
            'comentarios' => 'required'
            ]);
            
            Mail::to('icpdigital@icpacifico.cl')->send(new EnvioContacto($data));

            Alert::success('Gracias!', 'Contacto enviado con éxito.');
            return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
    }

    public function cotizacion(Request $request)
    {
        $data = $request->validate([
            'proyecto' =>'required',                        
            'nombre' => 'required',
            'rut' => 'required',
            'mail' => 'required',            
            'fonocon' => 'required',
            'direccion' => 'required',
            'ciudad' => 'required',
            'modelo' => 'required',
            'medio' => 'required',
            'comentarios' => 'required'
            ]);
            $numbs = [0,1,2,3];
            $array = ['jmedina@icpacifico.cl', 'kaguirre@icpacifico.cl', 'ovelasquez@icpacifico.cl','etorres@icpacifico.cl'];
            $moreUsers = Arr::shuffle($array);
            $indice = Arr::random($numbs);
            
            Mail::to('icpdigital@icpacifico.cl')->cc($array[$indice])->send(new EnvioCotizacion($data));
            
            Alert::success('Gracias!', 'Cotización enviada con éxito.');
            return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
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
