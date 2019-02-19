@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Conferency
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
                    <label for="autocomplete-input">Title :</label>
                    <input type="text" id="autocomplete-input" class="form-control" name="title" value={{ $conferency->title }} />
                </div>
                <div class="form-group">
                    <label for="autocomplete-input">Image :</label>
                    <input type="file" id="autocomplete-input" class="form-control" name="image" value={{ $conferency->image }} />
                </div>
                <div class="form-group">
                    <label for="autocomplete-input">Lieu :</label>
                    <input type="text" id="autocomplete-input" class="form-control" name="place" value={{ $conferency->place }} />
                </div>
                <div class="form-group">
                    <label for="autocomplete-input">Description :</label>
                    <input type="text" id="autocomplete-input" class="form-control" name="description" value={{ $conferency->description }} />
                </div>
                <div class="form-group">
                    <label for="autocomplete-input">Date :</label>
                    <input type="date" id="autocomplete-input" class="form-control" name="date" value={{ $conferency->date }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection