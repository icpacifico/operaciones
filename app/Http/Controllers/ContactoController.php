<?php

namespace App\Http\Controllers;

use \stdClass;
use App\Models\ContactoEspecial;
use App\Models\Parametro;
use Illuminate\Http\Request;
use App\Mail\EnvioContacto;
use App\Mail\EnvioCotizacion;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use RealRashid\SweetAlert\Facades\Alert;
use Label84\TagManager\Facades\TagManager;
use Illuminate\Support\Facades\DB;

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

            // llamar a los vendedores activos

            $vendedores = DB::table('parametro_parametro')->where('id_est_par','=', 1)->get('valor_par','id_vend_par');  
            $limit = count($vendedores);
            $ultimo = ContactoEspecial::orderBy('id_con_esp', 'desc')->limit($limit)->get();
            
            
            
            dd($ultimo);
          

            //   datos que van a google tag manager
            // $telefono = $request->input('codigo').$request->input('telefono');                                             
            // $dataForm = new stdClass();
            // $dataForm->nombre = $request->input('nombre');
            // $dataForm->rut = $request->input('rut');
            // $dataForm->mail = $request->input('mail');
            // $dataForm->telefono = $telefono;
            // $dataForm->direccion = $request->input('direccion');
            // $dataForm->ciudad = $request->input('ciudad');
            // $dataForm->modelo = $request->input('modelo');
            // $dataForm->medio = $request->input('medio');
            // $dataForm->comentarios = $request->input('comentarios');            
            // TagManager::event('gtm.formSubmit', ['data' => $dataForm]);
         
            // $data = $request->validate([
            //     'proyectoid' => 'required',
            //     'codigo' => 'required',
            //     'proyecto' =>'required',                        
            //     'nombre' => 'required',
            //     'rut' => 'required',
            //     'mail' => 'required',            
            //     'telefono' => 'required',
            //     'direccion' => 'required',
            //     'ciudad' => 'required',
            //     'modelo' => 'required',
            //     'medio' => 'required',
            //     'comentarios' => 'required'
            //     ]);
              
                               
                // $numbs = [0,1];
                // $numbs = [0,1,2,3];
    
                // $array = ['kaguirre@icpacifico.cl','etorres@icpacifico.cl'];
                // $array = ['jmedina@icpacifico.cl', 'kaguirre@icpacifico.cl', 'ovelasquez@icpacifico.cl','etorres@icpacifico.cl'];
                // $moreUsers = Arr::shuffle($array);
                // $indice = Arr::random($numbs);
                
                // Mail::to('icpdigital@icpacifico.cl')->cc($array[$indice])->send(new EnvioCotizacion($data));
                

                // guardar datos
                // $contacto = new ContactoEspecial;
                // $contacto->nombre_con_esp = $request->input('nombre');
                // $contacto->rut_con_esp = $request->input('rut');
                // $contacto->correo_con_esp = $request->input('mail');
                // $contacto->fono_con_esp = $telefono;
                // $contacto->fecha_con_esp = date("Y-m-d H:i:s");
                // $contacto->descripcion_con_esp = $request->input('comentarios');
                // $contacto->modelo_con_esp = $request->input('modelo');
                // $contacto->medio_con_esp = $request->input('medio');
                // $contacto->proyectoid_con_esp = $request->input('proyectoid');
                // $contacto->id_vend_par = 1;
                // $contacto->save();

                // Alert::success('Gracias!', 'Cotización enviada con éxito.');
                // return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
        } catch (\Throwable $th) {
            throw $th;
        } catch (\Exception $ex){
            Alert::error('Error', 'Hemos notado un error, porfavor intentelo nuevamente. code error: '.$ex->getMessage());
            return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
        }
        
    }  

}
