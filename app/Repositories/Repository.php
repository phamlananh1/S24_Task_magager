<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-05
 * Time: 16:49
 */

namespace App\Repositories;


interface Repository
{
    public function getAll();
    public function create($obj);
    public function find($id);
    public function update($obj);
    public function destroy($obj);


}