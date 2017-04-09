<?php

  namespace App\Repositories;

  use App\Post;
  use App\Redis;

  class Posts
  {
    public function __construct(Redis $redis)
    {
      $this->redis = $redis;
    }

    public function all()
    {
      // retrun all posts
      return Post::all();
    }

    public function find()
    {
      // find a post
    }
  }
?>
