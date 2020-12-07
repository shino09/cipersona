        <!-- JS Y CCS QUE SE USARAN , BOOTSTRAP JQUERY Y DATAPICKER-->
        {!!Html::style('bootstrap/dist/css/bootstrap.min.css')!!}
        {!!Html::style('bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')!!}
        {!!Html::script('jquery/dist/jquery.min.js')!!}
        {!!Html::script('jquery-ui/jquery-ui.min.js')!!}
        {!!Html::script('bootstrap/dist/js/bootstrap.min.js')!!}
        {!!Html::script('bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')!!}

        <!-- SE DIBUJA EL FORMULARIO DE INGRESO DE DATOS DE LOSUSUARIOS-->

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar información usuario</h3>
                    </div>

            <!-- SE ENVIAN LOS DATOS DEL FORM AL METODO UPDATE PARA GUARDARL LOS CAMBIOSINGRESADOS-->

                    {!!Form::model($usuario,['route' => ['usuario.update',$usuario -> id],'method' => 'PUT'])!!}
                        <div class="box-body">

                        <!-- CAMPO NOMBRES COMO INPUT TEXT CON MENSAJES DE ERRORES DE VALIDACION-->

                            <div class="form-group {{ $errors->has('name') ? 'has-error' :'' }}">
                                {!!Form::label('nombres','Nombres',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('nombres',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('nombres'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('nombres') }}</p>
                                    </span>
                                @endif
                            </div>

                             <!-- CAMPO APELLIDO PATERNO COMO INPUT TEXT CON MENSAJES DE ERRORES DE VALIDACION-->

                            <div class="form-group {{ $errors->has('apellido_paterno') ? 'has-error' :'' }}">
                                {!!Form::label('apellido_paterno','Apellido Paterno',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('apellido_paterno',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('apellido_paterno'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('apellido_paterno') }}</p>
                                    </span>
                                @endif
                            </div>

                        <!-- CAMPO APELLIDO MATERNO COMO INPUT TEXT CON MENSAJES DE ERRORES DE VALIDACION-->

                            <div class="form-group {{ $errors->has('apellido_materno') ? 'has-error' :'' }}">
                                {!!Form::label('apellido_materno','Apellido Materno',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('apellido_materno',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('apellido_materno'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('apellido_materno') }}</p>
                                    </span>
                                @endif
                            </div>

                            <!-- CAMPO RUT COMO INPUT TEXT CON MENSAJES DE ERRORES DE VALIDACION-->

                             <div class="form-group {{ $errors->has('rut_usuario') ? 'has-error' :'' }}">
                                {!!Form::label('rut','Rut',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('rut',null,['class' => 'form-control input', 'style' => 'width:300px;', 'id' => 'rut' , 'placeholder' => 'Ej: 12345678-k'])!!}
                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('rut') }}</p>
                                    </span>
                                @endif
                            </div>

                            <!-- CAMPO EMAIL PATERNO COMO INPUT EMAIL CON MENSAJES DE ERRORES DE VALIDACION-->

                            <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
                                {!!Form::label('email','Email',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::email('email',null,['class' => 'form-control input', 'style' => 'width:300px;', 'required' ])!!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
                            </div>

                            <!-- CAMPO TELEFONO COMO INPUT TEXT CON MENSAJES DE ERRORES DE VALIDACION-->

                            <div class="form-group {{ $errors->has('telefono') ? 'has-error' :'' }}">
                                {!!Form::label('telefono','Teléfono',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('telefono',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('telefono') }}</p>
                                    </span>
                                @endif
                            </div>

                            <!-- CAMPO FECHA NACIMIENTO  COMO INPUT DATEPICKER CON MENSAJES DE ERRORES DE VALIDACION-->

                              <div class="form-group {{ $errors->has('fecha_nacimiento') ? 'has-error' :'' }}">
                                {!!Form::label('fecha_nacimiento','Fecha de nacimiento',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::date('fecha_nacimiento',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('fecha_nacimiento') }}</p>
                                    </span>
                                @endif
                            </div>
                         
                            <!-- CAMPO STATUSO COMO SELECT (1 PARA HABILITAO Y 0 PARA DESHABILITADO) CON MENSAJES DE ERRORES DE VALIDACION-->

                              <div class="form-group {{ $errors->has('status') ? 'has-error' :'' }}">
                                {!!Form::label('status','Status',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::select('status', ['1' => 'Habilitado', '0' => 'Deshabilitado'], null, ['placeholder' => 'Seleccione','style' => 'width:300px;'])!!}
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('status') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>

                     <!-- SE SUBMITEA EL FORM Y SE PONE UN BOTON ATRAS POR SI NO DESEA GUARDAR   LOS CAMBIOS -->

                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-4"><a href="{!! URL::to('/usuario') !!}" style="color: #ffffff">Atrás</a></button>
                        {!!Form::submit('Actualizar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>









