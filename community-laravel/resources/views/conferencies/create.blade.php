@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Conferency
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('conferencies.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">title :</label>
                    <input type="text" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="image">image :</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">description :</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
                <div class="form-group">
                    <label for="place">place :</label>
                    <input type="text" class="form-control" name="place"/>
                </div>
                <div class="form-group">
                    <label for="date">date :</label>
                    <input type="date" class="form-control" name="date"/>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection