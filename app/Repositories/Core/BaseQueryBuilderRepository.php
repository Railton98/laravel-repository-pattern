<?php

namespace App\Repositories\Core;

use DB;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Exceptions\PropertyTableNotExists;

class BaseQueryBuilderRepository implements RepositoryInterface
{
    protected $tb;

    public function __construct()
    {
        $this->tb = $this->resolveTable();
    }
    public function getAll()
    {
        return DB::table($this->tb)->get();
    }

    public function findById($id)
    {
        return DB::table($this->tb)->find($id);
    }

    public function findWhere($column, $value)
    {
        return DB::table($this->tb)
            ->where($column, $value)
            ->get();
    }

    public function findWhereFirst($column, $value)
    {
        return DB::table($this->tb)
            ->where($column, $value)
            ->first();
    }

    public function paginate($totalPage = 10)
    {
        return DB::table($this->tb)->paginate($totalPage);
    }

    public function store(array $data)
    {
        return DB::table($this->tb)->create($data);
    }

    public function update($id, array $data)
    {
        return DB::table($this->tb)
            ->where('id', $id)
            ->create($data);
    }

    public function delete($id)
    {
        return DB::table($this->tb)
            ->where('id', $id)
            ->delete();
    }

    public function resolveTable()
    {
        if (!property_exists($this, 'table')) {
            throw new PropertyTableNotExists();
        }

        return $this->table;
    }
}
