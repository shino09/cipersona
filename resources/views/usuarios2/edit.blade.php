    <link rel="stylesheet" href="/testgpscontrol/public/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/testgpscontrol/public/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/testgpscontrol/public/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

   

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar información usuario</h3>
                    </div>

 
 <form action="{{ route('usuario2.update', $usuario->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                         
                             <div class="form-group">
                                <label for="nombres" class="col-md-4 control-label">Nombres</label>
                                <input type="text" class="form-control input" value="{{$usuario->nombres }}" id="nombres" name="nombres"  style="width: 300px;">
                            </div>
                            <div class="form-group">
                                <label for="apellido_paterno" class="col-md-4 control-label">Apellido Paterno</label>
                                <input type="text" class="form-control input" id="apellido_paterno"  value="{{$usuario->apellido_paterno }}"  name="apellido_paterno"  style="width: 300px;">
                            </div>
                               <div class="form-group">
                                <label for="apellido_materno" class="col-md-4 control-label">Apellido Materno</label>
                                <input type="text" class="form-control input" id="apellido_materno"  value="{{$usuario->apellido_materno }}" name="apellido_materno"  style="width: 300px;">
                            </div>
                             <div class="form-group">
                                <label for="rut" class="col-md-4 control-label">Rut</label>
                                <input type="text" class="form-control input" id="rut"  value="{{$usuario->rut}}" name="rut"  style="width: 300px;">
                            </div>

                             <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <input type="text" class="form-control input" id="email" value="{{$usuario->email }}"  name="email"  style="width: 300px;">
                            </div>

                             <div class="form-group">
                                <label for="telefono" class="col-md-4 control-label">Teléfono</label>
                                <input type="text" class="form-control input" id="telefono"  value="{{$usuario->telefono }}" name="telefono"  style="width: 300px;">
                            </div>
                           

                        
                              <div class="form-group">
                                <label for="fecha_nacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control input" id="fecha_nacimiento"  value="{{$usuario->fecha_nacimiento }}" name="fecha_nacimiento"  style="width: 300px;">
                            </div>

                            <div class="form-group {{ $errors->has('status') ? 'has-error' :'' }}">
                                <label for="status" class="col-md-4 control-label">Status</label>
                            <select id="status" name="status"  style="width: 300px;">
                                            <option value="" selected="true" disabled="true" class="form-control input">Seleccione</option>
                        @if($usuario->status==1) 
                                <option selected value="1">Habilitado</option> 
                                <option value="0">Deshabilitado</option> 
                        @endif
                        @if($usuario->status==0)
                                <option  value="1">Habilitado</option> 
                                 <option selected value="0">Deshabilitado</option>
                         @endif
                                        </select>
                        </div>

                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-4"><a href="{!! URL::to('/usuario2') !!}" style="color: #ffffff">Atrás</a></button>
                            <button class="btn btn-info">Atualizar</button>
                        

  </form>

                    </div>
                </div>
            </div>
        </div>









