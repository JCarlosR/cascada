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
                    <td>{{ ($i+1) }}</td>
                    <td>{{ $objectives[$i]->aligned_description }}</td>
                    <td>{{ $objectives[$i]->dimension_name }}</td>
                    <th>
                        <button type="button" class="btn btn-primary btn-xs" data-align="{{ $objectives[$i]->id }}">
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
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Seleccione las metas TI de COBIT con las que se asocia su objetivo estratégico.</h4>
                </div>
                <div class="modal-body">
                    <div id="grouped_ti_goals">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
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

@section('scripts')
    <script src="{{ asset('js/ti.js') }}"></script>
@endsection
