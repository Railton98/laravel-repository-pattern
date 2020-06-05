<?php

namespace App\Repositories\Core\Eloquent;

use App\Models\Product;
use App\Repositories\Core\BaseEloquentRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;

class EloquentProductRepository extends BaseEloquentRepository implements ProductRepositoryInterface
{
    public function entity()
    {
        return Product::class;
    }
}
