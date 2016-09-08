@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.nav')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - Metas de los catalizadores</div>

                <div class="panel-body">
                    <h3>Paso 4</h3>
                    <p>Por último, usted puede consultar los procesos sugeridos por COBIT, en función a las metas con las que ha alineado sus objetivos.</p>

                    <br />
                    <p>Objetivos estratégicos alineados:</p>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Metas</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<5; ++$i)
                        <tr>
                            <td>Objetivo estratégico {{ $i }}</td>
                            <th><button type="button" class="btn btn-primary btn-sm">Ver procesos P y S</button></th>
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
