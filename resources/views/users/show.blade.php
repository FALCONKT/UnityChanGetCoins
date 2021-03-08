@extends('layouts.app')

@section('content_2')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User {{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{--<li class="nav-item"><a href="#" class="nav-link">TimeLine</a></li>--}}
            </ul>
            
            <div class="gamebanner">
            <a href="/gamedata/index.html">
                <img src="{{asset('/img/Game_Banner.png')}}" alt="GameStart">
            </a>
            </div>


        </div>

        <div>
       {{--  {!! link_to_route('gamedata.index', 'Game', ['user' => Auth::id()], ['class' => '']) !!}--}}
        </div>
    
           

    </div>
@endsection


    <footer>
    <p>©2021 C&C Inc TaemC All right All Rights Researved.</p>
    </footer>