@extends('admin/layouts/auth')

@section('content')

    <div class="panel-heading">
        <h3 class="text-center">Mot de passe perdu</h3>
    </div>
    <div class="panel-body">
        @include('parts/flash')
        {!! Form::open(['action'=>'Admin\Auth\PasswordController@getEmail']) !!}

        <div class="form-group m-b-0">
            <div class="input-group">
                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Adresse e-mail'])  !!}
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-pink w-sm waves-effect waves-light">
                        Récupérer
                    </button>
                </span>
            </div>
        </div>


        <div class="text-center m-t-15">
            <a href="{{ action('Admin\Auth\AuthController@getLogin') }}" style="color:#888">Je me souviens de mon compte</a>
        </div>
        {!! Form::close() !!}
    </div>
@endsection