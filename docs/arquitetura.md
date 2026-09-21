# Arquitetura

O projeto utiliza o padrão arquitetural **MVC (Model-View-Controller)**, mantendo uma separação simples entre os dados, a apresentação e o controle da aplicação.

## Model

A camada **Model** contém as entidades e as regras relacionadas aos dados da aplicação.

Neste projeto, a principal entidade é:

* `Task`: representa uma tarefa cadastrada pelo usuário.

## View

A camada **View** é responsável pela interação com o usuário através do terminal.

Ela apresenta menus, mensagens e informações das tarefas, além de receber os dados informados pelo usuário.

## Controller

A camada **Controller** é responsável por intermediar a comunicação entre a View e o Model.

Ela recebe as ações realizadas pelo usuário através da View, executa as operações necessárias no Model e retorna os resultados para serem apresentados novamente pela View.

## Fluxo

```text
Usuário
   ↓
 View
   ↓
Controller
   ↓
 Model
   ↓
Controller
   ↓
 View
   ↓
Usuário
```

A arquitetura foi mantida propositalmente simples, considerando o escopo reduzido da aplicação.
