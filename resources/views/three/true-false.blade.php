@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form method="POST" action="{{ route('home.three.true-false') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Insert Word</label>
                        <input type="text" class="form-control" name="word" aria-describedby="emailHelp" placeholder="Enter word">

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
