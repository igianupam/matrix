@extends('layouts')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="my-2">
                <a class="btn btn-success" href="{{ route('post.create') }}">Create Post</a>
            </div>

            <div>
                <!-- Posts Table -->
                <table class="table table-striped">
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

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
                cluster: "{{ env('PUSHER_APP_CLUSTER') }}",
                encrypted: true
            });

            const channel = pusher.subscribe('posts');
            channel.bind('posts', function(data) {
                alert("A new post is created");
            });
        });
    </script>
@endpush
