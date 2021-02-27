@extends('layouts.app')

@section('content')

    <div id="top_Image">


        <video src="{{asset('/data/TOP_R.mp4')}}" poster="" loop autoplay muted playsinline></video>

        <div class="text-center topButton">

            @if (Auth::check())
            <!--LogInしている場合-->
                <!--<h1>Unityちゃんと不思議な小判</h1>-->
                 {{-- 会員ページへのリンク --}}
                {!! link_to_route('users.show', '', ['user' => Auth::id()], ['class' => 'MemberpButton animate__animated animate__heartBeat']) !!}
                

            @else
            <!--LogInしていない場合-->
                <!--<h1>Unityちゃんと不思議な小判</h1>-->
                 {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '', ['user' => Auth::id()], ['class' => 'SignUpButton animate__animated animate__heartBeat']) !!}
            
            @endif

        </div>


    </div>
    
    
    <div id="all_rapp" class="center jumbotron">

        <section id="videozone">
        <h2>Introduction</h2>
            <div class="intro">
            <p>敵を殺し</p>
            <p>小判を手に入れ</p>
            <p>はいすこあを</p>
            <p>目指せ</p>
            </div>
            <!--動画-->
            <video src="{{asset('/data/Video_01.mp4')}}" loop autoplay muted playsinline></video>
        </section>


        <section id="story">

            <h2>説　　話</h2>
           
           <div class="desc"> 
            <p>飛び散る血液、上からもぎ取られる頭、容赦なく引き裂かれる肉体……<br>
            ――これは現実？　仮想世界？――<br>
            <br>
            どうやら闘いながら敵が落とした小判を可能な限り多く集め、この迷路を生きて脱出しなければならないようだ。
            <br>
            手にしている武器で敵を躊躇いなく殺していく。躊躇えば即、凄惨な殺され方をしゲームオーバー。<br>
            <br>
            まさに「血みどろの殺るが先か、殺られるが先か。」の生と死を分けたDeath(殺し合い)ゲームが始まる。</p>
            </div>
            
        </section>

        <section id="unitychan">
        
            <h2>Unityちゃん</h2>
            
                <div class="set">
                    <img src="{{asset('/img/UnityChan_img.png')}}">
        
                    <div class="desc"> 
                    <p>Unity業界で超有名な操作Charactor！
                    <br>
                    この度そのUnityちゃんが不思議な地獄迷宮に迷い込むことに。
                    <br>
                    持ち前の必殺武器で敵を次々となぎ倒し,迷路を進んでいくことになった。
                    </p>
                    </div>
                </div>
        
        </section>

        <section id="game_disc">
            
            <h2>Gameのとくちょー </h2>
            
            <ul>
                <li>不思議で和風な世界観の巨大な迷路攻略</li>
                <li>ときに仲間になる敵キャラがいる！！</li>
                <li>個性的な妖怪たち</li>
                <li>直接攻撃と関節攻撃を使い分けられる攻撃手法</li>
                <li>Unityちゃんの機敏なAction！！</li>
                <li>得点加算で高得点を狙え。全Userと得点を競える！！</li>
            </ul>
            
            
        </section>

        <section id="youkai">
            <h2>じごく迷路のようかい達</h2>
            <div class="enemy_stack">
                <div class="enemy">
                <h3>すらいむ</h3>
                <img src="{{asset('/img/slime.png')}}" alt="スライム">
                <p>敵といえば、最初は正にすらいむ！大きいものや小さいものまで幅広く存在する。ときに仲間になることもある。</p>
                    
                </div>
                <div class="enemy">
                <h3>豆おに</h3>
                <img src="{{asset('/img/demonbox.png')}}" alt="豆鬼">
                <p>箱型の小型の鬼。小さいからといって侮れない。しつこく食いついてくる。</p>
                 
                </div>
            </div>
            <div class="enemy_stack">
                <div class="enemy">
                <h3>どくろMan</h3>
                <img src="{{asset('/img/skelton.png')}}" alt="どくろMan">
                <p>迷路で死んだ旅人のなれの果て。化けて迷路に迷い込むものに襲い掛かる。
</p>
                    
                </div>
                
                <div class="enemy">
                <h3>河童</h3>
                <img src="{{asset('/img/kappa.png')}}" alt="河童">
                <p>地獄迷路の血の池周辺に頻出する水性のお化け。大きな槍でUnityちゃんを刺してくる。</p>
                    
                </div>
            </div>
            <div class="enemy_stack">
                <div class="enemy">
                <h3>くじらお化け</h3>
                <img src="{{asset('/img/whale.png')}}" alt="くじらお化け">
                <p>迷路の中で1，2を争う強敵。死んだくじらがその怨念で歩み寄り、しつこくUnityuちゃんを追ってくる。</p>
                    
                </div>
                
                <div class="enemy">
                <h3>やみのおおかみ</h3>
                <img src="{{asset('/img/darkwlof.png')}}" alt="くじらお化け">
                <p>迷路の中で1，2を争う強敵。圧倒的な食い付きよる攻撃Unityちゃんを激しく攻撃する。                巨大な邪悪の力と攻撃力でUnityちゃんに襲い掛かる。</p>
                    
                </div>
            </div>
            <div class="enemy_stack">
                <div class="enemy">
                <h3>？？？</h3>
               <img src="{{asset('/img/mmm.png')}}" alt="？？？">
                <p>迷路の奥に待ち受ける。不思議迷路の主。
                巨大な邪悪の力と攻撃力でUnityちゃんに襲い掛かる。</p>
                    
                </div>
            </div>
            
            
            
        </section>

        <section id="stage">
            <h2>じごく迷路の場面</h2>

            <div class="stage_stack">
                <div class="stage">
                    <h4>Game開始</h4>
                   <img src="{{asset('/img/s_start.png')}}" alt="Game開始">
                </div>
                <div class="stage">
                    <h4>敵が不思議な小判を落とす<h4>
                   <img src="{{asset('/img/s_coin_heart.png')}}" alt="敵が不思議な小判を落とす">
                </div>
            </div>

            <div class="stage_stack">
                <div class="stage">
                    <h4>きょ大な壁</h4>
                   <img src="{{asset('/img/s_wall.png')}}" alt="巨大な壁">
                </div>
                <div class="stage">
                    <h4>神社が各領域の境目</h4>
                   <img src="{{asset('/img/s_shrine.png')}}" alt="神社の場面">
                </div>
            </div>

            <div class="stage_stack">
                <div class="stage">
                    <h4>宝箱をGetしていこう！！</h4>
                   <img src="{{asset('/img/s_takarabox.png')}}" alt="妖怪達">
                </div>
                <div class="stage">
                    <h4>きょ大鉄球がUnityちゃんにせまる！</h4>
                   <img src="{{asset('/img/s_ironball.png')}}" alt="妖怪達">
                </div>
            </div>

            <div class="stage_stack">
                <div class="stage">
                    <h4>はげしくこうげきするようかい達</h4>
                   <img src="{{asset('/img/s_enemy.png')}}" alt="妖怪達">
                </div>
                <div class="stage">
                    <h4>げん想的な桜空間の迷路</h4>
                   <img src="{{asset('/img/s_sakura.png')}}" alt="妖怪達">
                </div>
            </div>

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