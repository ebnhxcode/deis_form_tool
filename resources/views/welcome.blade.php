@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body text-center">
                    Formulario · Informaciones de transmision Vertical de VIH y Sífilis.
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    @if (!auth()->check())
                        Ir a <a href="{{url('/login')}}" class="btn btn-success"><i class="fa fa-btn fa-sign-in"></i> Login</a>
                    @else
                        Ir al <a href="{{url('/formulario')}}" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i> Formulario</a>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
