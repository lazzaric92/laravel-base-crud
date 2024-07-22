@extends('layouts.app')

@section('page-title', 'Edanna Reserve')

@section('main-content')
    <h1 class="text-center fw-bold mb-5">Edanna Reserve</h1>

    <div class="container">
        <table class="table table-hover table-striped text-center">
            <thead class="table-info">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"><em>Species</em></th>
                    <th scope="col">Age</th>
                    <th scope="col">Health status</th>
                    <th scope="col">Location</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal)
                <tr>
                    <th scope="row"> {{$animal->id}} </th>
                    <td scope="col">{{$animal->name}}</td>
                    <td scope="col"><em>{{$animal->species}}</em></td>
                    <td scope="col">{{$animal->age}}</td>
                    <td scope="col">{{$animal->health_status}}</td>
                    <td scope="col">{{$animal->location}}</td>
                    <td scope="col">
                        <a href="{{route('admin.animal.show', $animal)}}" class="btn btn-primary btn-small">Info</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
