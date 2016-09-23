@extends('layouts.app')

@section('metas')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('menu-options')
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-info-sign"></span> Datos de la empresa</a></li>
        <li><a href="{{ url('/uno') }}"><span class="glyphicon glyphicon-ok-sign"></span> Objetivos estratégicos</a></li>
        <li><a href="{{ url('/dos') }}"><span class="glyphicon glyphicon-tasks"></span> Metas corporativas</a></li>
        <li><a href="{{ url('/tres') }}"><span class="glyphicon glyphicon-th-list"></span> Metas TI</a></li>
        <li class="active"><a href="{{ url('/cuatro') }}"><span class="glyphicon glyphicon-th"></span> Procesos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas - Paso 4 de 4')
@section('subtitle', 'Por último, consulte los procesos sugeridos por COBIT, en función a las metas TI.')

@section('content')
    <fieldset>
        <legend>Metas TI (Metas de los catalizadores)</legend>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Metas TI</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @for($i=0; $i<count($objectives); ++$i)
                <tr>
                    <td>{{ $objectives[$i]->aligned_description }}</td>
                    <th>
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalProcesses{{ $i }}">
                            <span class="glyphicon glyphicon-asterisk"></span> Ver procesos
                        </button>
                    </th>
                </tr>
            @endfor
            </tbody>
        </table>
    </fieldset>
@endsection

@section('extra-content')
    @for($i=0; $i<count($objectives); ++$i)
    <div id="modalProcesses{{ $i }}" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Procesos COBIT</h4>
                </div>
                <div class="modal-body">
                    @if(count($objectives[$i]->corporateGoals) == 0)
                        <div class="alert alert-danger fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Alerta!</strong>
                            <ul>
                                <li>El objetivo seleccionado no ha sido alineado a metas corporativas.</li>
                                <li>Por favor verifique el paso 2.</li>
                            </ul>
                        </div>
                    @else
                        <p>Metas corporativas asociadas al objetivo alineado.</p>
                    @endif
                    @foreach($objectives[$i]->corporateObjectives as $corporateObjective)
                        <p><strong>Meta corporativa {{ $corporateObjective->corporateGoal->id }}</strong>: {{ $corporateObjective->corporateGoal->description }}</p>
                        <button data-toggle="collapse" data-target="#ti{{ $corporateObjective->id }}">Ver metas TI asociadas</button>
                        <div id="ti{{ $corporateObjective->id }}" class="collapse">
                            @foreach($corporateObjective->tiGoals as $tiGoal)
                                <ul>
                                    <li>
                                        <strong>Meta TI {{ $tiGoal->id }} de COBIT:</strong>
                                        <p>{{ $tiGoal->description }}</p>
                                        <button data-toggle="collapse" data-target="#processes{{ $tiGoal->id }}">Ver procesos asociados</button>
                                        <div id="processes{{ $tiGoal->id }}" class="collapse">
                                            <ul>
                                                @foreach($tiGoal->processes as $process)
                                                    <li><strong>{{ $process->id }}:</strong> {{ $process->description }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @endfor

    <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-12">
            <a href="{{ url('/') }}" class="btn btn-primary pull-right">
                Volver a iniciar <span class="glyphicon glyphicon-hand-left"></span>
            </a>
        </div>
    </div>
@endsection

