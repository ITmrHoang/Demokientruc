<?php

namespace App\Repositories\BlogsRepository;

use App\Blog;
use App\Repositories\General\AbstractRepository;

class BlogsEloquentRepository extends AbstractRepository {
	function getModel() {
		return Blog::class;
	}

	function xinchao() {
		return "xin chào";
	}

}