@extends('admin.base.base')
@section('content_admin')
@parent
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Parametros</strong> Generales .- <small class="text-muted">Activación de vendedores</small></h1>
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="card flex-fill w-100">
                    <div class="card-header">                                                  
                          <table class="table table-hover">
                            <thead >
                              <tr>
                                <th>Nombre Completo</th>                               
                                <th>Status</th>                               
                                <th>Accion</th>                               
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($parametros as $par)                           
                                @if ($par->id_par == 20)
                                <h5>Cantidad de Cotizaciones por Vendedor <strong>{{$par->valor_par}}</strong></h5>
                                <hr>
                                @endif
                                @if($par->id_est_par !== 3 and $par->id_est_par !== 0)
                                <tr>                                
                                    <td>{{$par->nombre_par}}</td>                                 
                                    <td>@if ($par->id_est_par == 1){{ 'Activo' }}@else{{ 'Inactivo' }}@endif</td>                                 
                                    <td><form action="{{ route('parametros.store') }}" method="POST">
                                         @csrf 
                                         <input type="hidden" value="{{$par->id_par}}" name="identificador">
                                        <input type="hidden" value="@if ($par->id_est_par == 1){{ 2 }}@else{{ 1 }}@endif" name="status">
                                        <button type="submit" class="btn @if ($par->id_est_par == 1){{ 'btn-danger' }}@else{{ 'btn-success' }}@endif">
                                          @if ($par->id_est_par == 1){{ 'Desactivar' }}@else{{ 'Activar' }}@endif
                                        </button>
                                        </form>                                      
                                    </td>                                    
                                </tr>
                               @endif                                                 
                            @endforeach
                          </tbody>
                          </table>
                    </div>                    
                </div>
            </div>            
        </div>
</div>    
@endsection