@extends('layouts.admin.auth')

<!-- Main Content -->
@section('content')
    <div class="panel-heading">
        <h3 class="text-center">Réinitialiser mon mot de passe</h3>
    </div>
    <div class="panel-body">
        @include('parts/flash')
        {!! Form::open(['url'=> 'admin::forget.email']) !!}

        <div class="form-group m-b-15">
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Votre adresse e-mail'])  !!}
        </div>

        <div class="form-group text-center m-t-40">
            <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                Mot de passe oublié
            </button>
        </div>

        {!! Form::close() !!}
    </div>

@endsection
