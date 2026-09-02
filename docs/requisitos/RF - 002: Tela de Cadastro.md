# 1. METADADOS DO PROJETO E DA EQUIPE

## 1.1 Composição da Equipe

| ID | Nome Completo   | Papel Primário          | Papel Secundário | E-mail / Contato |
| :-: | :--------------- | :---------------------- | :--------------- | :--------------- |
| 1 | André Mendes     | Product Owner            | Fullstack        | [andre53774636@edu.df.senac.br](mailto:andre53774636@edu.df.senac.br) |
| 2 | Eduardo Amorim   | Desenvolvedor Front-End | —                | [eduardo59381426@edu.df.senac.br](mailto:eduardo59381426@edu.df.senac.br) |
| 3 | Gabriel Souza    | Desenvolvedor Back-End  | —                | [gabriel49414966@edu.df.senac.br](mailto:gabriel49414966@edu.df.senac.br) |
| 4 | Vitor Silva      | Desenvolvedor Back-End  | —                | [vitor59422706@edu.df.senac.br](mailto:vitor59422706@edu.df.senac.br) |
| 5 | Henrique Alves   | DBA / Banco de Dados    | —                | [henrique51782196@edu.df.senac.br](mailto:henrique51782196@edu.df.senac.br) |
| 6 | Angel Pacheco    | QA / SecDevOps          | Fullstack (opcional) | [angel59381406@edu.df.senac.br](mailto:angel59381406@edu.df.senac.br) |                                                                             
## 1.2 Identificação

* **NOME_DO_PROJETO:** Librando

* **DESCRICAO_BREVE:**
  Sistema web desenvolvido para a plataforma Librando, uma rede social voltada à comunidade surda. Nesta etapa do projeto, foi desenvolvida a tela de login com autenticação de usuários utilizando HTML, CSS, PHP e MySQL.

# 🎯 1. IDENTIFICAÇÃO DO REQUISITO

- **ID:** RF-002
- **Título:** Tela de Cadastro de Usuários
- **Tipo:** Requisito Funcional
- **Prioridade:** ALTA
- **Complexidade:** MÉDIA
- **Status:** CONCLUÍDO
- **Data de Criação:** 02/09/2026
- **Última Atualização:** 02/09/2026
- **Breve Descrição:**
  O sistema deve permitir que novos usuários realizem seu cadastro na plataforma por meio de uma tela específica, informando os dados necessários para criação de uma conta. As informações devem ser validadas pelo sistema e armazenadas de forma segura no banco de dados MySQL, permitindo posteriormente que o usuário utilize suas credenciais para realizar login na plataforma.

# 📋 2. DESCRIÇÃO E ATORES (10%)

**Objetivo:** Descrever o requisito funcional de cadastro de usuários com clareza, apresentando sua finalidade para o negócio e identificando os atores envolvidos, seus papéis, responsabilidades e permissões.

---

## Descrição Detalhada

### Por que este requisito existe?

O sistema precisa permitir o cadastro de novos usuários para:

- 👤 Permitir que novos usuários tenham acesso à rede social;
- 🔐 Criar contas com dados pessoais e credenciais de acesso de forma segura;
- 🌐 Ampliar a quantidade de usuários da plataforma e possibilitar a interação entre eles;
- ♿ Oferecer um processo de cadastro acessível e adequado ao público da plataforma;
- 📊 Manter os dados dos usuários organizados e armazenados no sistema para utilização em outras funcionalidades.

### Contexto do Negócio

A rede social Librando precisa disponibilizar uma forma para que novos usuários criem suas próprias contas na plataforma.

Para isso, o usuário deverá acessar a tela de cadastro e fornecer os dados solicitados pelo sistema. As informações preenchidas serão validadas conforme as regras de negócio e, estando corretas, serão armazenadas de forma segura no banco de dados.

Após a conclusão do cadastro, o usuário poderá utilizar suas credenciais para acessar a plataforma por meio da tela de login.

O processo deve apresentar mensagens claras de sucesso ou erro, além de considerar os requisitos de acessibilidade da plataforma, facilitando a utilização por pessoas surdas.

---

## Atores do Sistema

### 1. USUÁRIO NÃO CADASTRADO (Ator Principal)

- **Papel:** Realizar o cadastro de uma nova conta na rede social.
- **Responsabilidade:** Fornecer corretamente os dados solicitados pelo sistema e concluir o processo de criação da conta.

**Permissões:**

| Operação | Permissão | Descrição |
| :------: | :-------: | :-------- |
| CREATE | ✅ | Criar sua própria conta de usuário |
| READ | ❌ | Não possui acesso aos dados de outros usuários durante o cadastro |
| UPDATE | ❌ | Não pode alterar dados de outras contas |
| DELETE | ❌ | Não pode excluir contas de outros usuários |

---

### 2. ADMINISTRADOR (Ator Secundário)

- **Papel:** Gerenciar e supervisionar os usuários cadastrados na plataforma.
- **Responsabilidade:** Administrar os registros de usuários, verificar informações e realizar ações administrativas sobre as contas.

**Permissões:**

| Operação | Permissão | Descrição |
| :------: | :-------: | :-------- |
| CREATE | ✅ | Pode cadastrar usuários administrativamente, caso essa funcionalidade seja disponibilizada |
| READ | ✅ | Visualizar dados dos usuários conforme suas permissões |
| UPDATE | ✅ | Alterar dados ou informações administrativas das contas |
| DELETE | ✅ | Excluir ou desativar contas conforme as regras do sistema |

---

### 3. SISTEMA (Ator Automático)

- **Papel:** Processar, validar e armazenar os dados fornecidos durante o cadastro.
- **Responsabilidade:** Validar os campos preenchidos, verificar as regras de negócio, verificar a existência de cadastro duplicado, armazenar os dados de forma segura e informar o resultado da operação ao usuário.

**Permissões:**

| Operação | Permissão | Descrição |
| :------: | :-------: | :-------- |
| CREATE | ✅ | Criar o registro do usuário no banco de dados |
| READ | ✅ | Consultar informações necessárias para validar o cadastro |
| UPDATE | ✅ | Atualizar informações durante o processamento, quando necessário |
| DELETE | ✅ | Executar exclusões relacionadas ao processo quando previstas pelas regras do sistema |

# 🔄 3. ESPECIFICAÇÃO DE CASOS DE USO + REQUISITOS NÃO-FUNCIONAIS (20%)

**Objetivo:** Descrever detalhadamente como o requisito funcional de cadastro de usuários é executado, apresentando suas condições, fluxos, regras de negócio e requisitos não-funcionais.

---

## Caso de Uso (UC-002): Realizar Cadastro de Usuário

**Requisito relacionado:** RF-002 — Tela de Cadastro de Usuários

**Atores:**
- **Usuário Não Cadastrado:** realiza o preenchimento e envio do formulário de cadastro.
- **Administrador:** responsável pela administração das contas cadastradas, conforme suas permissões.
- **Sistema:** realiza validações, verifica regras de negócio e armazena os dados.

---

## Pré-Condições

- ✅ O usuário deve estar na tela de cadastro da plataforma.
- ✅ O sistema deve estar disponível para receber a solicitação.
- ✅ O banco de dados deve estar disponível para consulta e armazenamento.
- ✅ O usuário ainda não deve possuir uma conta cadastrada com o mesmo e-mail.
- ✅ Os serviços necessários para processamento do cadastro devem estar disponíveis.

---

## Pós-Condições — Sucesso

- ✅ Uma nova conta de usuário é criada.
- ✅ Os dados informados são validados antes do armazenamento.
- ✅ As credenciais do usuário são armazenadas de forma segura.
- ✅ O cadastro é registrado no banco de dados.
- ✅ O sistema apresenta uma confirmação visual de cadastro realizado com sucesso.
- ✅ O usuário é direcionado para a tela de login para acessar a plataforma.

---

## Pós-Condições — Falha

- ❌ A conta não é criada.
- ❌ Os dados inválidos não são armazenados.
- ✅ O sistema apresenta uma mensagem visual informando o problema.
- ✅ O campo que apresentar erro é destacado para correção.
- ✅ O usuário permanece na tela de cadastro para corrigir as informações.
- ✅ Em caso de falha no servidor ou banco de dados, o sistema informa que o cadastro não pôde ser concluído.

---

## Fluxo Principal

1. Usuário Não Cadastrado acessa a opção **"Criar uma conta"** na tela de login.
2. Sistema direciona o usuário para a **Tela de Cadastro**.
3. Sistema apresenta o formulário contendo os campos necessários para criação da conta.
4. Usuário preenche os campos solicitados.
5. Sistema realiza a validação dos campos durante o preenchimento ou após a tentativa de envio.
6. Sistema verifica se todos os campos obrigatórios foram preenchidos.
7. Sistema valida o formato das informações fornecidas.
8. Usuário clica no botão **"Cadastrar"**.
9. Sistema realiza uma nova validação dos dados no servidor.
10. Sistema verifica se o e-mail informado já possui uma conta cadastrada.
11. Sistema verifica se as informações atendem às regras de negócio.
12. Sistema processa os dados fornecidos pelo usuário.
13. Sistema armazena a senha utilizando mecanismo seguro de hash, sem mantê-la em texto puro.
14. Sistema registra os dados da nova conta no banco de dados.
15. Sistema confirma que o cadastro foi realizado com sucesso.
16. Sistema apresenta a mensagem visual **"Cadastro realizado com sucesso!"**.
17. Sistema direciona o usuário para a tela de login.
18. Usuário pode informar suas credenciais para acessar a plataforma.

---

## Fluxo Alternativo A1: Campos obrigatórios não preenchidos

```text
5a.1. Sistema identifica que um ou mais campos obrigatórios estão vazios.
5a.2. Sistema impede o envio do cadastro.
5a.3. Sistema apresenta mensagem visual informando que os campos são obrigatórios.
5a.4. Os campos não preenchidos são destacados visualmente.
5a.5. Usuário preenche os campos pendentes.
5a.6. Sistema realiza novamente a validação.
5a.7. O fluxo retorna ao passo 8 do fluxo principal.
