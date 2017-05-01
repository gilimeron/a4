<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'Daycare manager')
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
                      <li><a href='/babies'>View babies</a></li>
                      <li><a href='/teachers'>View teachers</a></li>
                      <li><a href='/classrooms'>View classrooms</a></li>
                      <li><a href='/babies/new'>Add a new baby</a></li>
                      <li><a href='/teachers/new'>Add a new teacher</a></li>
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
