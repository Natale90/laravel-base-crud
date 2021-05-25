@extends('layouts.main-layout')

@section('sectionHome')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2>
                    Welcome Home
                </h2>
                <h4>
                    lista Ospiti
                </h4>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <ul>
                    @foreach ($ospiti as $ospite)
                        <li>
                            <a href="{{ route('details', $ospite -> id ) }}">
                                [{{ $ospite -> id }}] {{ $ospite -> name }} {{ $ospite -> lastname }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="row text-center">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('create') }}">
                    Create new Ospite
                </a>
            </div>
        </div>
    </div>
@endsection
