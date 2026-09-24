# Service

A camada **Service** é responsável por executar as operações relacionadas ao gerenciamento das tarefas.

## TasksService

O `TasksService` centraliza as regras de negócio da aplicação relacionadas às tarefas.

Ele utiliza a entidade `Task` para representar as tarefas e disponibiliza as operações necessárias para manipulá-las.

### Responsabilidades

* Criar novas tarefas;
* Listar as tarefas cadastradas;
* Alternar o status de uma tarefa;
* Alternar o titulo de uma tarefa;
* Deletar tarefas;


### Estrutura

```text 
Service/
└── TasksService.php
```

### Fluxo

```text 
Controller
    ↓
TasksService
    ↓
Task
```

O `Controller` recebe a ação solicitada pelo usuário e encaminha a operação para o `TasksService`.

O `TasksService` executa a regra de negócio necessária utilizando os objetos `Task` e retorna o resultado para o `Controller`.

A camada Service não é responsável pela apresentação das informações no terminal.
