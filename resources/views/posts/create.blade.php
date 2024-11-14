@extends('layouts')

@section('content')
    <div class="card">
        <div class="card-body">

            <h3>Create New Post</h3>

            <form action="{{ route('post.store') }}" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label><br>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content:</label><br>
                    <textarea id="description" class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content:</label><br>
                    <textarea id="description" class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="is_active" class="form-label">Status:</label><br>
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <a href="{{ route('post.index') }}" class="btn btn-primary mx-2">Back</a> 
                <button type="submit" class="btn btn-success">Create Post</button>
            </form>

        </div>
    </div>
@endsection
