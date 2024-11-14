@extends('layouts')

@section('content')

<!-- Posts Table -->
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ Str::limit($post->description, 50) }}</td>
                <td>{{ $post->user->name ?? 'N/A' }}</td>
                <td>{{ $post->is_active ? 'Active' : 'Inactive' }}</td>
                <td>{{ $post->created_at->format('Y-m-d') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>



    
@endsection

    
    
