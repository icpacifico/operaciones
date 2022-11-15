@extends('admin.base.base')
@section('content_admin')
@parent
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Parametros</strong> Generales</h1>
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        
                        <form>
                            @foreach ($parametros as $par)                           
                                @if ($par->id_par == 20)
                                <div class="form-group">
                                    <label for="parametro_cantidad{{ $par->id_par}}">Cantidad Cotizaciones por Vendedor</label>                                    
                                    <input type="text" value="{{$par->valor_par}}" name="parametro_cantidad{{ $par->id_par}}" class="form-control campo_parametro numero" id="parametro_cantidad{{ $par->id_par}}">
                                </div>
                                @else
                                <div class="row g-3 my-2">
                                  <div class="col-sm-3">
                                    <label for="parametro_nombre{{ $par->id_par}}" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="parametro_nombre{{ $par->id_par}}" value="{{$par->nombre_par}}" name="parametro_nombre{{ $par->id_par}}" aria-describedby="emailHelp">                              
                                  </div>

                                  <div class="col-sm-3">
                                    <label for="parametro{{ $par->id_par}}" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="parametro{{ $par->id_par}}" value="{{ $par->valor_par}}" name="parametro{{ $par->id_par}}">
                                  </div>

                                  <div class="col-sm-2">
                                    <label for="parametro_id_vend{{ $par->id_par}}" class="form-label">ID Vendedor</label>
                                    <input type="text" class="form-control" id="parametro_id_vend{{ $par->id_par}}" value="{{ $par->id_vend_par}}" name="parametro_id_vend{{ $par->id_par}}">
                                  </div>

                                  <div class="col-sm-2">
                                    <label for="parametro_orden_vend{{ $par->id_par}}" class="form-label">Número de Orden</label>
                                    <input type="text" class="form-control" id="parametro_orden_vend{{ $par->id_par}}" value="{{ $par->orden_vend_par}}" name="parametro_orden_vend{{ $par->id_par}}">
                                  </div>
                                  <div class="col-sm-2">
                                    <label  for="parametro_id_est_par{{ $par->id_par}}">
                                        <input type="checkbox" class="form-check-input" name="parametro_id_est_par{{ $par->id_par}}" @if ($par->id_est_par == 1) checked @endif> Activo                                        
                                    </label>
                                  </div>
                                </div>
                                @endif                                                
                            @endforeach
                            <button type="submit" class="btn btn-primary mt-5">Registrar</button>
                        </form>
                    </div>                    
                </div>
            </div>            
        </div>
</div>    
@endsection