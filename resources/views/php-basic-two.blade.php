@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">Table</div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">Encrypt</div>
                    <div class="card-body">
                        <a href="{{ route('home.two.encrypt') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
