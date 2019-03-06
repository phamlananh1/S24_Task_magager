<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-05
 * Time: 17:01
 */

namespace App\Repositories\Eloquent;


use App\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    public function setModel(){
        $this->model = app()->make($this->getModel());
    }
    abstract public function getModel();

    public function getAll()
    {
        return $this->model->all();
    }
    public function create($obj)
    {
        return $obj->save();

    }
    public function find($id)
    {
       return $this->model->find($id);
    }
    public function update($obj)
    {
      return $obj->save();
    }
    public function destroy($obj)
    {
        return $obj->delete();
    }

}