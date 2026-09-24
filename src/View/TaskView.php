<?php

namespace App\View;

class TaskView
{
    public function listTasks(array $tasks): void
    {
        foreach ($tasks as $index => $task)
        {
            $title = $task->getTitle();
            $done = $task->getStatus();

            print("[" . ($done ? "X" : " ") . "] " . ($index + 1) . " - " . $title . "\n");
        }

        print("\n");
    }

    public function menu(array $tasks): int
    {
        $this->clear();

        print("==============================\n");
        print("    GERENCIADOR DE TAREFAS    \n");
        print("==============================\n");

        $this->listTasks($tasks);

        print("==============================\n");

        print("1. CRIAR TAREFA\n");
        print("2. ALTERNAR STATUS\n");
        print("3. ALTERAR NOME DA TAREFA");
        print("4. DELETAR TAREFA\n");
        print("0. SAIR\n");

        $option = trim(fgets(STDIN));

        if(filter_var($option, FILTER_VALIDATE_INT) || $option == 0){
            return $option;
        } else {
            return -1;
        }

    }

    public function createTask(array $tasks): string
    {
        $this->clear();

        print("==============================\n");
        print("    GERENCIADOR DE TAREFAS    \n");
        print("==============================\n");

        $this->listTasks($tasks);

        print("==============================\n");

        print("CRIAR TAREFA\n\n");
        print("Digite o nome da tarefa: ");

        return trim(fgets(STDIN));
    }

    public function changeNameTask(array $tasks): string
    {
        $this->clear();

        print("==============================\n");
        print("    GERENCIADOR DE TAREFAS    \n");
        print("==============================\n");

        $this->listTasks($tasks);

        print("==============================\n");

        print("ALTERAR NOME DA TAREFA\n\n");
        print("Digite o nome da tarefa: ");

        return trim(fgets(STDIN));
    }

    public function changeStatus(array $tasks): int
    {
        $this->clear();

        print("==============================\n");
        print("    GERENCIADOR DE TAREFAS    \n");
        print("==============================\n");

        $this->listTasks($tasks);

        print("==============================\n");

        print("ALTERNAR STATUS\n\n");
        print("Digite o índice da tarefa: ");

        return (int) trim(fgets(STDIN));
    }

    public function deleteTask(array $tasks): int
    {
        $this->clear();

        print("==============================\n");
        print("    GERENCIADOR DE TAREFAS    \n");
        print("==============================\n");

        $this->listTasks($tasks);

        print("==============================\n");

        print("DELETAR TAREFA\n\n");
        print("Digite o índice da tarefa: ");

        return (int) trim(fgets(STDIN));
    }

    public function success(string $message): void
    {
        $this->clear();
        print("\n" . $message . "\n");

        print("\nPressione ENTER para continuar...\n");
        fgets(STDIN);
    }

    public function fail(string $message): void
    {
        $this->clear();
        print("\n !---" . $message . "---!\n");

        print("\nPressione ENTER para continuar...\n");
        fgets(STDIN);
    }

    public function clear(): void
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            system('cls');
        } else {
            system('clear');
        }
    }
}
