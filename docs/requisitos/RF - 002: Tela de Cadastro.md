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
- **Permissões:**
  - ✅ **CREATE** — criar uma nova conta de usuário;
  - ❌ **READ** — não possui acesso aos dados de outros usuários durante o cadastro;
  - ❌ **UPDATE** — não pode alterar dados de contas de outros usuários;
  - ❌ **DELETE** — não pode excluir contas de outros usuários.

### 2. ADMINISTRADOR (Ator Secundário)

- **Papel:** Gerenciar e supervisionar os usuários cadastrados na plataforma.
- **Responsabilidade:** Administrar os registros de usuários, verificar informações quando necessário e realizar ações administrativas sobre as contas.
- **Permissões:**
  - ✅ **CREATE** — pode cadastrar usuários administrativamente, caso essa funcionalidade seja disponibilizada;
  - ✅ **READ** — visualizar dados dos usuários conforme suas permissões;
  - ✅ **UPDATE** — alterar dados ou informações administrativas das contas;
  - ✅ **DELETE** — excluir ou desativar contas conforme as regras do sistema.

### 3. SISTEMA (Ator Automático)

- **Papel:** Processar, validar e armazenar os dados fornecidos durante o cadastro.
- **Responsabilidade:** Validar os campos preenchidos, verificar as regras de negócio, verificar a existência de cadastro duplicado, armazenar os dados de forma segura e informar o resultado da operação ao usuário.
- **Permissões:**
  - ✅ **CREATE** — criar o registro do usuário no banco de dados;
  - ✅ **READ** — consultar informações necessárias para validar o cadastro;
  - ✅ **UPDATE** — atualizar informações durante o processamento, quando necessário;
  - ✅ **DELETE** — executar exclusões relacionadas ao processo quando previstas pelas regras do sistema.

---

## 📌 Resumo dos Atores

| Ator | Tipo | Principal responsabilidade | CREATE | READ | UPDATE | DELETE |
|---|---|---|:---:|:---:|:---:|:---:|
| **Usuário Não Cadastrado** | Principal | Criar sua própria conta | ✅ | ❌ | ❌ | ❌ |
| **Administrador** | Secundário | Gerenciar usuários da plataforma | ✅ | ✅ | ✅ | ✅ |
| **Sistema** | Automático | Validar e processar o cadastro | ✅ | ✅ | ✅ | ✅ |

---
