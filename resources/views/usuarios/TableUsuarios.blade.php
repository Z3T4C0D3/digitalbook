<x-app-layout>
    <div class="py-1">
        <div class="container col-12">
            <div class="row">
                <div class="d-flex justify-content-center card">
                    <div class="card-body">
                        <div class="py-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1 class="text-center">Tabla Usuarios<br></h1>
                                            </div>
                                            <div class="col-md-12 text-center"><a class="btn btn-dark text-capitalize border border-left border-right
                                            border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                                  href="usuarios/create" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Nuevo Registro">Crear
                                                </a>
                                            </div>
                                            <div class="row py-1">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered ">
                                                            <thead class="thead-dark">
                                                            <tr>
                                                                <th>Cliente</th>
                                                                <th>Nombre</th>
                                                                <th>Correo</th>
                                                                <th>Rol</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($usuarios as $datos)
                                                                <tr>
                                                                    <th>{{$datos->Numero_cliente}}</th>
                                                                    <td>{{$datos->name}}</td>
                                                                    <td>{{$datos->email}}</td>
                                                                    <td>@if(!empty($datos->getRoleNames()))
                                                                            @foreach($datos->getRoleNames() as $rolName)
                                                                                <h5>{{$rolName}}</h5>
                                                                            @endforeach
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            @can('editar-usuario')
                                                                                <a class="btn btn-dark text-capitalize border border-left border-right
                                                                                    border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                                   href="{{route('usuarios.edit',$datos->id)}}">Modificar
                                                                                </a>@endcan
                                                                            @can('borrar-usuario')
                                                                                <form method="POST" action="{{route('usuarios.destroy',$datos->id)}}">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button class="btn btn-dark text-capitalize border border-left border-right
                                                                                        border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                                                                                            type="submit">Borrar
                                                                                    </button>
                                                                                </form>
                                                                            @endcan
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                              @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
