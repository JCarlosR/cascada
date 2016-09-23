@extends('layouts.app')

@section('menu-options')
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}"><span class="glyphicon glyphicon-info-sign"></span> Datos de la empresa</a></li>
        <li><a href="{{ url('/uno') }}"><span class="glyphicon glyphicon-ok-sign"></span> Objetivos estratégicos</a></li>
        <li><a href="{{ url('/dos') }}"><span class="glyphicon glyphicon-tasks"></span> Metas corporativas</a></li>
        <li><a href="{{ url('/tres') }}"><span class="glyphicon glyphicon-th-list"></span> Metas TI</a></li>
        <li><a href="{{ url('/cuatro') }}"><span class="glyphicon glyphicon-th"></span> Procesos</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span> Cerrar sesión</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas - Paso 0 de 4')
@section('subtitle', 'Bienvenido. A continuación una introducción.')

@section('content')
    <fieldset>
        <legend>Cascada de metas según COBIT 5</legend>

        <p>Cada empresa opera en un contexto diferente; este contexto está determinado por factores externos (el mercado, la industria, geopolítica, etc.) y factores internos (la cultura, organización, umbral de riesgo, etc.) y requiere un sistema de
        gobierno y gestión personalizado.</p>

        <p>Las necesidades de las partes interesadas deben transformarse en una estrategia corporativa factible. La cascada de metas de COBIT 5 es el mecanismo para traducir las necesidades de las partes interesadas en metas corporativas, metas relacionadas con las TI y metas catalizadoras específicas, útiles y a medida.</p>
    </fieldset>
@endsection

@section('extra-content')
    <div class="row" style="margin-bottom: 15px">
        <div class="col-lg-12">
            <a href="{{ url('/uno') }}" class="btn btn-primary pull-right">
                Iniciar <span class="glyphicon glyphicon-hand-right"></span>
            </a>
        </div>
    </div>
@endsection