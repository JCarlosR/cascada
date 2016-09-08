@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.nav')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - Metas corporativas</div>

                <div class="panel-body">
                    <h3>Paso 2</h3>
                    <p>Lo siguiente es alinear los objetivos de su empresa con las metas de COBIT.</p>

                    <br />
                    <p>Objetivos estratégicos registrados:</p>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Objetivos estratégicos</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<5; ++$i)
                        <tr>
                            <td>Objetivo estratégico {{ $i }}</td>
                            <th><button type="button" class="btn btn-primary btn-sm">Alinear</button></th>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
