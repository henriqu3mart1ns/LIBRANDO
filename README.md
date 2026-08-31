# 1. METADADOS DO PROJETO E DA EQUIPE

## 1.1 Composição da Equipe

|  ID | Nome Completo                 | Papel Primário          | Papel Secundário | E-mail / Contato                                                                                                                                    |
| :-: | :---------------------------- | :---------------------- | :--------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------- |
|  1  | [André Mendes]                | Scrum Master            | Fullstack        | [[andre53774636@edu.df.senac.br](mailto:andre53774636@edu.df.senac.br)]                                                                             |
|  2  | [Eduardo Amorim]                     | Desenvolvedor Front-End | —                | [[eduardo59381426@edu.df.senac.br](mailto:eduardo59381426@edu.df.senac.br)]                                                                         |
|  3  | [Gabriel Souza / Vitor Silva] | Desenvolvedor Back-End  | —                | [[gabriel49414966@edu.df.senac.br](mailto:gabriel49414966@edu.df.senac.br) / [vitor59422706@edu.df.senac.br](mailto:vitor59422706@edu.df.senac.br)] |
|  4  | [Henrique Alves]              | DBA / Banco de Dados    | —                | [[henrique51782196@edu.df.senac.br](mailto:henrique51782196@edu.df.senac.br)]                                                                       |
|  5  | [Angel Pacheco]               | QA / SecDevOps          | —                | [[angel59381406@edu.df.senac.br](mailto:angel59381406@edu.df.senac.br)]                                                                             |
|  6  | [Angel Pacheco]               | Fullstack (opcional)    | —                | [[angel59381406@edu.df.senac.br](mailto:angel59381406@edu.df.senac.br)]                                                                             |

## 1.2 Identificação

* **NOME_DO_PROJETO:** Librando

* **DESCRICAO_BREVE:**
  Sistema web desenvolvido para a plataforma Librando, uma rede social voltada à comunidade surda. Nesta etapa do projeto, foi desenvolvida a tela de login com autenticação de usuários utilizando HTML, CSS, PHP e MySQL.

## 1.3 Localização dos Artefatos

* **LINK_REPOSITORIO_GITHUB:** `https://github.com/[seu-usuario]/[seu-repositorio]`
* **BRANCH_PRINCIPAL:** `main`
* **LINK_APLICACAO_DEPLOY:** Aplicação executada localmente por meio do XAMPP.
* **LINK_BANCO_DADOS:** Banco de dados MySQL local.
* **LINK_API_SWAGGER:** Não se aplica nesta etapa do projeto.
* **LINK_DEMONSTRAÇÃO:** Aplicação executada localmente em `(https://librando.onrender.com)`

---

# 2. ESTRUTURA DE DIRETÓRIOS DO PROJETO

```text
librando/
│
├── docs/
│   └── requisitos/
│       └── RF-001-login.md
│
├── src/
│   └── rf-001-login/
│       ├── index.html
│       ├── login.php
│       ├── conexao.php
│       └── README.md
│
├── database/
│   ├── ddl/
│   │   └── rf-001-usuarios-ddl.sql
│   │
│   └── seeds/
│       └── usuarios-seeds.sql
│
├── .github/
│   └── workflows/
│
├── README.md
│
└── .gitignore
```

## Localização dos Arquivos

* **Documentação:** `docs/requisitos/RF-001-login.md`
* **Página de login:** `src/rf-001-login/index.html`
* **Estilos CSS:** `src/rf-001-login/index.html`
* **Processamento do login:** `src/rf-001-login/login.php`
* **Conexão com o banco:** `src/rf-001-login/conexao.php`
* **Script de criação do banco:** `database/ddl/rf-001-usuarios-ddl.sql`
* **Dados de teste:** `database/seeds/usuarios-seeds.sql`
* **Guia geral:** `README.md`

---

# 3. DETALHAMENTO TÉCNICO DE UM REQUISITO FUNCIONAL

## 🎯 1. IDENTIFICAÇÃO DO REQUISITO

* **ID:** RF-001

* **Título:** Tela de Login da Rede Social

* **Tipo:** Requisito Funcional

* **Prioridade:** ALTA

* **Complexidade:** MÉDIA

* **Status:** EM DESENVOLVIMENTO

* **Data de Criação:** [preencher]

* **Última Atualização:** [preencher]

* **Breve Descrição:**
  O sistema deve permitir que usuários previamente cadastrados realizem login na plataforma Librando por meio de e-mail e senha. As credenciais devem ser verificadas pelo backend PHP utilizando o banco de dados MySQL.

---

# 📋 2.  DESCRIÇÃO E ATORES — RF: Tela de Login da Rede Social

## **Descrição Detalhada**

### **Por que este requisito existe?**

A rede social precisa disponibilizar um mecanismo de autenticação que permita aos usuários cadastrados acessar a plataforma de forma **segura, simples e acessível**.

A tela de login existe para:

- 🔐 **Garantir a segurança do acesso**, permitindo que somente usuários autorizados entrem na plataforma;
- 👤 **Identificar e autenticar os usuários cadastrados**, verificando e-mail, senha, situação da conta e permissão de acesso;
- ♿ **Garantir acessibilidade**, disponibilizando recursos visuais e suporte à comunicação em Libras;
- 🔑 **Permitir recuperação de senha**, possibilitando que usuários que esqueceram suas credenciais recuperem o acesso à conta;
- 📝 **Permitir a criação de novas contas**, possibilitando que novos usuários ingressem na rede social;
- 🛡️ **Proteger as contas dos usuários**, utilizando sessão segura, proteção contra tentativas excessivas e armazenamento seguro das senhas.

## **Contexto do Negócio**

A aplicação é uma **rede social acessível voltada para pessoas surdas**, na qual os usuários precisam realizar autenticação para acessar a plataforma.

A tela de login deve permitir que um usuário cadastrado informe seu **e-mail e senha**. O sistema valida os campos, verifica as credenciais, verifica se a conta está ativa e se o usuário possui permissão de acesso.

Quando a autenticação é válida, o sistema cria uma sessão segura e direciona o usuário para a página principal da rede social. Caso as credenciais sejam inválidas, a conta esteja desativada ou ocorram outras situações previstas, o acesso deve ser impedido e o usuário deve receber um feedback visual.

## 👥 Atores do Sistema

### 1. 👤 USUÁRIO CADASTRADO — Ator Principal

**Papel:**  
Realizar a autenticação para acessar a rede social.

**Responsabilidade:**

O usuário cadastrado é responsável por informar suas próprias credenciais de acesso e utilizar os recursos disponibilizados pela tela de login.

Pode:

- Informar o e-mail cadastrado;
- Informar a senha;
- Solicitar o login;
- Visualizar ou ocultar a senha;
- Solicitar recuperação de senha;
- Encerrar sua sessão por meio do logout.

**Permissões:**

| Operação | Permissão | Justificativa |
|---|:---:|---|
| **CREATE** | ⚠️ | Não especificado para o usuário cadastrado na tela de login. |
| **READ** | ✅ | Pode utilizar as informações e recursos necessários para sua autenticação. |
| **UPDATE** | ⚠️ | Pode redefinir a senha durante o processo de recuperação. |
| **DELETE** | ❌ | Não existe requisito para exclusão de conta na tela de login. |

---

### 2. 👤 USUÁRIO NÃO CADASTRADO — Ator Secundário

**Papel:**  
Iniciar o processo de criação de uma conta para obter acesso à rede social.

**Responsabilidade:**

O usuário não cadastrado ainda não possui uma conta na plataforma. Portanto, **não pode realizar login nem recuperar uma senha de uma conta inexistente**.

A partir da tela de login, pode selecionar a opção **"Criar uma conta"** e ser direcionado para o formulário de cadastro.

**Permissões:**

| Operação | Permissão | Justificativa |
|---|:---:|---|
| **CREATE** | ✅ | Pode iniciar o processo de criação de uma nova conta. |
| **READ** | ⚠️ | Pode acessar informações e orientações disponíveis na tela de login. |
| **UPDATE** | ❌ | Ainda não possui uma conta para alterar. |
| **DELETE** | ❌ | Não possui uma conta cadastrada para excluir. |


### 3. ⚙️ SISTEMA — Ator Automático

**Papel:**  
Executar automaticamente as operações necessárias para realizar a autenticação, garantir a segurança do acesso e controlar a sessão dos usuários da rede social.

**Responsabilidade:**

O sistema é responsável por processar as informações fornecidas pelo usuário durante o login e aplicar as regras definidas para permitir ou impedir o acesso à rede social.

Durante o processo de autenticação, o sistema deve:

- Validar os campos de e-mail e senha;
- Verificar se os campos obrigatórios foram preenchidos;
- Validar o formato do e-mail;
- Verificar se o e-mail informado está cadastrado;
- Verificar se a senha corresponde à conta;
- Verificar se a conta está ativa;
- Verificar se o usuário possui permissão de acesso;
- Impedir o acesso com credenciais inválidas;
- Impedir o acesso quando a conta estiver desativada;
- Controlar tentativas excessivas de login;
- Apresentar mensagens de feedback ao usuário em caso de erro;
- Criar uma sessão segura após uma autenticação válida;
- Redirecionar o usuário autenticado para a página principal da rede social;
- Permitir o encerramento da sessão por meio do logout;
- Participar do processo de recuperação e redefinição de senha;
- Armazenar as senhas utilizando mecanismo de hash seguro;
- Utilizar comunicação segura por meio de HTTPS.

**Permissões:**

| Operação | Permissão | Justificativa |
|---|:---:|---|
| **CREATE** | ✅ | Cria uma sessão segura após a autenticação válida do usuário. |
| **READ** | ✅ | Consulta as informações necessárias para validar e autenticar o usuário. |
| **UPDATE** | ✅ | Participa do processo de redefinição da senha durante a recuperação. |
| **DELETE** | ✅ | Encerra a sessão do usuário durante o logout. |

**Regras de Segurança:**

O sistema deve garantir que:

- As senhas não sejam armazenadas em texto puro;
- As senhas sejam protegidas por mecanismo de hash seguro;
- A comunicação entre usuário e sistema seja protegida por HTTPS;
- Tentativas excessivas de login sejam controladas;
- Usuários com contas desativadas não consigam acessar a rede social;
- Credenciais inválidas não permitam o acesso à plataforma.


### 4. 👨‍💼 ADMINISTRADOR — Ator Secundário

**Papel:**  
Realizar o login e acessar as funcionalidades administrativas da rede social.

**Responsabilidade:**

O administrador possui uma conta cadastrada na plataforma e utiliza o mesmo processo de autenticação dos demais usuários. A diferença está nas permissões concedidas após a autenticação.

Durante o login, o administrador deve:

- Informar o e-mail cadastrado;
- Informar a senha;
- Solicitar o login;
- Ter suas credenciais validadas pelo sistema;
- Ter o status da conta verificado;
- Ter seu perfil de administrador identificado pelo sistema;
- Acessar a área administrativa após uma autenticação válida.

Após o login, o administrador poderá realizar atividades específicas de gerenciamento da plataforma, de acordo com suas permissões, como:

- Gerenciar usuários;
- Visualizar informações dos usuários;
- Gerenciar ou desativar contas;
- Moderar conteúdos publicados na rede social;
- Analisar denúncias;
- Aplicar medidas administrativas previstas pelo sistema.

**Permissões — CRUD:**

| Operação | Permissão | Justificativa |
|---|:---:|---|
| **CREATE** | ✅ | Pode realizar operações administrativas que envolvam a criação de registros, quando previstas pelo sistema. |
| **READ** | ✅ | Pode consultar informações necessárias para administração e moderação da plataforma. |
| **UPDATE** | ✅ | Pode alterar informações ou status de usuários e conteúdos conforme suas permissões administrativas. |
| **DELETE** | ✅ | Pode excluir ou remover registros e conteúdos quando essa ação estiver prevista para a administração da plataforma. |
Não aplicável nesta etapa |

## 🎨 4. PROTÓTIPO FUNCIONAL (HTML + CSS + CÓDIGO + BD + DEPLOY) (40%)

**Objetivo:** Implementação COMPLETA e FUNCIONAL da feature, com aplicação rodando em produção.

⚠️ **OBRIGATORIEDADE CRÍTICA:**
- ✅ Arquivo `index.html` com CSS embutido
- ✅ Código-fonte COMPLETO na linguagem escolhida (JavaScript, Python, Java, etc)
- ✅ Script DDL do banco de dados
- ✅ Aplicação FUNCIONANDO em GitHub Pages, Vercel, Netlify ou similar
- ✅ Banco de dados persistindo dados (Supabase, Firebase, MongoDB Atlas, etc)
- ✅ Sem funcionalidade completa = **0% neste tópico (PERDE 40% DA NOTA)**

**O que avaliar:**
- ✅ Arquivo HTML+CSS entregue (semântica correta)
- ✅ Código-fonte presente no repositório GitHub
- ✅ Script DDL criando tabelas necessárias
- ✅ Telas: vazio, preenchido, erro, carregando, sucesso
- ✅ CSS responsivo (mobile 320px, desktop 1024px)
- ✅ Validação visual (borda verde/vermelha, checkmark)
- ✅ Mensagens de erro claras
- ✅ Dados persistindo em BD (comprovável)
- ✅ Aplicação acessível via URL pública
- ✅ Demonstração prática funcionando

#### Exemplo Prático — RF-001: Mockup das Telas

**Mockup - Tela 1: Formulário Vazio (Estado Inicial)**
```
┌────────────────────────────────────────────────┐
│  ☰ Hotel Management  [Usuário ▼]              │
├────────────────────────────────────────────────┤
│                                                │
│  📝 Cadastro de Novo Hóspede                   │
│                                                │
│  Nome Completo: [_________________________]    │
│  Email:         [_________________________]    │
│  CPF:           [_________________________]    │
│  Telefone:      [_________________________]    │
│  Data Nascimento: [_________________________]   │
│                                                │
│  Observações:                                  │
│  [_________________________________]           │
│  [_________________________________]           │
│                                                │
│  [ SALVAR ]  [ CANCELAR ]  [ LIMPAR ]          │
│                                                │
└────────────────────────────────────────────────┘
```

**Mockup - Tela 2: Formulário Preenchido (Validação Visual)**
```
┌────────────────────────────────────────────────┐
│  ☰ Hotel Management  [Usuário ▼]              │
├────────────────────────────────────────────────┤
│                                                │
│  📝 Cadastro de Novo Hóspede                   │
│                                                │
│  Nome: [João da Silva              ] ✅        │
│  Email: [joao.silva@email.com      ] ✅        │
│  CPF: [12345678901                 ] ✅        │
│  Telefone: [(11) 99999-8888        ] ✅        │
│  Data Nascimento: [15/03/1990       ] ✅        │
│                                                │
│  Observações:                                  │
│  [Cliente VIP, pedir upgrade ao   ]            │
│  [check-in                        ]            │
│                                                │
│  [ SALVAR ]  [ CANCELAR ]  [ LIMPAR ]          │
│                                                │
└────────────────────────────────────────────────┘
```

**Mockup - Tela 3: Carregando (Processando)**
```
┌────────────────────────────────────────────────┐
│  ☰ Hotel Management  [Usuário ▼]              │
├────────────────────────────────────────────────┤
│                                                │
│         Salvando dados do hóspede...           │
│              ⟳  (spinner)                      │
│                                                │
│         Aguarde um momento...                  │
│                                                │
│  [ CANCELAR ]                                  │
│                                                │
└────────────────────────────────────────────────┘
```

**Mockup - Tela 4: Erro de Validação (Email Duplicado)**
```
┌────────────────────────────────────────────────┐
│  ☰ Hotel Management  [Usuário ▼]              │
├────────────────────────────────────────────────┤
│                                                │
│  ⚠️ ERRO ao cadastrar hóspede                  │
│  Este email já está cadastrado no sistema      │
│                                                │
│  Nome: [João Silva                 ] ✅        │
│  Email: [joao@email.com            ] ❌        │
│  Mensagem: Use outro email                     │
│  CPF: [12345678901                 ] ✅        │
│  Telefone: [(11) 99999-8888        ] ✅        │
│  Data Nascimento: [15/03/1990       ] ✅        │
│                                                │
│  [ SALVAR ]  [ CANCELAR ]  [ LIMPAR ]          │
│                                                │
└────────────────────────────────────────────────┘
```

**Mockup - Tela 5: Sucesso (Confirmação)**
```
┌────────────────────────────────────────────────┐
│  ☰ Hotel Management  [Usuário ▼]              │
├────────────────────────────────────────────────┤
│                                                │
│  ✅ Hóspede cadastrado com sucesso!            │
│                                                │
│  Dados salvos:                                 │
│  • Nome: João Silva                            │
│  • Email: joao.silva@email.com                 │
│  • ID Hóspede: HSP-2026-0001234                │
│                                                │
│  Confirmação enviada para: joao.silva@...     │
│                                                │
│  [ NOVO CADASTRO ]  [ VER DETALHES ]  [ VOLTAR ]│
│                                                │
└────────────────────────────────────────────────┘
```

**Descrição de Estados:**
- **Estado Normal:** Todos campos em branco, botões habilitados
- **Estado Preenchido:** Validação visual com checkmark verde
- **Estado Erro:** Campo inválido destacado em vermelho com mensagem
- **Estado Loading:** Spinner animado, botões desabilitados
- **Estado Sucesso:** Mensagem de confirmação com dados salvos

**Fluxo de Navegação:**
1. Página inicial → Clica "Novo Hóspede"
2. Abre modal/página de cadastro
3. Preenche dados
4. Clica "Salvar"
5. Se sucesso → Exibe mensagem + volta à lista
6. Se erro → Destaca campo + exibe mensagem + mantém dados

**Responsividade:**
- **Mobile (320px):** Layout single-column, campos full-width
- **Tablet (768px):** Layout single-column com padding maior
- **Desktop (1024px+):** Layout potencialmente two-column se apropriado

**CRITÉRIOS DE ACEITE PARA 40/40:**
- ✅ Arquivo index.html com CSS embutido criado
- ✅ Código-fonte completo no repositório GitHub
- ✅ Script DDL no banco de dados
- ✅ Mínimo 5 telas diferentes (vazio, preenchido, erro, loading, sucesso)
- ✅ HTML semanticamente correto
- ✅ CSS responsivo (mobile + desktop)
- ✅ Validação visual (borda verde/vermelha, checkmark)
- ✅ Mensagens de erro claras
- ✅ Estados diferentes bem definidos
- ✅ Dados persistindo em banco de dados
- ✅ **Aplicação FUNCIONANDO e ACESSÍVEL online**
- ✅ Demonstração prática durante apresentação
