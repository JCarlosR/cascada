@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.nav')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - Introducción</div>

                <div class="panel-body">
                    <h3>Cascada de Metas de COBIT 5</h3>

                    <p>Cada empresa opera en un contexto diferente; este contexto está determinado por factores externos (el mercado, la industria, geopolítica, etc.) y factores internos (la cultura, organización, umbral de riesgo, etc.) y requiere un sistema de
                    gobierno y gestión personalizado.</p>

                    <p>Las necesidades de las partes interesadas deben transformarse en una estrategia corporativa factible. La cascada de metas de COBIT 5 es el mecanismo para traducir las necesidades de las partes interesadas en metas corporativas, metas relacionadas con las TI y metas catalizadoras específicas, útiles y a medida.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
