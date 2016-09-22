@extends('layouts.app')

@section('metas')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('menu-options')
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-info-sign"></span> Datos de la empresa</a></li>
        <li><a href="{{ url('/uno') }}"><span class="glyphicon glyphicon-ok-sign"></span> Objetivos estratégicos</a></li>
        <li><a href="{{ url('/dos') }}"><span class="glyphicon glyphicon-tasks"></span> Metas corporativas</a></li>
        <li class="active"><a href="{{ url('/tres') }}"><span class="glyphicon glyphicon-th-list"></span> Metas TI</a></li>
        <li><a href="{{ url('/cuatro') }}"><span class="glyphicon glyphicon-th"></span> Procesos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas - Paso 3 de 4')
@section('subtitle', 'Lo siguiente es alinear las metas corporativas con las metas TI de COBIT.')

@section('content')
    <fieldset>
        <legend>Metas corporativas (Relacionadas con las TI)</legend>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>N</th>
                <th>Objetivos estratégicos alineados</th>
                <th>Dimensión</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @for($i=0; $i<count($objectives); ++$i)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $objectives[$i]->aligned_description }}</td>
                    <td>{{ $objectives[$i]->dimension_name }}</td>
                    <th>
                        <button type="button" class="btn btn-primary btn-xs" data-action="align" data-toggle="modal" data-target="#modalAlign">
                            <span class="glyphicon glyphicon-circle-arrow-up"></span> Alinear
                        </button>
                    </th>
                </tr>
            @endfor
            </tbody>
        </table>
    </fieldset>
@endsection

@section('extra-content')
    <div id="modalAlign" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Alinear con metas TI</h4>
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
            <a href="{{ url('/cuatro') }}" class="btn btn-primary pull-right">
                Continuar <span class="glyphicon glyphicon-hand-right"></span>
            </a>
        </div>
    </div>
@endsection
