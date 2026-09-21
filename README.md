# Projeto de Gerenciamento de Tarefas Simples

## Objetivo

O projeto tem como objetivo desenvolver uma aplicação simples para gerenciamento de tarefas através do terminal.

A aplicação permite ao usuário cadastrar, visualizar e concluir tarefas, utilizando uma estrutura simples em PHP e mantendo o foco na aplicação dos conceitos de organização, versionamento e configuração de software.

## Funcionalidades

* Cadastrar uma nova tarefa;
* Listar as tarefas cadastradas;
* Concluir uma tarefa;
* Identificar o status de cada tarefa.

## Tecnologias

* PHP 8+
* Composer
* Git
* GitHub

## Estrutura

```text
├── src/
│   ├── Task.php
│   └── TaskManager.php
├── tests/
├── docs/
├── index.php
├── composer.json
├── README.md
├── .gitignore
└── LICENSE
```

## Execução

Para executar o projeto, é necessário possuir PHP e Composer instalados.

```bash
composer install
php index.php
```

## Controle de versão

O projeto utiliza Git e GitHub para controle de versão.

A branch `main` é protegida e alterações devem ser realizadas através de Pull Requests.

Branches de funcionalidades devem seguir o padrão:

```text
feature/nome-da-funcionalidade
```
