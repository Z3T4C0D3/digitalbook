<x-app-layout>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b>Actualizar Rol</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container col-sm-12">
      <div class="row">
          <div class="d-flex justify-content-center card">
              <div class="card-body">
                  <div class="py-5">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  @if ($errors->any())
                                      <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                          <strong>¡Revise los campos!</strong>
                                          @foreach ($errors->all() as $error)
                                              <span class="badge badge-danger">{{ $error }}</span>
                                          @endforeach
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                  @endif
                                  {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                              <label for="">Nombre del Rol:</label>
                                              {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                              <label for="">Permisos para este Rol:</label>
                                              <br/>
                                              @foreach($permission as $value)
                                                  <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                      {{ $value->name }}</label>
                                                  <br/>
                                              @endforeach
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                      <button type="submit" class="btn btn-dark text-capitalize border border-left border-right
                            border-top border-bottom border-light rounded-lg active text-decoration-none">Guardar</button>
                                      </div>
                                  </div>
                                  {!! Form::close() !!}
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

