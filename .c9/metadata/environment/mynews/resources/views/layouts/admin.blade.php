{"filter":false,"title":"admin.blade.php","tooltip":"/mynews/resources/views/layouts/admin.blade.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":60,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ app()->getLocale() }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <!-- CSRF Token -->","         {{-- 後の章で説明します --}}","        <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","","        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}","        <title>@yield('title')</title>","","        <!-- Scripts -->","         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}","        <script src=\"{{ secure_asset('js/app.js') }}\" defer></script>","","        <!-- Fonts -->","        <link rel=\"dns-prefetch\" href=\"https://fonts.gstatic.com\">","        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,600\" rel=\"stylesheet\" type=\"text/css\">","","        <!-- Styles -->","        {{-- Laravel標準で用意されているCSSを読み込みます --}}","        <link href=\"{{ secure_asset('css/app.css') }}\" rel=\"stylesheet\">","        {{-- この章の後半で作成するCSSを読み込みます --}}","        <link href=\"{{ secure_asset('css/admin.css') }}\" rel=\"stylesheet\">","    </head>","    <body>","        <div id=\"app\">","            {{-- 画面上部に表示するナビゲーションバーです。 --}}","            <nav class=\"navbar navbar-expand-md navbar-dark navbar-laravel\">","                <div class=\"container\">","                    <a class=\"navbar-brand\" href=\"{{ url('/') }}\">","                        {{ config('app.name', 'Laravel') }}","                    </a>","                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">","                        <span class=\"navbar-toggler-icon\"></span>","                    </button>","","                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">","                        <!-- Left Side Of Navbar -->","                        <ul class=\"navbar-nav mr-auto\">","","                        </ul>","","                        <!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">","                        </ul>","                    </div>","                </div>","            </nav>","            {{-- ここまでナビゲーションバー --}}","","            <main class=\"py-4\">","                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}","                @yield('content')","            </main>","        </div>","    </body>","</html>"],"id":1}],[{"start":{"row":48,"column":29},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":49,"column":0},"end":{"row":49,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":49,"column":24},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":50,"column":0},"end":{"row":50,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":50,"column":24},"end":{"row":79,"column":29},"action":"insert","lines":["<!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">","","                        {{-- 以下を追記 --}}","                        <!-- Authentication Links -->","                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}","                        @guest","                            <li><a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('Login') }}</a></li>","                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}","                        @else","                            <li class=\"nav-item dropdown\">","                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">","                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"","                                       onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                        {{ __('Logout') }}","                                    </a>","","                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                        @csrf","                                    </form>","                                </div>","                            </li>","                            @endguest","                            {{-- 以上までを追記 --}}","                        </ul>"],"id":5}],[{"start":{"row":46,"column":23},"end":{"row":48,"column":29},"action":"remove","lines":[" <!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">","                        </ul>"],"id":6}]]},"ace":{"folds":[],"scrolltop":357,"scrollleft":0,"selection":{"start":{"row":46,"column":23},"end":{"row":46,"column":23},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":44,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1622376385383,"hash":"e6787abcd09e0a57f47691c1edeecd00a3865fa2"}