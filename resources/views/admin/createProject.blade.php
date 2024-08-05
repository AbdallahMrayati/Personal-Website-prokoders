@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add Project</h2>
        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="projectName" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="projectName" name="name">
            </div>
            <div class="mb-3">
                <label for="projectDescription" class="form-label">Project Description</label>
                <textarea class="form-control" id="projectDescription" name="des"></textarea>
            </div>
            <div class="mb-3">
                <label for="projectImage" class="form-label">Project Image</label>
                <input type="file" class="form-control" id="projectImage" name="img">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
