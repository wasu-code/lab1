<html lang="pl">

<head>
    <title>{$page_title|default:"Z powodu kryzysu nie ma napisu"}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$cfg->app_url}/app/views/templates/assets/css/main.css" />
    <link rel="stylesheet" href="{$cfg->app_url}/css/main.css" />
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Logo -->
            <h1><a href="{$cfg->app_url}/index.php" id="logo">{$page_header|default:"AAAaaaa"}</a></h1>

            <div><em>Zalogowano jako:
                    {if empty($user)}
                        gość
                    {else}
                        {$user->login}
                    {/if}
                </em></div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="{if (isset($current) && $current=='calc')}current{/if}"><a href="{$cfg->action_url}calcShow">Kalkulator</a></li>
                    <li class="{if (isset($current) && $current=='about')}current{/if}"><a href="{$cfg->action_url}aboutShow">O nas</a></li>
                    <li class=""><a href="{$cfg->action_url}logOut">Wyloguj</a></li>
                </ul>
            </nav>

        </div>
        <div id="page-content">
            {block name="content"}Nie udało się załadować zawartości{/block}
        </div>
        <!-- Footer -->
        <div id="footer">
            <div id="disclaimer"> 🛈 Powyższy kalkulator może nie przedstawiać poprawnych wyników i został stworzony
                jedynie w celach edukacyjnych.
            </div>



            <!-- Copyright -->
            <div class="copyright">
                <ul class="menu">
                    <li>&copy; Untitled. All rights reserved</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>

        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>