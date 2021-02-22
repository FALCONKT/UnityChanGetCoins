@extends('layouts.app')

@section('content')
    <div class="center jumbotron">

        <div class="text-center">

            @if (Auth::check())
            {{ Auth::user()->name }}
            @else

                <h1>Unityちゃんと不思議な小判</h1>

                 {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'LogInしてPlayする！！', [], ['class' => 'btn btn-lg btn-primary']) !!}

            @endif

        </div>
    </div>
@endsection