@extends('layouts.app')

@section('metas')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('menu-options')
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-info-sign"></span> Datos de la empresa</a></li>
        <li><a href="{{ url('/uno') }}"><span class="glyphicon glyphicon-ok-sign"></span> Objetivos estratégicos</a></li>
        <li class="active"><a href="{{ url('/dos') }}"><span class="glyphicon glyphicon-tasks"></span> Metas corporativas</a></li>
        <li><a href="{{ url('/tres') }}"><span class="glyphicon glyphicon-th-list"></span> Metas TI</a></li>
        <li><a href="{{ url('/cuatro') }}"><span class="glyphicon glyphicon-th"></span> Procesos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas - Paso 2 de 4')
@section('subtitle', 'Lo siguiente es alinear los objetivos de su empresa con las metas de COBIT.')

@section('content')
    <fieldset>
        <legend>Objetivos estratégicos (Metas corporativas)</legend>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>N</th>
                <th>Objetivos estratégicos originales</th>
                <th>Dimensión</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @for($i=0; $i<count($objectives); ++$i)
                <tr>
                    <td>{{ ($i+1) }}</td>
                    <td>{{ $objectives[$i]->description }}</td>
                    <td>{{ $objectives[$i]->dimension_name }}</td>
                    <th>
                        <button type="button" class="btn btn-primary btn-xs" data-align="{{ $objectives[$i]->dimension }}" data-id="{{ $objectives[$i]->id }}">
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
                    <h4 class="modal-title">Alinear con metas corporativas</h4>
                </div>
                <form action="{{ url('objectives/aligned') }}" method="POST" id="formEditarCapa">
                    <div class="modal-body">
                        <p>Metas corporativas COBIT que pertenecen a la misma dimensión.</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>N</th>
                                <th>Metas corporativas</th>
                                <th class="text-center">¿Se asocia?</th>
                            </tr>
                            </thead>
                            <tbody id="corporate_list">
                            </tbody>
                        </table>

                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="aligned_id">
                        <div class="form-group">
                            <label for="aligned_description">Si desea puede actualizar la redacción del objetivo presione ENTER</label>
                            <input type="text" class="form-control" id="aligned_description" name="description">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-12">
            <a href="{{ url('/tres') }}" class="btn btn-primary pull-right">
                Continuar <span class="glyphicon glyphicon-hand-right"></span>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/corporate.js') }}"></script>
@endsection
