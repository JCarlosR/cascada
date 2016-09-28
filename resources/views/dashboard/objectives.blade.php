@extends('layouts.app')

@section('metas')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('styles')
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
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
        <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas - Paso 1 de 4')
@section('subtitle', 'Empiece por definir los objetivos estratégicos de su empresa.')

@section('content')
    <fieldset id="app">
        <legend>Objetivos estratégicos (Motivos de las partes interesadas)</legend>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>N</th>
                <th>Objetivos estratégicos</th>
                <th>Dimensión</th>
                <th>Acción</th>
            </tr>
            </thead>
            <tbody v-if="objectives.length">
                <tr v-for="objective in objectives | orderBy 'dimension'" v-cloak>
                    <td>@{{ $index+1 }}</td>
                    <td>@{{ objective.description }}</td>
                    <td>@{{ objective.dimension_name }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-xs" @click="editObjective($index)">
                            <span class="glyphicon glyphicon-edit"></span> Editar
                        </button>
                        <button type="button" class="btn btn-primary btn-xs" @click="removeObjective($index)">
                            <span class="glyphicon glyphicon-remove"></span> Eliminar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <form action="{{ url('objectives') }}" method="POST" id="formRegistrar" @submit.prevent="submitObjective">
            <div class="form-group">
                <label for="description" class="col-lg-1 control-label">Nuevo objetivo:</label>
                <div class="col-lg-6">
                    <input type="text" v-model="newObjective.description" class="form-control" name="description" placeholder="Descripción del objetivo estratégico" required>
                </div>
                <div class="col-lg-3">
                    <select name="dimension" class="form-control" v-model="newObjective.dimension" required>
                        <option value="">Seleccione dimensión</option>
                        <option value="1">Financiera</option>
                        <option value="2">Cliente</option>
                        <option value="3">Interna</option>
                        <option value="4">Aprendizaje</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary" v-if="newObjective.edit">
                        <span class="glyphicon glyphicon-floppy-disk"></span>
                    </button>
                    <button type="submit" class="btn btn-primary" v-else="newObjective.edit">
                        <span class="glyphicon glyphicon-ok"></span> Agregar
                    </button>


                    <button type="submit" class="btn btn-default" v-if="newObjective.edit" @click="cancelEdit">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </div>
            </div>
        </form>
    </fieldset>
@endsection

@section('extra-content')
    <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-12">
            <a href="{{ url('/dos') }}" class="btn btn-primary pull-right">
                Continuar <span class="glyphicon glyphicon-hand-right"></span>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/errors.js') }}"></script>
    <script src="{{ asset('js/objectives.js') }}"></script>
@endsection
