@extends('layouts.admin.auth')

@section('content')
    <div class="panel-heading">
        <h3 class="text-center"> Connexion </h3>
    </div>

    <div class="panel-body">
        @include('parts.flash')
        {!! Form::open(['url'=>route('admin::login'),'class'=>'form-horizontal m-t-20']) !!}
        <div class="form-group">
            {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'E-mail'])  !!}
        </div>

        <div class="form-group">
            {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Mot de passe'])  !!}
        </div>

        <div class="form-group ">
            <div class="col-xs-12">
                <div class="checkbox checkbox-primary">
                    {!! Form::checkbox('remember') !!}
                    <label for="remember">
                        se souvenir de moi
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group text-center m-t-40">
            <button type="submit" class="btn btn-primary btn-block text-uppercase waves-effect waves-light">Se
                connecter
            </button>
        </div>
        <div class="form-group m-t-30 m-b-0">
            <div class="col-sm-12">
                <a href="{{ route('admin::forget') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i>
                    mot de passe oublié</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>


@endsection
