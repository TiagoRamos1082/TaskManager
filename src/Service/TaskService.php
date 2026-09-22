<?php

namespace App\Service;

use App\Model\Task;

class TaskService
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = [];
    }

    public function createTask(string $title): bool
    {
        $task = new Task($title);

        $this->tasks[] = $task;

        return true;
    }

    public function listTasks(): array
    {
        return $this->tasks;
    }

    public function changeStatus(int $index): bool
    {
        $index -= 1;

        $task = $this->tasks[$index];

        $task->changeStatus();

        return true;
    }

    public function deleteTask(int $index): bool
    {
        $index -= 1;

        unset($this->tasks[$index]);

        $this->tasks = array_values($this->tasks);

        return true;
    }
}
