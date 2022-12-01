@extends('admin.base.base')
@section('content_admin')
@parent
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Leads </strong> Contacto .- <small class="text-muted">Vista de leads</small></h1>
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="card flex-fill w-100">
                    <div class="card-header">  
                        {{-- {!!App\Models\Parametro::nombreVendedora($led->id_vend_par)!!}                                                 --}}
                          <table class="table table-hover">
                            <thead >
                              <tr>
                                <th>ID</th>
                                <th>Nombre</th>                               
                                <th>Correo</th>                               
                                <th>Telefono</th>                               
                                <th>Descripcion</th>                               
                                <th>Fecha</th>                               
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($leads as $led)                                
                                
                                <tr>
                                    <td>{{$led->id_con_gen}}</td>                                
                                    <td>{{$led->nombre_con_gen}}</td>                                 
                                    <td>{{$led->correo_con_gen}}</td>                                 
                                    <td>{{$led->fono_con_gen}}</td>                                 
                                    <td>{{$led->descripcion_con_gen}}</td>                                 
                                    <td>{{$led->fecha_con_gen}}</td>                                 
                                                        
                                </tr>                                                                            
                            @endforeach
                          </tbody>
                          </table>
                    </div>                    
                </div>
            </div>            
        </div>
</div>
@endsection