<?php

namespace App\Repositories;

use App\Events\PostCreated;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PostRepository extends BaseRepository
{

    protected $model;

    public function __construct(Post $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getActivePost()
    {
        return $this->model->where('is_active', true)->get();
    }

    public function createPost(array $data)
    {
        $post = $this->create($data);

        if ($post) {
            event(new PostCreated($post));
            $users = User::where('id', '!=', Auth::user()->id)->get();
            foreach ($users as $user) {
                Mail::to($user->email)->queue(new PostCreatedMail($post));
            }
        }

        return $post;
    }
}
