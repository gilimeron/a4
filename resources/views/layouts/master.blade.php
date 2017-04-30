<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'Board Game Nights Coordinator')
    </title>

    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>

    <div id='content'>
        @if(Session::get('message') != null)
            <div class='message'>{{ Session::get('message') }}</div>
        @endif

        <header>
            <nav>
                <ul>
                      <li><a href='/'>Home</a></li>
                      <li><a href='/games'>View games</a></li>
                      <li><a href='/players'>View players</a></li>
                      <li><a href='/meetings'>View meetings</a></li>
                      <li><a href='/games/new'>Add a new game</a></li>
                      <li><a href='/players/new'>Add a new player</a></li>
                      <li><a href='/meetings/new'>Add a new meeting</a></li>
                </ul>
            </nav>
        </header>

        <section>
            @yield('content')
        </section>

        <footer>
        </footer>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="/js/games.js"></script>

        @stack('body')

    </body>
    </html>
