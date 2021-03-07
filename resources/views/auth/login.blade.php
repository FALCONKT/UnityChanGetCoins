@extends('layouts.app')

@section('content_2')
    <div class="text-center">
        <h2>Log in</h2>
    </div>

    <div class="row">
        <div class="col-sm-8 offset-sm-2">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'LogInButton']) !!}
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        

        </div>
    </div>


    
@endsection


    <footer>
    <p>©2021 C&C Inc TaemC All right All Rights Researved.</p>
    </footer>