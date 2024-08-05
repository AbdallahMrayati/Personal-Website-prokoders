@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add Experience</h2>
        <form action="{{ route('experiences.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="dateFromTo" class="form-label">Start - End</label>
                <input type="text" class="form-control" placeholder="2019 - 2020" id="dateFromTo" name="dateFromTo">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <textarea class="form-control" id="position" name="position"></textarea>
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Company</label>
                <input type="text" class="form-control" id="company" name="company">
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Position Description</label>
                <input type="text" class="form-control" id="Description" name="des">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
