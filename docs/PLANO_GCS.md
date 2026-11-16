# Plano de Gerenciamento de Configuração de Software (PGCS)

**Projeto:** TaskManager\
**Repositório:** https://github.com/TiagoRamos1082/TaskManager\
**Responsável pelo gerenciamento de configuração:** Tiago Ramos\
**Versão do documento:** 1.0\
**Data de elaboração:** 16/11/2026\
**Status:** Plano inicial --- configurações descritas como planejadas
devem ser implantadas e verificadas no GitHub.

------------------------------------------------------------------------

## Histórico de revisões

  ------------------------------------------------------------------------
  Data                            Versão Descrição        Autor
  ---------------- --------------------- ---------------- ----------------
  16/11/2026                         1.0 Elaboração do    Tiago Ramos
                                         plano de
                                         gerenciamento de
                                         configuração do
                                         TaskManager.

  ------------------------------------------------------------------------

## 1. Introdução

Este Plano de Gerenciamento de Configuração de Software (PGCS)
estabelece práticas para identificar, versionar, controlar, revisar e
acompanhar as alterações realizadas no TaskManager.

O plano utiliza Git e GitHub como ferramentas centrais de gerenciamento.
Seu objetivo é manter o histórico do projeto rastreável, reduzir o risco
de alterações indevidas na versão principal e definir um fluxo
consistente para desenvolvimento, revisão e integração de mudanças.

O documento é um item de configuração do próprio projeto: deve
permanecer versionado no repositório e suas alterações também devem
passar por revisão.

### 1.1 Finalidade

Definir procedimentos para:

-   controlar versões do código-fonte e da documentação;
-   organizar branches e commits;
-   exigir revisão por outro colaborador antes da integração de
    mudanças;
-   proteger a branch principal contra push direto;
-   organizar os ambientes `staging` e `production` no GitHub;
-   manter registros que permitam verificar o histórico e o estado da
    configuração.

### 1.2 Escopo

Este plano aplica-se ao repositório TaskManager, uma aplicação de
gerenciamento de tarefas desenvolvida em PHP.

O escopo inclui código-fonte, testes existentes ou futuros, configuração
do Composer, documentação, regras do repositório e arquivos de automação
que venham a ser adicionados.

O projeto atualmente utiliza organização em camadas, com diretórios como
`src/` e `tests/`, e autoload PSR-4 configurado no `composer.json`. A
estrutura poderá evoluir, desde que as mudanças sejam documentadas e
versionadas.

### 1.3 Definições e abreviações

  -----------------------------------------------------------------------
  Termo                               Significado
  ----------------------------------- -----------------------------------
  GCS                                 Gestão de Configuração de Software.

  PGCS                                Plano de Gerenciamento de
                                      Configuração de Software.

  Git                                 Sistema distribuído de controle de
                                      versão.

  GitHub                              Plataforma de hospedagem e
                                      colaboração de repositórios Git.

  Branch                              Linha independente de
                                      desenvolvimento.

  Pull Request (PR)                   Solicitação de integração de
                                      alterações entre branches.

  CI                                  Integração Contínua: verificações
                                      automatizadas executadas sobre
                                      alterações.

  CD                                  Entrega ou implantação contínua.

  Baseline                            Estado identificado e considerado
                                      estável de um conjunto de itens de
                                      configuração.

  Environment                         Ambiente do GitHub que pode aplicar
                                      regras de proteção e controlar
                                      acesso a etapas de automação.

  Hotfix                              Correção urgente de um problema
                                      existente.
  -----------------------------------------------------------------------

## 2. Papéis e responsabilidades

Por se tratar de um projeto individual para fins acadêmicos, as
responsabilidades de gerenciamento são centralizadas no responsável pelo
repositório. A revisão de código, entretanto, deve ser realizada por
outro colaborador com acesso de escrita, conforme exigido pela
atividade.

  -----------------------------------------------------------------------
  Papel                   Responsável             Responsabilidades
  ----------------------- ----------------------- -----------------------
  Responsável pelo        Tiago Ramos             Manter este plano,
  projeto e pela GCS                              administrar o
                                                  repositório, organizar
                                                  branches, acompanhar
                                                  alterações e configurar
                                                  as regras de proteção.

  Desenvolvedor           Tiago Ramos             Implementar correções e
                                                  funcionalidades,
                                                  atualizar testes e
                                                  documentação e abrir
                                                  Pull Requests.

  Revisor por pares       Marcelo                  Analisar o Pull
                                                  Request, registrar
                                                  comentários e aprovar
                                                  ou solicitar alterações
                                                  antes do merge.

  Revisor obrigatório de  Tiago Ramos             Revisar e autorizar a
  produção                                        etapa protegida do
                                                  ambiente `production`,
                                                  conforme as regras
                                                  configuradas no GitHub.
  -----------------------------------------------------------------------

O par de revisão definido para o projeto é Marcelo, que deverá
receber permissão de escrita no repositório GitHub.

O revisor por pares não deve ser o autor do Pull Request. A revisão deve
ocorrer antes da integração na branch principal.

## 3. Ferramentas e ambientes

### 3.1 Ferramentas

  -----------------------------------------------------------------------
  Ferramenta                          Finalidade
  ----------------------------------- -----------------------------------
  Git                                 Controle de versão local e registro
                                      de alterações.

  GitHub                              Hospedagem do repositório,
                                      branches, Pull Requests, permissões
                                      e proteção.

  PHP                                 Linguagem utilizada no projeto.

  Composer                            Gerenciamento de dependências e
                                      autoload PSR-4.

  GitHub Environments                 Definição de regras de aprovação e
                                      proteção para `staging` e
                                      `production`.

  GitHub Actions                      Automação de verificações, caso
                                      workflows sejam adicionados ao
                                      projeto.
  -----------------------------------------------------------------------

Não se considera implantado um pipeline de CI/CD apenas pela existência
do repositório ou dos environments. Os workflows deverão ser criados e
validados separadamente quando fizerem parte do escopo de automação do
projeto.

### 3.2 Ambientes

Serão utilizados dois GitHub Environments:

  -----------------------------------------------------------------------
  Ambiente                Finalidade              Regra prevista
  ----------------------- ----------------------- -----------------------
  `staging`               Representar a etapa de  Utilizado para
                          validação das           verificações e
                          alterações antes da     validações prévias, sem
                          liberação.              aprovação obrigatória
                                                  adicional definida
                                                  neste plano.

  `production`            Representar a etapa     Exigir aprovação do
                          protegida de liberação  responsável pelo
                          de uma versão           projeto, Tiago Ramos,
                          considerada estável.    como revisor
                                                  obrigatório.
  -----------------------------------------------------------------------

Os GitHub Environments fornecem controles para etapas de workflows. Sua
criação, isoladamente, não significa que a aplicação PHP esteja
hospedada ou implantada nesses ambientes. Qualquer implantação real
deverá ser documentada quando houver infraestrutura definida.

## 4. Identificação e controle dos itens de configuração

### 4.1 Itens de configuração

Os seguintes elementos devem ser tratados como itens de configuração:

-   código-fonte PHP em `src/`;
-   testes automatizados em `tests/`, conforme existentes e evoluídos;
-   `composer.json`, que define metadados e autoload do projeto;
-   `composer.lock`, quando mantido pelo projeto, para registrar versões
    resolvidas das dependências;
-   documentação, incluindo `README.md` e este plano;
-   arquivos de configuração do Git e do GitHub;
-   workflows em `.github/workflows/`, caso sejam adicionados;
-   regras de proteção de branches e configurações dos environments,
    registradas neste plano e comprovadas por evidências do GitHub.

Credenciais, tokens e segredos não devem ser versionados. Quando
necessários em automações, devem ser armazenados nos mecanismos de
Secrets do GitHub.

### 4.2 Convenção de nomenclatura

**Branches**

  Tipo               Padrão                        Exemplo
  ------------------ ----------------------------- ------------------------
  Funcionalidade     `feature/<descricao-curta>`   `feature/plano-gcs`
  Correção           `fix/<descricao-curta>`       `fix/validacao-tarefa`
  Correção urgente   `hotfix/<descricao-curta>`    `hotfix/menu-view`
  Documentação       `docs/<descricao-curta>`      `docs/plano-gcs`

Os nomes devem ser curtos, descritivos e utilizar letras minúsculas,
separando palavras por hífen quando necessário.

**Commits**

Adotar, preferencialmente, Conventional Commits:

-   `feat:` para funcionalidade;
-   `fix:` para correção;
-   `docs:` para documentação;
-   `refactor:` para refatoração;
-   `test:` para testes;
-   `chore:` para manutenção e configuração.

Exemplos:

-   `docs: adiciona plano de gerenciamento de configuracao`
-   `fix(view): corrige exibicao do menu`
-   `test: adiciona testes para gerenciamento de tarefas`

### 4.3 Estratégia de branches

O repositório utiliza atualmente a branch `master` como branch
principal. A saída local do Git também identifica `master` como branch
acompanhada por `origin/master`. Portanto, neste plano, `master` é
considerada a branch principal vigente. Uma eventual migração para
`main` deverá ser planejada e documentada antes de alterar as regras.

O fluxo adotado será:

1.  A branch principal (`master`) deve permanecer estável.
2.  Cada alteração deve ser desenvolvida em uma branch específica.
3.  O desenvolvedor deve enviar a branch ao GitHub e abrir um Pull
    Request para `master`.
4.  Outro colaborador com permissão de escrita deve revisar o Pull
    Request.
5.  O merge somente deve ocorrer após a aprovação exigida e a conclusão
    das verificações aplicáveis.
6.  Correções urgentes também devem ser registradas em branch própria e
    submetidas à revisão, evitando push direto na branch principal.

## 5. Política de Pull Request e revisão

Toda alteração destinada à branch principal deve passar por Pull
Request.

O Pull Request deve apresentar:

-   objetivo e contexto da alteração;
-   arquivos ou componentes afetados;
-   resumo das decisões tomadas;
-   instruções para validar a mudança;
-   referência a uma Issue, quando houver.

### 5.1 Revisão por pares

- O par de revisão definido para o projeto é Marcelo.
- Marcelo deverá possuir permissão de escrita no repositório GitHub.
- Toda alteração destinada à branch principal deverá passar por Pull Request.
- Exigir pelo menos uma aprovação de outro colaborador antes do merge.
- Marcelo deverá analisar as alterações, registrar comentários e aprovar ou solicitar mudanças.
- O autor do Pull Request não poderá aprovar a própria alteração como substituto da revisão por pares.
- Solicitações de alteração deverão ser resolvidas antes do merge.
- O histórico do Pull Request deverá ser preservado como evidência da revisão.

### 5.2 Proteção da branch principal

A branch `master` deve possuir regras de proteção que impeçam alterações
diretas e exijam Pull Request.

Configuração prevista:

-   exigir Pull Request antes do merge;
-   exigir pelo menos uma aprovação;
-   exigir aprovação de um colaborador diferente do autor;
-   bloquear force push;
-   impedir exclusão da branch principal;
-   exigir resolução das conversas de revisão antes do merge, quando
    disponível.

A configuração efetiva deve ser conferida nas regras de branches do
GitHub. A evidência de recusa de push direto deve ser obtida por
tentativa controlada, sem utilizar `--force` e sem colocar a branch
principal em risco.

## 6. Integração Contínua e critérios de qualidade

As alterações devem ser verificadas antes da integração. Para o projeto
PHP, as verificações devem considerar os recursos realmente existentes
no repositório.

Quando houver testes automatizados configurados, eles deverão ser
executados antes do merge. Verificações de sintaxe PHP podem ser
realizadas com:

``` bash
find src tests -name '*.php' -print0 | xargs -0 -n1 php -l
```

O comando deverá ser adaptado caso algum dos diretórios não exista.

A instalação de dependências deve respeitar os arquivos do Composer:

``` bash
composer validate
composer install
```

Critérios mínimos:

-   ausência de erros de sintaxe nos arquivos PHP verificados;
-   testes automatizados existentes executados com sucesso;
-   configuração do Composer válida;
-   revisão do Pull Request aprovada;
-   ausência de segredos incluídos no commit.

A automação dessas verificações por GitHub Actions poderá ser adicionada
em workflow próprio. Até que o workflow exista e seja executado com
sucesso, as verificações não devem ser declaradas como pipeline
automatizado.

## 7. Entrega, liberação e controle dos ambientes

O fluxo de promoção previsto é:

1.  desenvolver a alteração em branch própria;
2.  abrir Pull Request para `master`;
3.  obter aprovação do revisor por pares;
4.  executar as verificações aplicáveis;
5.  integrar a alteração;
6.  realizar validação no contexto de `staging`, quando houver workflow
    associado;
7.  solicitar a aprovação obrigatória de Tiago Ramos no ambiente
    `production`;
8.  liberar a versão somente após a aprovação.

O ambiente `production` deve ter Tiago Ramos cadastrado como revisor
obrigatório nas regras de proteção do environment.

Como o TaskManager é uma aplicação PHP executada em ambiente de
desenvolvimento local e não há, neste plano, um provedor de hospedagem
definido, a promoção entre environments representa o controle de
aprovação de uma etapa de liberação. Não se afirma que existe deploy
automático ou hospedagem de produção.

## 8. Controle de mudanças

Toda mudança relevante deve ser rastreável por meio de branch, commit e
Pull Request.

Fluxo padrão:

`Alteração → Branch → Commit → Push da branch → Pull Request → Revisão → Verificações → Merge`

Mudanças na documentação e nos arquivos de configuração também seguem
esse fluxo.

Alterações emergenciais devem ser identificadas como hotfix, registradas
em branch própria e revisadas antes da integração sempre que possível. A
urgência não elimina a necessidade de registrar a mudança e sua
justificativa.

## 9. Baselines e releases

Uma baseline corresponde a um estado do projeto identificado por um
commit considerado estável.

Quando houver uma versão formal para entrega, recomenda-se criar uma tag
seguindo Versionamento Semântico:

-   `MAJOR`: alteração incompatível;
-   `MINOR`: funcionalidade compatível adicionada;
-   `PATCH`: correção compatível.

Exemplo: `v1.0.1`.

A tag deve apontar para o commit integrado e validado na branch
principal. As notas de versão devem resumir as mudanças relevantes desde
a versão anterior.

## 10. Auditoria e evidências

A rastreabilidade será verificada por meio de:

-   histórico de commits;
-   histórico de branches;
-   Pull Requests e suas aprovações;
-   regras de proteção da branch principal;
-   permissões do colaborador revisor;
-   configurações dos environments `staging` e `production`;
-   histórico de execução dos workflows, quando existentes;
-   tags e releases, quando publicadas.

Para a avaliação acadêmica, devem ser preservadas evidências visuais das
configurações efetivamente realizadas:

1.  branch principal protegida;
2.  tentativa de push direto recusada;
3.  colaborador com acesso de escrita;
4.  environment `staging` criado;
5.  environment `production` criado com Tiago Ramos como revisor
    obrigatório.

As evidências devem demonstrar o estado real do GitHub. Este documento
descreve o processo esperado, mas não substitui a comprovação das
configurações na plataforma.

## 11. Dependências de terceiros e segurança

O Composer é utilizado para gerenciar a configuração de dependências
PHP.

Quando existirem dependências externas:

-   manter o `composer.json` atualizado;
-   versionar o `composer.lock` para registrar as versões resolvidas da
    aplicação;
-   revisar atualizações antes de integrá-las;
-   evitar dependências sem necessidade para o escopo do projeto;
-   nunca incluir tokens, senhas ou credenciais no repositório.

Atualizações de dependências devem seguir o mesmo fluxo de branch, Pull
Request e revisão aplicado ao código-fonte.

## 12. Manutenção do plano

Este plano deve ser atualizado quando houver mudanças relevantes na
estrutura do projeto, estratégia de branches, ferramentas, ambientes,
fluxo de revisão ou processo de liberação.

Cada revisão do documento deve ser registrada no Histórico de Revisões e
integrada ao repositório por Pull Request.

------------------------------------------------------------------------

## 13. Checklist de implantação do plano

Os itens abaixo devem ser marcados somente depois de configurados e
verificados no GitHub.

-   [ ] Publicar este documento no repositório, preferencialmente em
    `docs/PLANO_GCS.md`.
-   [ ] Confirmar a branch principal e aplicar sua regra de proteção
    (`master`, conforme estado identificado).
-   [ ] Exigir Pull Request e pelo menos uma aprovação de outro
    colaborador.
-   [ ] Convidar Marcelo para o repositório com permissão de escrita.
-   [ ] Configurar a exigência de aprovação de outro colaborador nos Pull Requests.
-   [ ] Realizar um Pull Request de teste e registrar a revisão de Marcelo.
-   [ ] Criar o GitHub Environment `staging`.
-   [ ] Criar o GitHub Environment `production`.
-   [ ] Configurar Tiago Ramos como revisor obrigatório de `production`.
-   [ ] Testar e registrar a recusa de push direto na branch principal.
-   [ ] Registrar evidências de cada requisito da atividade.

**Observação:** a publicação deste arquivo conclui a documentação
inicial do plano. Os itens do checklist representam configurações e
verificações operacionais que ainda precisam ser executadas e
comprovadas.
