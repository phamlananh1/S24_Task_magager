<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-05
 * Time: 17:20
 */

namespace App\Services\Impl;

use App\Repositories\TaskRepository;
use App\Services\TaskService;
use App\Task;
use Illuminate\Support\Facades\Storage;


class TaskServiceImpl implements TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAll()
    {
        return $this->taskRepository->getAll();
    }

    public function find($id)
    {
        return $this->taskRepository->find($id);
    }

    public function create($request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->dua_date = $request->input('dua_date');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $task->image = $path;
        }
        return $this->taskRepository->create($task);
    }

    public function update($task, $request)
    {
        //dd($task);
        $task->title = $request->title;
        $task->content = $request->content;
        $task->dua_date = $request->dua_date;
//dd(22);
        if ($request->hasFile('image')) {
            $currentImg = $task->image;
            if ($currentImg){
                Storage::delete('/public/'.$currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $task->image = $path;
        }

        //dd(11);
        return $this->taskRepository->update($task);
    }

    public function destroy($obj)
    {
        return $this->taskRepository->destroy($obj);
    }
}