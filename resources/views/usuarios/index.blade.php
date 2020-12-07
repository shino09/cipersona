        <!-- JS Y CCS QUE SE USARAN , BOOTSTRAP JQUERY Y DATABLES-->
        {!!Html::style('bootstrap/dist/css/bootstrap.min.css')!!}
        {!!Html::style('datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
        {!!Html::script('jquery/dist/jquery.min.js')!!}
        {!!Html::script('jquery-ui/jquery-ui.min.js')!!}
        {!!Html::script('bootstrap/dist/js/bootstrap.min.js')!!}
        {!!Html::script('datatables.net/js/jquery.dataTables.min.js')!!}
        {!!Html::script('datatables.net-bs/js/dataTables.bootstrap.min.js')!!}

        <!-- SE DIBUJA LA TABLA CON LOS DATOS DE LOS USUARIOS-->
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Lista de usuarios</h3>
                    </div>
                    <div class="box-body">
                        @if(count($usuarios)>0)
                            <table id="usuario" class="table table-bordered table-hover">
                                <!-- CABEZERA DE LA TABLA-->
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombres</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Rut</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Status</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                        <!-- CONTENIDO DE LA TABLA-->

                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->nombres}}</td>
                                            <td>{{$usuario->apellido_paterno}}</td>
                                            <td>{{$usuario->apellido_materno}}</td>
                                            <td>{{$usuario->rut}}</td>
                                            <td>{{$usuario->telefono}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->fecha_nacimiento}}</td>
                                            <!-- SE MUESTRA EL STATUS VERDE HABILITADO O ROJO DESAHIBILITADO-->

                                            <td>
                                                @if($usuario->status == '1')
                                                    <button class="btn btn-success btn-xs">Habilitado</button></a>
                                                @elseif($usuario->status == '0')
                                                    <button class="btn btn-danger btn-xs">Deshabilitado</button></a>
                                                @endif
                                            </td>

                                            <!-- SE LLAMA AL METOO EDIT CON LA ID DEL USUARIO-->

                                            <td>
                                            {!!link_to_route('usuario.edit',$title ='Editar',$parameters = $usuario->id,$attributes = ['class' => 'btn  btn-warning btn-xs'])!!}
                                            </td>
                                             <!-- SE ABRE EL MODAL PARA CONFIRMAR LA ELIMINACION DEL USUARIO-->

                                            <td>
                                            <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                            </td>
                                        </tr>

                        <!-- MODAL PARA ELIMINAR UN USUARIO-->

                        <div class="modal fade modal-slide-in-right" aria-hidden="true"
                        role="dialog" tabindex="-1" id="modal-delete-{{$usuario->id}}">

                        <!-- SE ENVIA LA ID DEL USARIO AL METODO DESTROY PARA ELIMINARLO-->

                            {!!Form::Open(array('action'=>array('UsuarioController@destroy',$usuario->id),'method'=>'delete'))!!}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" 
                                        aria-label="Close">
                                             <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">Eliminar Usuario</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Confirme si desea Eliminar este usuario</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                            {!!Form::Close()!!}
                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <!-- SI NO HAY  USUARIOS SE MUESTRA UN MENSAJE-->

                            <br/><div class='alert alert-warning'><label>No existe ningún usuario dentro de la lista</label></div>
                        @endif
                        <!-- BOTON PARA AGREGAR UN NUEVO USUARIO-->

                        <div class="form-group has-feedback">
                            <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/usuario/create') !!}" style="color: #ffffff">Agregar Usuario</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- CONVERTIR MI TABLA  EN  UNA DATATABLE PARA TENER BUSQUEDA, ORDENAMIENTO Y PAGINACION-->
        <script type="text/javascript">
            $(function () {
                //SE EJECUTA DATATABLE PARA LA TABLA DE ID USUARIO
                $('#usuario').DataTable()

              })
        </script>
