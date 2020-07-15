@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('home.one.test-score') }}">
                        @csrf
                        <p>Given $nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;</p>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Chose Feature</label>
                            <select class="form-control" name="feature">
                                <option value="1">Average Score</option>
                                <option value="2">7 Highest Score</option>
                                <option value="3">7 Lowest Score</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>

                    </form>
                </div>

        </div>
    </div>
@endsection
