    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
   
   
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Lista de usuarios</h3>
                    </div>
                    <div class="box-body">
                        @if(count($usuarios)>0)
                            <table id="usuario" class="table table-bordered table-hover">
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
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->nombres}}</td>
                                            <td>{{$usuario->apellido_paterno}}</td>
                                            <td>{{$usuario->apellido_materno}}</td>
                                            <td>{{$usuario->rut}}</td>
                                            <td>{{$usuario->telefono}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->fecha_nacimiento}}</td>
                                            <td>
                                                @if($usuario->status == '1')
                                                    <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-success btn-xs">Habilitado</button></a>
                                                @elseif($usuario->status == '0')
                                                    <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Deshabilitado</button></a>
                                                @endif
                                            </td>
                                            <td>
                                          

                                            <a href="{{URL::action('Usuario2Controller@edit',$usuario->id)}}"><button class="btn btn-warning">Editar</button></a>
                                            </td>
                                            <td>
                                        
                                            <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                                <a class="btn btn-danger" href="javascript: (confirm('Confirme que en realizadad desea eliminar este usuario?') ? window.location.href = '{{ route('usuario2.destroy', $usuario->id) }}' : false);" >Eliminar</a>
                                            </td>
                                        </tr>

                        <div class="modal fade modal-slide-in-right" aria-hidden="true"
                        role="dialog" tabindex="-1" id="modal-delete-{{$usuario->id}}">
                           
                            <form method="delete" action="{{ action('Usuario2Controller@destroy',$usuario->id) }}" accept-charset="UTF-8">


                                    <input name="_token" value="{{ csrf_token() }}" type="hidden">


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
                          </form>

                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <br/><div class='alert alert-warning'><label>No existe ningún usuario dentro de la lista</label></div>
                        @endif
                        <div class="form-group has-feedback">
                            <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/usuario2/create') !!}" style="color: #ffffff">Agregar Usuario</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


   
        <script type="text/javascript">
            $(function () {
                $('#usuario').DataTable()

              })
        </script>
