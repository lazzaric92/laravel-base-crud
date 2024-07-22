@extends('layouts.app')

@section('page-title', 'Edanna Reserve')

@section('main-content')
    <h1 class="text-center fw-bold">Edanna Reserve</h1>

    <ul>
        @foreach ($animals as $animal)
            <li> {{$animal['name']}} </li>
        @endforeach
    </ul>
@endsection
