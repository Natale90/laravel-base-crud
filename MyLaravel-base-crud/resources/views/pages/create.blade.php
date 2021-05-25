@extends('layouts.main-layout')

@section('sectionCreate')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">

                <form class="" action="{{ route('store') }}" method="POST">

                    @csrf
                    @method('POST')

                    <div class="">
                        <label for="name">Name</label>
                        <input  id="name" type="text" name="name" value="">
                    </div>

                    <div class="">
                        <label for="lastname">lastname</label>
                        <input  id="lastname" type="text" name="lastname" value="">
                    </div>

                    <div class="">
                        <label for="date_of_birth">Date of birth</label>
                        <input  id="date_of_birth" type="date" name="date_of_birth" value="">
                    </div>

                    <div class="">
                        <label for="document_type">Document type</label>
                        <input  id="document_type" type="text" name="document_type" value="">
                    </div>

                    <div class="">
                        <label for="document_number">Document number</label>
                        <input  id="document_number" type="text" name="document_number" value="">
                    </div>


                    <div class="row text-center">
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="button">Add new guest</button>
                        </div>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>
@endsection
