@extends('admin.base.base')
@section('content_admin')
@parent
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Leads </strong> Recepcionados .- <small class="text-muted">Vista de leads</small></h1>
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="card flex-fill w-100">
                    <div class="card-header">                                                  
                          <table class="table table-hover">
                            <thead >
                              <tr>
                                <th>ID</th>
                                <th>Asunto</th>                               
                                <th>Contenido</th>                               
                                <th>Vendedor asignado</th>                               
                                <th>Estado</th>                               
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($leads as $led)                                
                                
                                <tr>
                                    <td>{{$led->id_cor}}</td>                                
                                    <td>{{$led->asunto_cor}}</td>                                 
                                    <td>{!!$led->body_cor!!}</td>
                                    <td>{!!App\Models\Parametro::nombreVendedora($led->id_vend_par)[0]->nombre_par!!}</td>
                                    <td>@if ($led->id_est_cor == 1)
                                        <span class="badge bg-success">Asignado</span>
                                    @else
                                        <span class="badge bg-warning">En cola</span>
                                    @endif</td>                                  
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