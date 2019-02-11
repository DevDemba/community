<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="display: flex; justify-content:center; flex-direction:column; align-items:center;">

@include('nav')

<h1>My page Admin</h1>

<div style="margin-top: 60px">
    @auth
        <div><h2>Mon profil : <b>{{ Auth::user()->name }}</b></h2></div><br>

        <h2>Liste des utilisateurs : </h2>
        <div>
            @foreach($users as $user)
                <li>{{ $user->name }}</li><br>
            @endforeach
        </div><br>

        <div> Utilisateur(s) Connecté(s)</div><br>
        <div>
            @if($user = Auth::user())
             {{ $user = Auth::user()->name }} <br>
            @endif
        </div>

    @endauth

    @guest

        // utilisateur non connecté...
    @endguest
</div>

</body>
</html>