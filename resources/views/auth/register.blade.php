@extends('layouts.app')

@section('menu-options')
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
        <li class="active"><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-check"></span> Registrar empresa</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas')
@section('subtitle', 'Registrar nueva empresa')

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <legend>Ingrese los siguientes datos para completar el registro.</legend>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">Nombre completo</label>

            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-2 control-label">E-mail address</label>

            <div class="col-md-10">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-2 control-label">Contraseña</label>

            <div class="col-md-10">
                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="col-md-2 control-label">Confirmar contraseña</label>

            <div class="col-md-10">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {{--<div class="form-group">--}}
            {{--<div class="col-lg-10 col-lg-offset-2">--}}
                {{--<input type="checkbox" name="demo"> Deseo incluir contenido demostrativo en mi cuenta.--}}
                {{--<a href="#" data-toggle="tooltip" title="Se crearán algunos objetivos estratégicos en su cuenta. Si no marca esta opción, usted podrá llenar sus datos desde cero.">(?)</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
