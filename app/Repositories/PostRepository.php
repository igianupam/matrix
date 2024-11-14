<?php
namespace App\Repositories;
use App\Models\Post;

Class PostRepository extends BaseRepository {

    protected $model;

    public function __construct(Post $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getActivePost(){
        return $this->model->where('is_active', true)->get();
    }

    public function createPost(array $data){
        return $this->create($data);
    }
}

?>