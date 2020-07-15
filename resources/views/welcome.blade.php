@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">PHP Dasar 1</div>
                    <div class="card-body">
                        <a href="{{ route('home.one') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">PHP Dasar 2</div>
                    <div class="card-body">
                        <a href="{{ route('home.two') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">PHP Dasar 3</div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
