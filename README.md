# 1. METADADOS DO PROJETO E DA EQUIPE

## 1.1 Composição da Equipe

|  ID | Nome Completo                 | Papel Primário          | Papel Secundário | E-mail / Contato                                                                                                                                    |
| :-: | :---------------------------- | :---------------------- | :--------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------- |
|  1  | [André Mendes]                | Scrum Master            | Fullstack        | [[andre53774636@edu.df.senac.br](mailto:andre53774636@edu.df.senac.br)]                                                                             |
|  2  | [Eduardo]                     | Desenvolvedor Front-End | —                | [[eduardo59381426@edu.df.senac.br](mailto:eduardo59381426@edu.df.senac.br)]                                                                         |
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
* **LINK_DEMONSTRAÇÃO:** Aplicação executada localmente em `http://localhost/librando/`

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
│       ├── css/
│       │   └── style.css
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
* **Estilos CSS:** `src/rf-001-login/css/style.css`
* **Processamento do login:** `src/rf-001-login/login.php`
* **Conexão com o banco:** `src/rf-001-login/conexao.php`
* **Script de criação do banco:** `database/ddl/rf-001-usuarios-ddl.sql`
* **Dados de teste:** `database/seeds/usuarios-seeds.sql`
* **Guia geral:** `README.md`

---

# 3. DETALHAMENTO TÉCNICO DE UM REQUISITO FUNCIONAL

## 🎯 3.1 IDENTIFICAÇÃO DO REQUISITO

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

# 📋 3.2 DESCRIÇÃO E ATORES — RF-001: Tela de Login

## Descrição Detalhada

### Por que este requisito existe?

A plataforma Librando precisa disponibilizar um mecanismo de autenticação para permitir que usuários cadastrados acessem o sistema utilizando suas credenciais.

A tela de login existe para:

* 🔐 Permitir a autenticação de usuários cadastrados;
* 👤 Identificar o usuário por meio do e-mail;
* 🔑 Validar a senha informada;
* 🛡️ Armazenar e verificar senhas de maneira segura utilizando hash;
* ♿ Disponibilizar uma interface acessível e compatível com a proposta da plataforma;
* 👁️ Permitir que o usuário visualize ou oculte a senha durante o preenchimento.

## Contexto do Sistema

A aplicação Librando é uma plataforma voltada à comunidade surda.

Nesta etapa do projeto, foi desenvolvida a funcionalidade de login, permitindo que um usuário informe seu e-mail e senha para realizar a autenticação.

O formulário da página é desenvolvido em **HTML e CSS**, enquanto o processamento das informações é realizado pelo **PHP**.

O PHP recebe os dados enviados pelo formulário e consulta o banco de dados **MySQL** por meio do arquivo `conexao.php`.

Quando as credenciais informadas correspondem a um usuário cadastrado, o sistema confirma que o login foi realizado com sucesso.

---

# 👥 3.3 ATORES DO SISTEMA

## 1. 👤 USUÁRIO CADASTRADO — Ator Principal

**Papel:**
Realizar a autenticação para acessar a plataforma Librando.

**Responsabilidade:**

O usuário cadastrado deve informar suas credenciais na tela de login.

Pode:

* Informar o e-mail;
* Informar a senha;
* Visualizar ou ocultar a senha;
* Clicar no botão **"Entrar"**;
* Receber uma mensagem informando o resultado da tentativa de login.

### Permissões

| Operação   | Permissão | Justificativa                                                            |
| :--------- | :-------: | :----------------------------------------------------------------------- |
| **CREATE** |     ❌     | O cadastro não faz parte do RF-001.                                      |
| **READ**   |     ✅     | O usuário informa e consulta os dados necessários para sua autenticação. |
| **UPDATE** |     ❌     | Alterações de dados da conta não fazem parte do RF-001.                  |
| **DELETE** |     ❌     | Exclusão de conta não faz parte do RF-001.                               |

---

## 2. ⚙️ SISTEMA — Ator Automático

**Papel:**
Processar a autenticação do usuário.

**Responsabilidade:**

O sistema deve:

* Receber o e-mail enviado pelo formulário;
* Receber a senha enviada pelo formulário;
* Verificar se os campos foram preenchidos;
* Consultar o banco de dados;
* Localizar o usuário pelo e-mail;
* Verificar a senha utilizando o hash armazenado;
* Informar se o login foi realizado com sucesso;
* Informar caso as credenciais sejam inválidas.

### Permissões

| Operação   | Permissão | Justificativa                                        |
| :--------- | :-------: | :--------------------------------------------------- |
| **CREATE** |     ❌     | A criação de usuários não faz parte deste requisito. |
| **READ**   |     ✅     | Consulta os dados necessários para validar o login.  |
| **UPDATE** |     ❌     | Não realiza alteração de dados durante o login.      |
| **DELETE** |     ❌     | Não realiza exclusão de dados durante o login.       |

---

# 🔄 3.4 ESPECIFICAÇÃO DO CASO DE USO

**Caso de Uso (UC-001): Realizar Login**

**Requisito Funcional:** RF-001 — Tela de Login da Rede Social

### Atores Envolvidos

* 👤 **Usuário Cadastrado**
* ⚙️ **Sistema**

## 🔹 Pré-Condições

* O usuário deve possuir uma conta cadastrada;
* O usuário deve possuir um e-mail cadastrado;
* O usuário deve possuir uma senha cadastrada;
* O banco de dados deve estar disponível;
* O servidor PHP deve estar funcionando;
* O usuário deve estar na página de login.

## 🔹 Pós-Condições — Sucesso

* O e-mail informado é encontrado no banco;
* A senha informada corresponde ao hash armazenado;
* O sistema reconhece as credenciais como válidas;
* O sistema apresenta uma mensagem de login efetuado com sucesso.

## 🔹 Pós-Condições — Falha

* O usuário não é autenticado;
* O sistema não confirma o login;
* O sistema apresenta uma mensagem informando que as credenciais são inválidas.

---

# 🔄 3.5 FLUXO PRINCIPAL

1. Usuário acessa a página de login do Librando.
2. Sistema apresenta os campos **E-mail** e **Senha**.
3. Usuário informa seu e-mail.
4. Usuário informa sua senha.
5. Usuário pode clicar no ícone de olho para visualizar ou ocultar a senha.
6. Usuário clica no botão **"Entrar"**.
7. O formulário envia os dados utilizando o método `POST`.
8. O arquivo `login.php` recebe os dados enviados.
9. O `login.php` utiliza o `conexao.php` para acessar o banco de dados.
10. O sistema procura o usuário utilizando o e-mail informado.
11. O sistema verifica a senha informada utilizando o hash armazenado.
12. Caso as credenciais sejam válidas, o sistema confirma o login.
13. O sistema apresenta uma mensagem informando que o login foi efetuado com sucesso.

---

# 🔀 3.6 FLUXOS ALTERNATIVOS

## Fluxo Alternativo A1 — E-mail não cadastrado

1. Usuário informa um e-mail.
2. Usuário informa a senha.
3. Usuário seleciona **"Entrar"**.
4. O sistema consulta o banco de dados.
5. O sistema não encontra o e-mail informado.
6. O sistema impede a autenticação.
7. O sistema apresenta uma mensagem informando que as credenciais são inválidas.

## Fluxo Alternativo A2 — Senha incorreta

1. Usuário informa um e-mail cadastrado.
2. Usuário informa uma senha incorreta.
3. Usuário seleciona **"Entrar"**.
4. O sistema encontra o usuário pelo e-mail.
5. O sistema verifica a senha.
6. A senha não corresponde ao hash armazenado.
7. O sistema impede a autenticação.
8. O sistema apresenta uma mensagem de erro.

## Fluxo Alternativo A3 — Campos não preenchidos

1. Usuário acessa a página de login.
2. Usuário deixa um ou mais campos vazios.
3. Usuário tenta realizar o login.
4. O sistema identifica que existem campos obrigatórios não preenchidos.
5. O sistema solicita que os campos sejam preenchidos.

## Fluxo Alternativo A4 — Falha na conexão com o banco

1. Usuário envia suas credenciais.
2. `login.php` tenta acessar o banco de dados.
3. O sistema identifica uma falha na conexão.
4. A autenticação não pode ser concluída.
5. O sistema apresenta uma mensagem informando que ocorreu um erro durante o processamento.

---

# 📋 3.7 REGRAS DE NEGÓCIO

|     ID    | Regra               | Descrição                                                                             |
| :-------: | :------------------ | :------------------------------------------------------------------------------------ |
| **RN-01** | E-mail obrigatório  | O usuário deve informar um e-mail para realizar o login.                              |
| **RN-02** | Senha obrigatória   | O usuário deve informar uma senha para realizar o login.                              |
| **RN-03** | E-mail cadastrado   | O e-mail informado deve existir no banco de dados.                                    |
| **RN-04** | Senha válida        | A senha informada deve corresponder ao hash armazenado no banco.                      |
| **RN-05** | Senha protegida     | As senhas não devem ser armazenadas em texto puro.                                    |
| **RN-06** | Método POST         | Os dados do formulário devem ser enviados ao backend utilizando o método `POST`.      |
| **RN-07** | Conexão com o banco | O sistema deve utilizar o arquivo `conexao.php` para realizar a conexão com o MySQL.  |
| **RN-08** | Feedback            | O sistema deve informar ao usuário se o login foi realizado ou se ocorreu algum erro. |

---

# ⚙️ 3.8 REQUISITOS NÃO-FUNCIONAIS

|     ID     | Atributo         | Requisito                                                                                 | Métrica                               | Justificativa                                       |
| :--------: | :--------------- | :---------------------------------------------------------------------------------------- | :------------------------------------ | :-------------------------------------------------- |
| **RNF-01** | Segurança        | As senhas devem ser armazenadas utilizando hash.                                          | Senhas não armazenadas em texto puro. | Proteger as credenciais dos usuários.               |
| **RNF-02** | Segurança        | O sistema deve utilizar `password_verify()` para verificar a senha.                       | Verificação por hash.                 | Evitar comparação de senhas em texto puro.          |
| **RNF-03** | Usabilidade      | A tela deve apresentar os campos de login de forma clara.                                 | Interface organizada.                 | Facilitar a utilização pelo usuário.                |
| **RNF-04** | Acessibilidade   | A interface deve possuir recursos voltados à acessibilidade, incluindo suporte em Libras. | Recurso de acessibilidade disponível. | Atender ao público-alvo da plataforma.              |
| **RNF-05** | Compatibilidade  | O sistema deve funcionar em navegadores modernos.                                         | Execução em navegadores compatíveis.  | Permitir acesso ao sistema em diferentes ambientes. |
| **RNF-06** | Manutenibilidade | O código deve ser organizado em arquivos separados conforme sua responsabilidade.         | HTML, CSS, PHP e SQL separados.       | Facilitar manutenção e evolução do projeto.         |

---

# 🗄️ 3.9 BANCO DE DADOS

O sistema utiliza **MySQL** para armazenar os dados necessários à autenticação dos usuários.

Os scripts relacionados ao banco estão organizados em:

```text
database/
├── ddl/
│   └── rf-001-usuarios-ddl.sql
│
└── seeds/
    └── usuarios-seeds.sql
```

## DDL

O arquivo DDL é responsável pela criação da estrutura necessária para armazenar os usuários.

```text
database/ddl/rf-001-usuarios-ddl.sql
```

## Seeds

O arquivo Seeds contém dados de exemplo utilizados para testar a autenticação.

```text
database/seeds/usuarios-seeds.sql
```

As senhas armazenadas no banco devem estar em formato de **hash**, gerado pelo PHP.

---

# 🔐 3.10 AUTENTICAÇÃO

O processo de autenticação é dividido entre o Front-End e o Back-End.

### Front-End

O arquivo:

```text
src/rf-001-login/index.html
```

é responsável pela interface da tela de login.

Os dados são enviados através do formulário:

```html
<form action="login.php" method="POST">
```

Os campos utilizados são:

```text
email
senha
```

### Back-End

O arquivo:

```text
src/rf-001-login/login.php
```

recebe os dados enviados pelo formulário e realiza a validação das credenciais.

### Banco de Dados

O arquivo:

```text
src/rf-001-login/conexao.php
```

realiza a conexão entre o PHP e o banco de dados MySQL.

---

# ▶️ 3.11 EXECUÇÃO DO PROJETO

Para executar o projeto localmente, é necessário utilizar o **XAMPP**.

## Passo 1 — Instalar o XAMPP

Instale o XAMPP no computador.

## Passo 2 — Iniciar Apache e MySQL

Abra o XAMPP Control Panel e inicie:

```text
Apache
MySQL
```

## Passo 3 — Colocar o projeto no htdocs

Coloque a pasta `librando` dentro de:

```text
C:\xampp\htdocs\
```

## Passo 4 — Criar o banco

Abra:

```text
http://localhost/phpmyadmin
```

Crie o banco:

```text
librando
```

## Passo 5 — Importar o DDL

No phpMyAdmin, selecione o banco `librando` e importe:

```text
database/ddl/rf-001-usuarios-ddl.sql
```

## Passo 6 — Importar o Seeds

Depois de criar a estrutura do banco, importe:

```text
database/seeds/usuarios-seeds.sql
```

## Passo 7 — Acessar o sistema

Abra o navegador e acesse:

```text
http://localhost/librando/
```

> **Importante:** o arquivo `index.html` não deve ser aberto diretamente pelo computador. O sistema deve ser acessado pelo servidor Apache, pois o login utiliza PHP.

---

# 🔗 3.12 FLUXO DA APLICAÇÃO

```text
┌─────────────────────┐
│      index.html     │
│    Tela de Login    │
└──────────┬──────────┘
           │
           │ POST
           ▼
┌─────────────────────┐
│      login.php      │
│ Processa o login    │
└──────────┬──────────┘
           │
           │ Conexão
           ▼
┌─────────────────────┐
│    conexao.php      │
│ Conecta ao MySQL    │
└──────────┬──────────┘
           │
           ▼
┌─────────────────────┐
│    Banco MySQL      │
│     Usuários        │
└──────────┬──────────┘
           │
           │ Verificação
           ▼
┌─────────────────────┐
│  password_verify()  │
└──────────┬──────────┘
           │
       ┌───┴───┐
       │       │
     Válido  Inválido
       │       │
       ▼       ▼
   Login     Mensagem
 efetuado     de erro
```

---

# 📌 3.13 STATUS DA IMPLEMENTAÇÃO

| Funcionalidade                |            Status           |
| :---------------------------- | :-------------------------: |
| Tela de login                 |        ✅ Implementado       |
| Campo de e-mail               |        ✅ Implementado       |
| Campo de senha                |        ✅ Implementado       |
| Mostrar/ocultar senha         |        ✅ Implementado       |
| Formulário HTML               |        ✅ Implementado       |
| Comunicação com PHP           |        ✅ Implementado       |
| Conexão com MySQL             |        ✅ Implementado       |
| Consulta de usuário           |        ✅ Implementado       |
| Verificação de senha com hash |        ✅ Implementado       |
| Mensagem de login efetuado    |        ✅ Implementado       |
| Cadastro de usuário           | ⏳ Não implementado neste RF |
| Recuperação de senha          | ⏳ Não implementado neste RF |
| Logout                        | ⏳ Não implementado neste RF |
| Página principal após login   | ⏳ Não implementado neste RF |
| API Swagger                   | ⏳ Não aplicável nesta etapa |
