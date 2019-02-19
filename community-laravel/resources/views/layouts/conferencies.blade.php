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
                    <td><img src="{{ Session::get('image') }}" style="width: 50px; height: 50px;" alt="{{$conferency->image}}"></td>
                    <td>{{$conferency->place}}</td>
                    <td>{{$conferency->description}}</td>
                    <td>{{$conferency->date}}</td>
                    {{--<td><a href="{{ route('viewDetails',$conferency->id)}}" class="btn btn-primary">View</a></td>--}}
                    <td><a href="{{ route('conferencies.show', $conferency->id) }}" class="btn btn-primary">View</a></td>
                    <td><a href="" class="btn btn-primary">Voter</a></td>
                    <!-- Modal Trigger -->
                    {{--<td class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</td> <!-- Modal Trigger -->--}}
                    <td><button data-target="modal1" class=" waves-effect waves-light btn modal-trigger">Modal</button></td>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Modal Header</h4>
                            <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center mt-5"> {{ $conferencies->links() }} </div>
    </div>
    </div>
            <script>

                // document.addEventListener('DOMContentLoaded', function() {
                //     var elems = document.querySelectorAll('.modal');
                //     // var instances = M.Modal.init(elems, options);
                // });
            </script>
@endsection
