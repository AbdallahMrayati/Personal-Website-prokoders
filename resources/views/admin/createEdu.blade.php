@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add Educations</h2>
        <form action="{{ route('educations.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="dateFromTo" class="form-label">Start - End</label>
                <input type="text" class="form-control" placeholder="2019 - 2020" id="dateFromTo" name="dateFromTo">
            </div>
            <div class="mb-3">
                <label for="institute" class="form-label">Institute</label>
                <textarea class="form-control" id="institute" name="institute"></textarea>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <input type="text" class="form-control" id="Description" name="des">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
