<?php

namespace App\Http\Controllers;

use \stdClass;
use Illuminate\Http\Request;
use App\Mail\EnvioContacto;
use App\Mail\EnvioCotizacion;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;
use Label84\TagManager\Facades\TagManager;

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
        try {
            $data = $request->validate([
                'nombre' => 'required',
                'fono' => 'required',
                'mail' => 'required',            
                'comentarios' => 'required'
                ]);
                
                Mail::to('icpdigital@icpacifico.cl')->send(new EnvioContacto($data));
    
                Alert::success('Gracias!', 'Contacto enviado con éxito.');
                return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
        } catch (\Throwable $th) {
            throw $th;
        } catch (\Exception $ex){
            Alert::error('Error', 'Hemos notado un error, porfavor intentelo nuevamente. code error: '.$ex->getMessage());
            return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
        }
    }

    public function cotizacion(Request $request)
    {
        try {
           
            $telefono = $request->input('codigo').$request->input('telefono');            
            $dataForm = new stdClass();
            $dataForm->nombre = $request->input('nombre');
            $dataForm->rut = $request->input('rut');
            $dataForm->mail = $request->input('mail');
            $dataForm->telefono = $telefono;
            $dataForm->direccion = $request->input('direccion');
            $dataForm->ciudad = $request->input('ciudad');
            $dataForm->modelo = $request->input('modelo');
            $dataForm->medio = $request->input('medio');
            $dataForm->comentarios = $request->input('comentarios');
         
            $data = $request->validate([
                'codigo' => 'required',
                'proyecto' =>'required',                        
                'nombre' => 'required',
                'rut' => 'required',
                'mail' => 'required',            
                'telefono' => 'required',
                'direccion' => 'required',
                'ciudad' => 'required',
                'modelo' => 'required',
                'medio' => 'required',
                'comentarios' => 'required'
                ]);
              
                TagManager::event('gtm.formSubmit', ['data' => $dataForm->toJson() ]);               
                $numbs = [0,1];
                // $numbs = [0,1,2,3];
    
                $array = ['kaguirre@icpacifico.cl','etorres@icpacifico.cl'];
                // $array = ['jmedina@icpacifico.cl', 'kaguirre@icpacifico.cl', 'ovelasquez@icpacifico.cl','etorres@icpacifico.cl'];
                // $moreUsers = Arr::shuffle($array);
                $indice = Arr::random($numbs);
                
                Mail::to('icpdigital@icpacifico.cl')->cc($array[$indice])->send(new EnvioCotizacion($data));
                
                Alert::success('Gracias!', 'Cotización enviada con éxito.');
                return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
        } catch (\Throwable $th) {
            throw $th;
        } catch (\Exception $ex){
            Alert::error('Error', 'Hemos notado un error, porfavor intentelo nuevamente. code error: '.$ex->getMessage());
            return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
        }
        
    }  

}
