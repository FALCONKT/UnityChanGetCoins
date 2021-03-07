@extends('layouts.app')

@section('content_2')
    <div class="text-center">
        <h2>Sign up</h2>
    </div>

    <div class="row">
        <div class="col-sm-8 offset-sm-2">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Sign up', ['class' => 'SighnupButton']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

    <footer>
    <p>©2021 C&C Inc TaemC All right All Rights Researved.</p>
    </footer>