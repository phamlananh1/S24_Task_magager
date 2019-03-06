<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-05
 * Time: 17:09
 */

namespace App\Services;


interface TaskService
{
    public function getAll();
    public function update($request, $task);
    public function create($request);
    public function find($id);
    public function destroy($obj);

}