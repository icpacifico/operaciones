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
            $correo_vendedor = '';
            $id_vendedor = 0;
            $ultimo = '';
            $verificacion=[];
            // llamar a los vendedores activos
            $vendedores = DB::table('parametro_parametro')->where('id_est_par','=', 1)->get();  
            // obtener la cantidad de vendedores activos
            $limit = $vendedores->count();
            // si solo hay un vendedor no se necesita un orden para recibir leads
            if($limit == 1){
                // se obtienen datos del vendedor para registrarlos 
                $correo_vendedor = $vendedores[0]->valor_par;
                $id_vendedor = $vendedores[0]->id_vend_par;
            }else{
                /****** obtener ultimos registros de cotizaciones para saber quien fue el último vendedor
                 * 
                 * si hay 2 vendedores se preguntara por la mitad osea, solo 1 registro
                 * si hay 3 vendedores se preguntara por los 2 últimos registros
                 * si hay 4 vendedores se preguntara por los últimos 3 registros
                 * 
                 */
                $limit -= 1;
                $ultimo = ContactoEspecial::orderBy('id_con_esp', 'desc')->limit($limit)->get();
                // dd($vendedores);
                // si flag es falso es porque ese vendedor no fue el último, de lo contrario es verdadero
                $flag=false;
               for ($i=0; $i < $vendedores->count(); $i++){                    
                    if($ultimo->count() == 1){
                        $flag = ($vendedores[$i]->id_vend_par == $ultimo[0]->id_vend_par) ? true : false;                            
                    }else{
                        for ($j=0; $j < $ultimo->count(); $j++) { 
                            $flag = ($vendedores[$i]->id_vend_par == $ultimo[$j]->id_vend_par) ? true : false;                            
                        }
                    }                    
                    array_push($verificacion, $flag);
               }
            }
            
           

            
            
            
            // dd($verificacion);
            dd($vendedores);

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
            // return redirect()->back()->with('data', $data)->with('success', 'Mensaje enviado éxitosamente');
        }
        
    }  

}
