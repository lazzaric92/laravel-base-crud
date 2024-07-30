@extends('layouts.app')

@section('page-title', )
'Info: {{$pokemon->name}} #{{$pokemon->pokedex_index}}'
@endsection

@section('head-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')
    <h2 class="text-center fw-bold mb-4">#{{$pokemon->pokedex_index}}: {{$pokemon->name}} </h2>

    <div class="container py-3" id="show-pokemon">
        <div class="row">

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message')}}
                </div>
            @endif

            <article class="col-12 d-flex justify-content-between border border-4 border-danger rounded-3 mb-4">
                <div class="card-image border-end p-4 border-3 border-danger">
                    <img src="{{ $pokemon->image_url }}" alt="{{$pokemon->name}}" class="me-4">
                </div>
                <div class="card-body d-flex justify-content-between align-items-center p-3 py-4 px-5">
                    <div class="pkm-info ms-2">
                        <p class="fw-bold"><em>{{$pokemon->category}} Pokémon</em> </p>
                        <p>Ability: {{$pokemon->ability}} </p>
                        <p>Gender:
                            @if ( lcfirst(trim($pokemon->gender)) == 'male' )
                            <i class="fa-solid fa-mars"></i>
                            @elseif( lcfirst(trim($pokemon->gender)) === 'female' )
                                <i class="fa-solid fa-venus"></i>
                            @else
                                <i class="fa-solid fa-genderless"></i>
                            @endif
                        </p>
                        <p>Nature: {{$pokemon->nature}}</p>
                        <p>Types:
                            <span class="badge rounded-pill text-uppercase {{lcfirst(trim($pokemon->primary_type))}}">{{$pokemon->primary_type}}</span>
                            <span class="badge rounded-pill text-uppercase {{lcfirst(trim($pokemon->secondary_type))}}">{{$pokemon->secondary_type}}</span>
                        </p>
                        <p>Size: {{$pokemon->size}}m </p>
                    </div>
                    <div class="pkm-stats w-50">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="w-25"></th>
                                    <th class="w-25"></th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-baseline">
                                    <td class="fw-bold text-center">HP</td>
                                    <td>{{$pokemon->hp}}</td>
                                    <td class="d-flex align-items-center">
                                        <div class="progress w-100 bg-transparent">
                                            <div class="progress-bar bg-info rounded" aria-valuemin="0" aria-valuemax="100" style="width:@php
                                                echo ($pokemon->hp / 255 * 100)
                                            @endphp%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-baseline">
                                    <td class="fw-bold text-center">Atk</td>
                                    <td>{{$pokemon->atk}}</td>
                                    <td class="d-flex align-items-center">
                                        <div class="progress w-100 bg-transparent">
                                            <div class="progress-bar bg-info rounded" aria-valuemin="0" aria-valuemax="100" style="width:@php
                                                echo ($pokemon->atk / 255 * 100)
                                            @endphp%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-baseline">
                                    <td class="fw-bold text-center">Def</td>
                                    <td>{{$pokemon->def}}</td>
                                    <td class="d-flex align-items-center">
                                        <div class="progress w-100 bg-transparent">
                                            <div class="progress-bar bg-info rounded" aria-valuemin="0" aria-valuemax="100" style="width:@php
                                                echo ($pokemon->def / 255 * 100)
                                            @endphp%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-baseline">
                                    <td class="fw-bold text-center">Sp.Atk</td>
                                    <td>{{$pokemon->sp_atk}}</td>
                                    <td class="d-flex align-items-center">
                                        <div class="progress w-100 bg-transparent">
                                            <div class="progress-bar bg-info rounded" aria-valuemin="0" aria-valuemax="100" style="width:@php
                                                echo ($pokemon->sp_atk / 255 * 100)
                                            @endphp%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-baseline">
                                    <td class="fw-bold text-center">Sp.Def</td>
                                    <td>{{$pokemon->sp_def}}</td>
                                    <td class="d-flex align-items-center">
                                        <div class="progress w-100 bg-transparent">
                                            <div class="progress-bar bg-info rounded" aria-valuemin="0" aria-valuemax="100" style="width:@php
                                                echo ($pokemon->sp_def / 255 * 100)
                                            @endphp%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-baseline">
                                    <td class="fw-bold text-center">Speed</td>
                                    <td>{{$pokemon->speed}}</td>
                                    <td class="d-flex align-items-center">
                                        <div class="progress w-100 bg-transparent">
                                            <div class="progress-bar bg-info rounded" aria-valuemin="0" aria-valuemax="100" style="width:@php
                                                echo ($pokemon->speed / 255 * 100)
                                            @endphp%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-baseline">
                                    <td class="fw-bold text-center" colspan="2">Tot. stats</td>
                                    <td>{{$pokemon->tot_stats}}</td>
                                    <td class="d-flex align-items-center">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
            <div class="col-12 d-flex justify-content-around">
                <a class="btn btn-success" href=" {{route('admin.pokemon.edit', $pokemon)}} ">Edit</a>
                <a class="btn btn-danger" href=" {{route('admin.pokemon.index')}} ">Back to Safari Zone</a>
                <form action="{{route('admin.pokemon.destroy', $pokemon)}}" method="POST" class="delete-form d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary ms-2">Free</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    @vite('resources/js/confirm-delete.js')
@endsection
