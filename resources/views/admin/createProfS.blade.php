@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add Professional Skills</h2>
        <form action="{{ route('professional-skills.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="projectName" class="form-label">Skills Name</label>
                <input type="text" class="form-control" id="projectName" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
