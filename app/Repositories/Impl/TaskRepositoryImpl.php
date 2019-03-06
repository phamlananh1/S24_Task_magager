<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-05
 * Time: 17:02
 */

namespace App\Repositories\Impl;


use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\TaskRepository;
use App\Task;

class TaskRepositoryImpl extends EloquentRepository implements TaskRepository
{
    public function getModel()
    {
       $model = Task::class;
       return $model;
    }
}