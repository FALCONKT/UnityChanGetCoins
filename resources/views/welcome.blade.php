@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Unityちゃんと不思議な小判</h1>
            
            
             {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'LogInしてPlayする！！', [], ['class' => 'btn btn-lg btn-primary']) !!}

        </div>
    </div>
@endsection