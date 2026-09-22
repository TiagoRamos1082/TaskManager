<?php

namespace App\Controller;

use App\Service\TaskService;
use App\View\TaskView;

class TaskController
{
    private TaskView $view;
    private TaskService $tasks;
    private bool $isRunning;

    public function __construct()
    {
        $this->view = new TaskView();
        $this->tasks = new TaskService();
        $this->isRunning = true;
    }

    public function execute(): void
    {
        while ($this->isRunning)
        {
            $tasks = $this->tasks->listTasks();

            $option = $this->view->menu($tasks);

            switch ($option)
            {
                case 1:
                    $title = $this->view->createTask($tasks);

                    $result = $this->tasks->createTask($title);

                    if ($result) {
                        $this->view->success("Tarefa criada com sucesso!");
                    }

                    break;

                case 2:
                    $index = $this->view->changeStatus($tasks);

                    $result = $this->tasks->changeStatus($index);

                    if ($result) {
                        $this->view->success("Status da tarefa alterado com sucesso!");
                    }

                    break;

                case 3:
                    $index = $this->view->deleteTask($tasks);

                    $result = $this->tasks->deleteTask($index);

                    if ($result) {
                        $this->view->success("Tarefa deletada com sucesso!");
                    }

                    break;

                case 0:
                    $this->isRunning = false;
                    break;
            }
        }
    }
}
