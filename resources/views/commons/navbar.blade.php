<header class="mb-4">
    <nav id="navin" class="navbar navbar-expand-sm navbar-dark bg-dark">
        
        {{-- トップページへのリンク --}}
        <div id="logo_part">
            <h1>
                <a class="navbar-brand" href="/">
                <img id="logo" src="{{asset('/img/Title.png')}}" alt="Unityちゃんと不思議な小判">
                </a>
            </h1>
        </div>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
 
                 @if (Auth::check())
                 
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- 会員PageのLink --}}
                            <li class="dropdown-item">{!! link_to_route('users.show', 'My Page', ['user' => Auth::id()]) !!}</li>
                           
                            <li class="dropdown-divider"></li>
                           
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
                
                    <li class="nav-item"><a href="/">TOPへ</a></li>
                    <li class="nav-item"><a href="/#storyhead">導　入　説　話</a></li>
                    <li class="nav-item"><a href="/#unitychan">Unityちゃん</a></li>
                    <li class="nav-item"><a href="/#game">Gameのとくちょー</a></li>
                    <li class="nav-item"><a href="/#enemy">じごく迷路のようかい</a></li>
                    <li class="nav-item"><a href="/#stage">じごく迷路</a></li>
                    <li class="nav-item"><a href="/#toi">お問い合わせ</a></li>
                
                @else

                    <li class="nav-item"><a href="/">TOPへ</a></li>
                    <li class="nav-item"><a href="/#storyhead">導　入　説　話</a></li>
                    <li class="nav-item"><a href="/#unitychan">Unityちゃん</a></li>
                    <li class="nav-item"><a href="/#game">Gameのとくちょー</a></li>
                    <li class="nav-item"><a href="/#enemy">じごく迷路のようかい</a></li>
                    <li class="nav-item"><a href="/#stage">じごく迷路</a></li>
                    <li class="nav-item"><a href="/#toi">お問い合わせ</a></li>


                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>

                @endif

            </ul>
        </div>
    </nav>
</header>