<!-- Create Post Section -->
<div style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    <h3>Create New Post</h3>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf <!-- CSRF token for security -->
        
        <div style="margin-bottom: 10px;">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required style="width: 100%; padding: 8px;">
        </div>
        
        <div style="margin-bottom: 10px;">
            <label for="content">Content:</label><br>
            <textarea id="description" name="description" rows="4" required style="width: 100%; padding: 8px;"></textarea>
        </div>
        
        <div style="margin-bottom: 10px;">
            <label for="is_active">Status:</label><br>
            <select id="is_active" name="is_active" style="width: 100%; padding: 8px;">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Create Post
        </button>
    </form>
</div>