@extends('layouts.main-layout')

@section('sectionDetails')

    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2>
                    Name: {{ $ospite -> name }}
                 </h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <h2>
                    Lastname: {{ $ospite -> lastname }}
                </h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <h4>
                    Date of bith: {{ $ospite -> date_of_birth }}
                </h4>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <h4>
                    Document type: {{ $ospite -> document_type }}
                </h4>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <h4>
                    Document number: {{ $ospite -> document_number }}
                </h4>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('home') }}">
                    Bring me back home
                </a>
            </div>
        </div>
    </div>

@endsection
