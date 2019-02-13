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
    @include('nav')

    @section('content')
        <style>
            .uper {
                margin-top: 40px;
            }
        </style>
        <div class="uper">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Title</b></td>
                    <td><b>Image</b></td>
                    <td><b>Place</b></td>
                    <td><b>Description</b></td>
                    <td><b>Date</b></td>
                    <td colspan="2"><b>Action</b></td>
                </tr>
                </thead>
                <tbody>
                @foreach($conferencies as $conferency)
                    <tr>
                        <td>{{$conferency->id}}</td>
                        <td>{{$conferency->title}}</td>
                        <td> <img src="images/{{ Session::get('image') }}"></td>
                        <td>{{$conferency->place}}</td>
                        <td>{{$conferency->description}}</td>
                        <td>{{$conferency->date}}</td>
                        <td><a href="" class="btn btn-primary">Voter</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</body>
</html>
