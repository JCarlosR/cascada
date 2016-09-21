@extends('layouts.app')

@section('menu-options')
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-check"></span> Registrar empresa</a></li>
    </ul>
@endsection

@section('title', 'Cascada de metas')
@section('subtitle', 'Inicio de sesión')

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        <legend>Por favor ingrese sus datos para acceder al sistema.</legend>
        {{ csrf_field() }}

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
            <label for="password" class="col-md-2 control-label">Password</label>

            <div class="col-md-10">
                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Recordar sesión
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </div>
    </form>
@endsection
