<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header style="margin-bottom: 100px;">
    @include('nav')
</header>
    <div class="container">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h1 style="text-transform: capitalize">{{$conferency->title}}</h1>
            <img class="responsive-img" src="{{ asset('images/'.$conferency->image) }}"/>
            <span class="flow-text green-text text-darken-2">{{$conferency->place}}</span>
            <p class="flow-text">{{$conferency->description}}<p/>
            <span class="flow-text blue-text text-darken-2">{{$conferency->date}}</span><br>
            <div class="row">
                <form action="{{route('votes')}}" method="post">
                    @csrf
                    <div class="col s1">
                        <input name="vote" type="radio" value="1" id="1" />
                        <button type="submit"><i class="large material-icons">star</i></button>
                    </div>
                </form>

               <form action="{{route('votes')}}" method="post">
                   @method('PATCH')
                    @csrf
                    <div class="col s1">
                        <input name="vote" type="radio" value="2" id="2" />
                        <button type="submit" ><i class="large material-icons">star</i></button>
                    </div>
                </form>

               <form action="{{route('votes')}}" method="post">
                    @csrf
                    <div class="col s1">
                        <input name="vote" type="radio" value="3" id="3" />
                        <button type="submit"><i class="large material-icons">star</i></button>
                    </div>
                </form>

               <form action="{{route('votes')}}" method="post">
                    @csrf
                    <div class="col s1">
                        <input name="vote" type="radio" value="4" id="4" />
                        <button type="submit"><i class="large material-icons">star</i></button>
                    </div>
                </form>

               <form action="{{route('votes')}}" method="post">
                    @csrf
                    <div class="col s1">
                        <input name="vote" type="radio" value="5" id="5" >
                        <button type="submit"><i class="large material-icons">star</i>
                        </button></div>
            </div>
        </div>
    </div>
</body>
</html>
