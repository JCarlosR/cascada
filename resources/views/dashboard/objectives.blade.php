@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.nav')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - Motivos de las partes interesadas</div>

                <div class="panel-body">
                    <h3>Paso 1</h3>

                    <p>Registre los objetivos estratégicos de su empresa.</p>

                    <form action="#" class="form">
                        <div class="form-group">
                            <label for="description">Objetivo</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="ti"> Es TI?
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Añadir</button>
                        </div>
                    </form>

                    <br />
                    <p>Objetivos estratégicos registrados:</p>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Objetivos estratégicos</th>
                            <th>TI</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<5; ++$i)
                        <tr>
                            <td>Objetivo estratégico {{ $i }}</td>
                            <td><input type="checkbox"></td>
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
