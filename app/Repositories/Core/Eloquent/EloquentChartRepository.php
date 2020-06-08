<?php

namespace App\Repositories\Core\Eloquent;

use App\Repositories\Contracts\ChartRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class EloquentChartRepository extends BaseEloquentRepository implements ChartRepositoryInterface
{
    public function entity()
    {
        // return Chart::class;
    }
}
