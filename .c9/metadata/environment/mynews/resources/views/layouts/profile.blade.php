{"filter":false,"title":"profile.blade.php","tooltip":"/mynews/resources/views/layouts/profile.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":48,"column":29},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":49,"column":0},"end":{"row":49,"column":24},"action":"insert","lines":["                        "]},{"start":{"row":49,"column":24},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":50,"column":24},"end":{"row":76,"column":29},"action":"insert","lines":["{{-- 以下を追記 --}}","                        <!-- Authentication Links -->","                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}","                        @guest","                            <li><a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('Login') }}</a></li>","                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}","                        @else","                            <li class=\"nav-item dropdown\">","                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">","                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"","                                       onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                        {{ __('Logout') }}","                                    </a>","","                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                        @csrf","                                    </form>","                                </div>","                            </li>","                            @endguest","                            {{-- 以上までを追記 --}}","                        </ul>"],"id":6}],[{"start":{"row":0,"column":15},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":25,"column":72},"end":{"row":25,"column":72},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1622978461754,"hash":"f86f4d35e167823d11bae168dd71ffefb7ff130e"}