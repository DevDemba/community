@extends('layout')

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
                <td><b>Lieu</b></td>
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
                    <td><img style="width:50px; height: 50px;" src="{{ url('images/'.$conferency->image) }}"/></td>
                    <td>{{$conferency->place}}</td>
                    <td>{{$conferency->description}}</td>
                    <td>{{$conferency->date}}</td>
                    <td><a href="{{ route('conferencies.show',$conferency->id)}}" class="btn btn-primary">View</a></td>
                    <td><a href="{{ route('conferencies.edit',$conferency->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('conferencies.destroy', $conferency->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-5"> {{ $conferencies->links() }} </div>
        </div>
@endsection