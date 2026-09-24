# Views

As Views são responsáveis pela interação com o usuário através do terminal, apresentando as opções disponíveis, recebendo as entradas e exibindo os resultados das operações.

## Menu Principal

As tarefas cadastradas são exibidas continuamente na tela. Abaixo da lista, o sistema apresenta as opções disponíveis:

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

[ ] 1. Estudar PHP
[X] 2. Fazer trabalho da faculdade
[ ] 3. Criar projeto

------------------------------

1. CRIAR TAREFA
2. ALTERNAR STATUS
3. ALTERAR NOME DA TAREFA
4. DELETAR TAREFA
0. SAIR
```

### Exemplo de criação de tarefa

Ao selecionar a opção `1`, o sistema solicita o título da tarefa:

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

Digite o nome da tarefa: Estudar Git

Tarefa criada com sucesso!
```

A nova tarefa passa a ser exibida na lista.

---

## View de Alterar Status

Ao selecionar a opção `2`, o sistema solicita o identificador da tarefa que terá seu status alterado:

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

ALTERAR STATUS

Digite o ID da tarefa: 2

Status da tarefa alterado com sucesso!

3. SAIR
```

Após a alteração, o sistema retorna à visualização principal.

---

## View de Deletar Tarefa

Ao selecionar a opção `3`, o sistema solicita o identificador da tarefa que será removida:

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

DELETAR

Digite o ID da tarefa: 2

Tarefa deletada com sucesso!

3. SAIR
```

Após a exclusão, o sistema retorna à visualização principal.

## Responsabilidade da View

A View é responsável somente pela interação com o usuário. Ela recebe entradas e apresenta informações, enquanto as regras de negócio e operações sobre as tarefas são executadas pelo Controller e pelo Model.
