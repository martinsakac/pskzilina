<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PSK Žilina</title>
    {{ HTML::style('css/styles.css'); }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/signin.css') }}
</head>
<body>

    <h1>PSK Žilina - Master swimming club Žilina</h1>

    @if(!Auth::check())
        <ul>
            <li><a href="/signup">Registrovať sa</a></li>
            <li><a href="/login">Prihlásiť sa</a></li>
        </ul>
    @else
        <a href="/logout">Odhlásiť sa</a>
        {{ link_to("/users/{$user->id}", $user->email) }}
    @endif

    @yield('navbar')

    @yield('content')

</body>
</html>
