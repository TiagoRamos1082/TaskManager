# Views

As Views são responsáveis pela interação com o usuário através do terminal. Suas responsabilidades são apresentar as informações do sistema, exibir as opções disponíveis, receber as entradas do usuário e apresentar mensagens de sucesso ou erro.

A View não executa as regras de negócio diretamente. Ela apenas coleta as informações necessárias e as encaminha ao Controller, que coordena a execução das operações.

## Menu Principal

O menu principal apresenta continuamente as tarefas cadastradas, indicando seu status, seguido pelas operações disponíveis.

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

O usuário seleciona uma das opções disponíveis. Caso seja informada uma opção inválida, a View retorna um valor que permite ao Controller tratar a entrada como inválida.

---

## View de Criar Tarefa

Ao selecionar a opção `1`, a View apresenta as tarefas cadastradas e solicita o nome da nova tarefa.

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

[ ] 1 - Estudar PHP
[X] 2 - Fazer trabalho da faculdade

==============================

CRIAR TAREFA

Digite o nome da tarefa: Estudar Git
```

A View retorna o título informado pelo usuário para que o Controller possa executar a operação de criação.

Após a criação, o sistema apresenta uma mensagem de sucesso:

```text
Tarefa criada com sucesso!

Pressione ENTER para continuar...
```

---

## View de Alterar Status

Ao selecionar a opção `2`, a View apresenta as tarefas cadastradas e solicita o índice da tarefa que terá seu status alterado.

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

[ ] 1 - Estudar PHP
[X] 2 - Fazer trabalho da faculdade
[ ] 3 - Criar projeto

==============================

ALTERNAR STATUS

Digite o índice da tarefa: 2
```

A View retorna o índice informado pelo usuário para que o Controller possa solicitar ao Model a alteração do status da tarefa.

Após a operação, o sistema apresenta uma mensagem correspondente ao resultado:

```text
Status da tarefa alterado com sucesso!

Pressione ENTER para continuar...
```

---

## View de Alterar Nome da Tarefa

Ao selecionar a opção `3`, a View apresenta as tarefas cadastradas e solicita o índice da tarefa que será alterada e seu novo nome.

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

[ ] 1 - Estudar PHP
[X] 2 - Fazer trabalho da faculdade
[ ] 3 - Criar projeto

==============================

ALTERAR NOME DA TAREFA

Digite o índice da tarefa: 2
Digite o novo nome da tarefa: Fazer trabalho de PHP
```

A View retorna o índice e o novo título da tarefa para que o Controller possa executar a operação.

---

## View de Deletar Tarefa

Ao selecionar a opção `4`, a View apresenta as tarefas cadastradas e solicita o índice da tarefa que será removida.

```text
==============================
    GERENCIADOR DE TAREFAS
==============================

[ ] 1 - Estudar PHP
[X] 2 - Fazer trabalho da faculdade
[ ] 3 - Criar projeto

==============================

DELETAR TAREFA

Digite o índice da tarefa: 2
```

A View retorna o índice informado pelo usuário para que o Controller possa executar a operação de exclusão.

Após a exclusão, o sistema apresenta uma mensagem de sucesso:

```text
Tarefa deletada com sucesso!

Pressione ENTER para continuar...
```

---

## Mensagens de Sucesso e Erro

A View possui métodos específicos para apresentar o resultado das operações ao usuário.

### Mensagem de sucesso

O método `success()` limpa o terminal, apresenta a mensagem recebida e aguarda o usuário pressionar ENTER antes de continuar.

### Mensagem de erro

O método `fail()` possui comportamento semelhante, mas é utilizado para apresentar mensagens relacionadas a falhas ou entradas inválidas.

---

## Limpeza do Terminal

O método `clear()` é responsável por limpar o terminal antes da apresentação de cada tela.

A implementação verifica o sistema operacional utilizado e executa o comando correspondente:

* `cls` para Windows;
* `clear` para sistemas Unix/Linux.

Dessa forma, a interface mantém uma apresentação organizada independentemente do sistema operacional.

---

## Responsabilidade da View

A View possui como responsabilidade exclusiva a interação com o usuário.

Suas principais responsabilidades são:

* apresentar as tarefas cadastradas;
* apresentar o menu de operações;
* receber entradas do usuário;
* retornar os dados informados ao Controller;
* apresentar mensagens de sucesso;
* apresentar mensagens de erro;
* controlar a apresentação visual do terminal.

A View não deve ser responsável pela execução das regras de negócio. O fluxo da aplicação é coordenado pelo Controller, enquanto as operações relacionadas aos dados e às tarefas são realizadas pelas demais camadas do sistema.
