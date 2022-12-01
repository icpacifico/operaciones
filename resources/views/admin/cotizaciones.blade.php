@extends('admin.base.base')
@section('content_admin')
@parent
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Leads </strong> Cotizaciones .- <small class="text-muted">Vista de leads</small></h1>
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
                                <th>Rut</th>                               
                                <th>Correo</th>                               
                                <th>Telefono</th> 
                                <th>Fecha</th>                               
                                <th>Vendedor(a)</th>                               
                                                              
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($leads as $led)                                                                
                                <tr>
                                    <td>{{$led->id_con_esp}}</td>        
                                    <td>{{$led->nombre_con_esp}}</td>                                 
                                    <td>{{$led->rut_con_esp}}</td>                                 
                                    <td>{{$led->correo_con_esp}}</td>                                 
                                    <td>{{$led->fono_con_esp}}</td>                                 
                                    <td>{{ explode(' ',$led->fecha_con_esp)[0]}}</td>                                 
                                    
                                    {{-- <td>@if(App\Models\Parametro::nombreVendedora($led->id_vend_par)){!!App\Models\Parametro::nombreVendedora($led->id_vend_par)[0]->nombre_par!!}@endif</td> --}}
                                    <td>@if($led->id_vend_par == ''){{0}}@else {!!App\Models\Parametro::nombreVendedora($led->id_vend_par)[0]->nombre_par!!} @endif</td>
                                    {{-- <td>@if ($led->id_est_cor == 1)
                                        <span class="badge bg-success">Asignado</span>
                                    @else
                                        <span class="badge bg-warning">En cola</span>
                                    @endif</td>                                   --}}
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