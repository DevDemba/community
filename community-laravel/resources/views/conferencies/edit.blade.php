@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Share
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
            <form method="post" action="{{ route('conferencies.update', $conferency->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Title :</label>
                    <input type="text" class="form-control" name="title" value={{ $conferency->title }} />
                </div>
                <div class="form-group">
                    <label for="image">Image :</label>
                    <input type="file" class="form-control" name="image" value={{ $conferency->image }} />
                </div>
                <div class="form-group">
                    <label for="place">Lieu :</label>
                    <input type="text" class="form-control" name="place" value={{ $conferency->place }} />
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" class="form-control" name="description" value={{ $conferency->description }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection