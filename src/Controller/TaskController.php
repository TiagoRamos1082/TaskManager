<?php

namespace App\Controller;

use App\Service\TaskService;
use App\View\TaskView;
use Exception;

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

                    try {
                        $result = $this->tasks->createTask($title);

                        $this->view->success("Tarefa criada com sucesso!");

                    } catch(Exception $e) {

                        $this->view->fail($e->getMessage());
                    }

                    break;

                case 2:
                    $index = $this->view->changeStatus($tasks);

                    try {
                        $result = $this->tasks->changeStatus($index);

                        $this->view->success("Status alterado com sucesso!");

                    } catch(Exception $e) {

                        $this->view->fail($e->getMessage());
                    }

                    break;

                case 3:
                    $responses = $this->view->changeTitleTask($tasks);

                    try {
                        $result = $this->tasks->changeTitleTask($responses);

                        $this->view->success("Status alterado com sucesso!");

                    } catch(Exception $e) {

                        $this->view->fail($e->getMessage());
                    }

                    break;

                case 4:
                    $index = $this->view->deleteTask($tasks);

                    try {
                        $result = $this->tasks->deleteTask($index);

                        $this->view->success("Tarefa deletada com sucesso!");

                    } catch(Exception $e) {

                        $this->view->fail($e->getMessage());
                    }

                    break;

                case 0:
                    $this->isRunning = false;
                    break;

                default:
                    $this->isRunning = true;
                    break;
            }
        }
    }
}
