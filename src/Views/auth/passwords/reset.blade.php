@extends('layouts.admin.auth')

@section('content')

    <div class="panel-heading">
        <h3 class="text-center">Réinitialiser mon mot de passe</h3>
    </div>
    <div class="panel-body">
        @include('parts/flash')
        {!! Form::open(['url'=> 'admin::reset','method'=>'post']) !!}

        {!! Form::hidden('token', $token) !!}

        <div class="form-group m-b-15">
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Votre adresse e-mail'])  !!}
        </div>

        <div class="form-group m-b-15">
            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Mot de passe'])  !!}
        </div>

        <div class="form-group m-b-15">
            {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirmation de votre mot de passe'])  !!}
        </div>

        <div class="form-group text-center m-t-40">
            <div class="col-xs-12">
                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                    Changer mon mot de passe
                </button>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('admin::login') }}" style="color:#888">Je me souviens de mon compte</a>
        </div>
        {!! Form::close() !!}
    </div>

    </div>
@endsection