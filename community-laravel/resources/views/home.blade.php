@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(auth()->check())
                        @if (auth()->user()->type === 'admin')
                            <span style="display: flex;justify-content: center;">{{ Auth::user()->name }}</span><br>
                            <p>Ma page d'administration :</p>
                                <li><a href="{{ route('user.index') }}">Liste des utilisateurs</a></li>
                                <li><a href="{{ route('conferencies.index') }}">Liste des conferences</a></li>
                                <li><a href="{{ route('admin') }}">Les statuts</a></li>
                                <li><a href="{{ route('conferencies.create') }}">Ajouter une conference</a></li>
                        @else
                            You are logged in!<br />
                            <li><a href="{{ route('allconferencies') }}">Liste des conferences</a><br /></li>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
