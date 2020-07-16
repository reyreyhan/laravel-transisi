@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">Company</div>
                    <div class="card-body">
                        <a href="{{ route('company.index') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">Employee</div>
                    <div class="card-body">
                        <a href="{{ route('employee.index') }}" class="btn btn-primary">
                            Go To
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
