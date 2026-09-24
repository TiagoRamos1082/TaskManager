<?php

namespace App\Service;

use App\Model\Task;
use Exception;

class TaskService
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = [];
    }

    private function findTask(int $index): Task
    {
        $index -= 1;

        if(!isset($this->tasks[$index])) {
            throw new Exception("Tarefa nao encontrada!");
        }

        return $this->tasks[$index];

    }


    public function createTask(string $title): bool
    {
        if(empty($title)){
            throw new Exception("Titulo invalido!");
        }

        $task = new Task($title);

        $this->tasks[] = $task;

        return true;
    }

    public function changeTitleTask(array $response): bool
    {
        $index = $response[0];
        $title = $response[1];

        $task = $this->findTask($index);


        if(empty($title)){
            throw new Exception("Titulo invalido!");
        }

        $task->setTitle($title);

        return true;
    }


    public function listTasks(): array
    {
        return $this->tasks;
    }

    public function changeStatus(int $index): bool
    {
        $task = $this->findTask($index);

        $task->changeStatus();

        return true;
    }

    public function deleteTask(int $index): bool
    {
        $taskExist = $this->findTask($index);

        $list = array_values($this->tasks);

        if($taskExist) {
            unset($list[($index - 1)]);
            $newList = $list;
        }

        $this->tasks = $newList;

        return true;
    }
}
