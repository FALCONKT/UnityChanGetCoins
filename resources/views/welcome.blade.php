@extends('layouts.app')

@section('content')
    <div id="all_rapp" class="center jumbotron">

        <div class="text-center">

            @if (Auth::check())
            
            
                <!--<h1>Unityちゃんと不思議な小判</h1>-->
                 {{-- 会員ページへのリンク --}}
                {!! link_to_route('users.show', '会員Pageへ！！', ['user' => Auth::id()], ['class' => 'btn btn-lg btn-primary']) !!}
                

            @else

                <!--<h1>Unityちゃんと不思議な小判</h1>-->

                 {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'LogInしてPlayする！！', [], ['class' => 'btn btn-lg btn-primary']) !!}

            @endif

        </div>

        <section id="videozone">
            <h2>Promotion動画</h2>
            <video src="{{asset('/data/Video_01.mp4')}}" loop autoplay muted></video>
        </section>


        <section id="story">

            <h2>説話</h2>
        </section>

        <section id="unitychan">
            <h2>Unityちゃん</h2>
        </section>

        <section id="game_disc">
            <h2>Gameについて</h2>
        </section>

        <section id="youkai">
            <h2>じごく迷路の敵達</h2>
        </section>

        <section id="stage">
            <h2>じごく迷路の場面</h2>
        </section>


        <!--お問い合わせForm-->
        <div id="contactform" class="panel panel-default">
            <div class="panel-heading">
                <h2>お問い合わせ</h2>
            </div>
            
            <div class="panel-body">
                {{-- エラーの表示 --}}
                <!--@if ($errors->any())-->
                <!--    <div class="alert alert-danger">-->
                <!--        <ul>-->
                <!--            @foreach ($errors->all() as $error)-->
                <!--                <li>{{ $error }}</li>-->
                <!--            @endforeach-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--@endif-->

                {!! Form::open(['url' => 'contact/confirm',
                            'class' => 'form-horizontal']) !!}

                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <h3>
                    {!! Form::label('type', 'お問い合わせ内容:', ['class' => 'col-sm-4 control-label']) !!}
                    </h3>
                    <div class="col-sm-10">
                        @foreach($types as $key => $value)
                            <label class="checkbox-inline">
                                <h4>
                                    {!! Form::checkbox('type[]', $value) !!}
                                    {{ $value }}
                                </h4>
                            </label>
                            
                        @endforeach
                        @if ($errors->has('type'))
                            <span class="help-block">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <h3>
                    {!! Form::label('name', 'お名前:', ['class' => 'col-sm-4 control-label']) !!}
                    </h3>
                    <div class="col-sm-10">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <h3>
                    {!! Form::label('email', 'メールアドレス:', ['class' => 'col-sm-4 control-label']) !!}
                    </h3>
                    <div class="col-sm-10">
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                

                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                    <h3>
                    {!! Form::label('gender', '性別:', ['class' => 'col-sm-4 control-label']) !!}
                    </h3>
                    <div class="col-sm-10">
                        @foreach($genders as $key => $value)
                            <label class="checkbox-inline">
                                <h4>
                                {!! Form::radio('gender', $value) !!}
                                {{ $value }}
                                </h4>
                            </label>
                        @endforeach
                        @if ($errors->has('gender'))
                            <span class="help-block">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <h3>
                    {!! Form::label('body', '内容:', ['class' => 'col-sm-4 control-label']) !!}
                    </h3>
                    <div class="col-sm-10">
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('body'))
                            <span class="help-block">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        {!! Form::submit('確認', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>




 
    </div>
     <!--id="all_rapp" END-->
     
@endsection