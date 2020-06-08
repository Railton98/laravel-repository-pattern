<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class EloquentCategoryRepository extends BaseEloquentRepository implements CategoryRepositoryInterface
{
    public function entity()
    {
        return Category::class;
    }
}
