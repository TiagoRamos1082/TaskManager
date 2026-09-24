# Gerenciador de Tarefas

Aplicação de gerenciamento de tarefas executada através do terminal, desenvolvida em PHP com uma arquitetura organizada em camadas.

O projeto foi desenvolvido com foco na aplicação prática de conceitos de **organização de software, separação de responsabilidades, controle de versão e gerenciamento de configuração**.

## Funcionalidades

A aplicação permite:

* Cadastrar uma nova tarefa;
* Listar as tarefas cadastradas;
* Alternar o status de uma tarefa;
* Alterar o nome de uma tarefa;
* Deletar uma tarefa;
* Identificar visualmente o status das tarefas.

As tarefas são apresentadas no terminal utilizando `[ ]` para tarefas pendentes e `[X]` para tarefas concluídas.

Exemplo:

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

[ ] 1 - Estudar PHP
[X] 2 - Fazer trabalho da faculdade
[ ] 3 - Criar projeto

==============================

1. CRIAR TAREFA
2. ALTERNAR STATUS
3. ALTERAR NOME DA TAREFA
4. DELETAR TAREFA
0. SAIR
```

## Tecnologias

* **PHP 8+** — linguagem utilizada no desenvolvimento;
* **Composer** — gerenciamento de dependências e autoload das classes;
* **Git** — controle de versão;
* **GitHub** — hospedagem do repositório e colaboração.

## Arquitetura

O projeto utiliza uma organização em camadas, separando as responsabilidades de cada parte da aplicação:

```text
View
  ↓
Controller
  ↓
Service
  ↓
Model
```

### Model

Responsável por representar a entidade `Task` e seus dados.

Localização:

```text
src/Model/Task.php
```

### Service

Responsável pelas operações relacionadas ao gerenciamento das tarefas.

Localização:

```text
src/Service/TaskService.php
```

### Controller

Responsável por coordenar o fluxo da aplicação, recebendo as informações da View e utilizando o Service para executar as operações.

Localização:

```text
src/Controller/TaskController.php
```

### View

Responsável pela interação com o usuário através do terminal, apresentando as tarefas, menus, solicitando informações e exibindo mensagens de sucesso ou erro.

Localização:

```text
src/View/TaskView.php
```

## Estrutura do Projeto

```text
.
├── composer.json
├── docs
│   ├── arquitetura.md
│   ├── entidade.md
│   ├── service.md
│   └── views.md
├── src
│   ├── Controller
│   │   └── TaskController.php
│   ├── Model
│   │   └── Task.php
│   ├── Service
│   │   └── TaskService.php
│   └── View
│       └── TaskView.php
├── index.php
├── README.md
├── .gitignore
└── LICENSE
```

A pasta `docs/` contém a documentação das principais partes da aplicação:

* `arquitetura.md` — documentação da arquitetura do projeto;
* `entidade.md` — documentação da entidade `Task`;
* `service.md` — documentação do `TaskService`;
* `views.md` — documentação das Views.

## Requisitos

Para executar o projeto, é necessário possuir:

* PHP 8 ou superior;
* Composer;
* Git, caso o projeto seja obtido através do repositório.

## Instalação

Após clonar o projeto, acesse o diretório:

```bash
cd TaskManager
```

Instale as dependências e gere o autoload do Composer:

```bash
composer install
```

## Execução

Execute a aplicação através do arquivo principal:

```bash
php index.php
```

O sistema será iniciado diretamente no terminal e apresentará o menu principal.

## Controle de Versão

O projeto utiliza **Git** para controle de versão e **GitHub** para hospedagem do repositório.

A branch principal utilizada no projeto é `master`.

O desenvolvimento de novas funcionalidades é realizado através de branches específicas, evitando alterações diretamente na branch principal.

Os nomes das branches seguem um padrão baseado no tipo da alteração, por exemplo:

```text
feature/task-architecture
feat/TaskUpdateName
feat/ErrorHandling
```

Após a implementação, as alterações podem ser integradas à branch principal através de Pull Requests.

## Documentação

A documentação técnica do projeto está disponível na pasta `docs/`.

```text
docs/
├── arquitetura.md
├── entidade.md
├── service.md
└── views.md
```

Cada documento descreve uma parte específica da implementação e suas respectivas responsabilidades.
