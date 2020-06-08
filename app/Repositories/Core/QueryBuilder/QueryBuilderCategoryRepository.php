<?php

namespace App\Repositories\Core\QueryBuilder;

use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Core\BaseQueryBuilderRepository;

class QueryBuilderCategoryRepository extends BaseQueryBuilderRepository implements CategoryRepositoryInterface
{
    protected $table = 'categories';
}
