@extends('layouts.app')

@section('content')
    <div class="center jumbotron">

        <div class="text-center">

            @if (Auth::check())
            
            
                <h1>Unityちゃんと不思議な小判</h1>
                 {{-- 会員ページへのリンク --}}
                {!! link_to_route('users.show', '会員Pageへ！！', ['user' => Auth::id()], ['class' => 'btn btn-lg btn-primary']) !!}
                

            @else

                <h1>Unityちゃんと不思議な小判</h1>

                 {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'LogInしてPlayする！！', [], ['class' => 'btn btn-lg btn-primary']) !!}

            @endif


<video src="/unitychancoin/resources/data/Video_01.mp4" loop autoplay muted></video>




            <!--お問い合わせForm-->
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
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
                        {!! Form::label('type', 'お問い合わせ種類:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($types as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::checkbox('type[]', $value) !!}
                                    {{ $value }}
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
                        {!! Form::label('name', 'お名前:', ['class' => 'col-sm-2 control-label']) !!}
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
                        {!! Form::label('email', 'メールアドレス:', ['class' => 'col-sm-2 control-label']) !!}
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
                        {!! Form::label('gender', '性別:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($genders as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::radio('gender', $value) !!}
                                    {{ $value }}
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
                        {!! Form::label('body', '内容:', ['class' => 'col-sm-2 control-label']) !!}
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
            <!--お問い合わせForm　END-->
            




        </div>
    </div>
@endsection