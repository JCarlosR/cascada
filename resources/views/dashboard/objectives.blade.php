@extends('layouts.app')

@section('metas')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('menu-options')
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-info-sign"></span> Datos de la empresa</a></li>
        <li class="active"><a href="{{ url('/uno') }}"><span class="glyphicon glyphicon-ok-sign"></span> Objetivos estratégicos</a></li>
        <li><a href="{{ url('/dos') }}"><span class="glyphicon glyphicon-tasks"></span> Metas corporativas</a></li>
        <li><a href="{{ url('/tres') }}"><span class="glyphicon glyphicon-th-list"></span> Metas TI</a></li>
        <li><a href="{{ url('/cuatro') }}"><span class="glyphicon glyphicon-th"></span> Procesos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('cerrar-sesion') }}"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas - Paso 1 de 4')
@section('subtitle', 'Empiece por definir los objetivos estratégicos de su empresa.')

@section('content')
    <fieldset>
        <legend>Objetivos estratégicos (Motivos de las partes interesadas)</legend>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Objetivos estratégicos</th>
                <th>Dimensión</th>
                <th>Acción</th>
            </tr>
            </thead>
            <tbody>
            @for($i=0; $i<5; ++$i)
                <tr>
                    <td>Objetivo estratégico {{ $i }}</td>
                    <td>Financiera</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-xs" data-action="edit" data-toggle="modal" data-target="#modalEditar">
                            <span class="glyphicon glyphicon-edit"></span> Editar
                        </button>
                        <button type="button" class="btn btn-primary btn-xs" data-action="remove">
                            <span class="glyphicon glyphicon-remove"></span> Eliminar
                        </button>
                    </td>
                </tr>
            @endfor
            </tbody>
        </table>

        <form action="{{ url('objectives') }}" method="POST" id="formRegistrar">
            <div class="form-group">
                <label for="txtCapa" class="col-lg-1 control-label">Nuevo objetivo:</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="descripcion" id="txtCapa" placeholder="Descripción del objetivo estratégico" required>
                </div>
                <div class="col-lg-3">
                    <select name="dimension" class="form-control">
                        <option value="">Seleccione dimensión</option>
                        <option value="1">Financiera</option>
                        <option value="2">Cliente</option>
                        <option value="3">Interna</option>
                        <option value="4">Aprendizaje</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-ok"></span> Agregar
                    </button>
                </div>
            </div>
        </form>
    </fieldset>
@endsection

@section('extra-content')
    <!-- Modal -->
    <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Editar objetivo estratégico</h4>
                </div>
                <form action="{{ url('capa/modificar') }}" method="POST" id="formEditarCapa">
                    <div class="modal-body">
                        <template id="template-alerta">
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Hey!</strong> <span></span>
                            </div>
                        </template>
                        <p>Ingrese una nueva descripción.</p>
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="txtIdEditar" name="idCapa">
                            <input type="text" class="form-control" id="txtCapaEditar" name="descripcion">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-ok"></span> Guardar cambios
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-12">
            <a href="{{ url('/dos') }}" class="btn btn-primary pull-right">
                Continuar <span class="glyphicon glyphicon-hand-right"></span>
            </a>
        </div>
    </div>
@endsection
