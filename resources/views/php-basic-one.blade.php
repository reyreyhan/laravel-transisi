@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">Test Scores</div>
                    <div class="card-body">
                        <a href="{{ route('home.one.test-score') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">Find Lower</div>
                    <div class="card-body">
                        <a href="{{ route('home.one.find-lower') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">Word</div>
                    <div class="card-body">
                        <a href="{{ route('home.one.word') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
