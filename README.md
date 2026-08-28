## 📋 2. DESCRIÇÃO E ATORES (10%)

### Objetivo

Descrever o requisito da tela de login com clareza, apresentando o contexto da rede social, os atores envolvidos, suas responsabilidades e suas permissões.

---

## 📌 Descrição Detalhada

### Por que este requisito existe?

A rede social precisa disponibilizar um mecanismo de autenticação que permita aos usuários cadastrados acessar a plataforma de forma **segura, simples e acessível**.

A tela de login existe para:

- 🔐 **Garantir a segurança do acesso**, permitindo que somente usuários autorizados entrem na plataforma;
- 👤 **Identificar e autenticar os usuários cadastrados**, verificando e-mail, senha, situação da conta e permissão de acesso;
- ♿ **Garantir acessibilidade**, disponibilizando recursos visuais e suporte à comunicação em Libras;
- 🔑 **Permitir recuperação de senha**, possibilitando que usuários que esqueceram suas credenciais recuperem o acesso à conta;
- 📝 **Permitir a criação de novas contas**, possibilitando que novos usuários ingressem na rede social;
- 🛡️ **Proteger as contas dos usuários**, utilizando sessão segura, proteção contra tentativas excessivas e armazenamento seguro das senhas.

---

## 🏢 Contexto do Negócio

A aplicação consiste em uma **rede social acessível voltada para pessoas surdas**, na qual os usuários precisam realizar autenticação para acessar a plataforma.

A tela de login deve permitir que um usuário cadastrado informe seu **e-mail e senha**. O sistema deve validar os campos, verificar as credenciais, verificar se a conta está ativa e verificar se o usuário possui permissão de acesso.

Quando a autenticação for válida, o sistema deve criar uma sessão segura e direcionar o usuário para a página principal da rede social.

Caso as credenciais sejam inválidas, a conta esteja desativada ou ocorra alguma outra situação prevista, o acesso deve ser impedido e o usuário deve receber um feedback visual.

Além disso, a tela deve oferecer caminhos para **recuperar senha, criar uma conta e acessar recursos de acessibilidade em Libras**.

---

# 👥 Atores do Sistema

## 1. 👤 USUÁRIO CADASTRADO — Ator Principal

### Papel

Realizar a autenticação para acessar a rede social.

### Responsabilidade

O usuário cadastrado é responsável por informar suas próprias credenciais de acesso e utilizar os recursos disponibilizados pela tela de login.

Pode:

- Informar o e-mail cadastrado;
- Informar a senha;
- Solicitar o login;
- Visualizar ou ocultar a senha;
- Solicitar recuperação de senha;
- Optar por permanecer conectado, quando disponível;
- Encerrar sua sessão por meio do logout.

### Permissões — CRUD

| Operação   | Permissão | Justificativa                                                                    |
| ---------- | :-------: | -------------------------------------------------------------------------------- |
| **CREATE** |     ⚠️    | Não especificado para o usuário cadastrado na tela de login.                     |
| **READ**   |     ✅     | Pode utilizar as informações e recursos necessários para sua autenticação.       |
| **UPDATE** |     ⚠️    | O requisito permite redefinir a senha, mas não especifica edição geral da conta. |
| **DELETE** |     ❌     | Não existe requisito para exclusão de conta na tela de login.                    |

> **Observação:** A recuperação de senha não deve ser interpretada como uma permissão de atualização de toda a conta. O requisito especifica a redefinição da senha, mas não apresenta um CRUD completo de usuários.

---

## 2. 👤 USUÁRIO NÃO CADASTRADO — Ator Secundário

### Papel

Iniciar o processo de criação de uma conta para obter acesso à rede social.

### Responsabilidade

O usuário não cadastrado ainda não possui uma conta na plataforma. Portanto, **não pode realizar login nem recuperar uma senha de uma conta inexistente**.

A partir da tela de login, pode selecionar a opção **"Criar uma conta"** e ser direcionado para o formulário de cadastro.

Também pode acessar a explicação em **Libras** disponibilizada pela plataforma.

### Permissões — CRUD

| Operação   | Permissão | Justificativa                                                        |
| ---------- | :-------: | -------------------------------------------------------------------- |
| **CREATE** |     ✅     | Pode iniciar o processo de criação de uma nova conta.                |
| **READ**   |     ⚠️    | Pode acessar informações e orientações disponíveis na tela de login. |
| **UPDATE** |     ❌     | Ainda não possui uma conta para alterar.                             |
| **DELETE** |     ❌     | Não possui uma conta cadastrada para excluir.                        |

### ⚠️ Regra importante

O **Usuário não cadastrado NÃO possui acesso à funcionalidade "Recuperar senha"**.

Isso ocorre porque a recuperação de senha exige uma conta existente e um e-mail associado a essa conta.

O fluxo correto é:

```text
Usuário não cadastrado
        ↓
    Criar conta
        ↓
Usuário cadastrado
        ↓
  Recuperar senha

## 3. ⚙️ SISTEMA — Ator Automático

### Papel

Executar automaticamente as operações necessárias para realizar a autenticação, garantir a segurança do acesso e controlar a sessão dos usuários da rede social.

### Responsabilidade

O sistema é responsável por processar as informações fornecidas pelo usuário durante o login e aplicar as regras definidas para permitir ou impedir o acesso à rede social.

Durante o processo de autenticação, o sistema deve:

- Validar os campos de e-mail e senha;
- Verificar se os campos obrigatórios foram preenchidos;
- Validar o formato do e-mail;
- Verificar se o e-mail informado está cadastrado;
- Verificar se a senha corresponde à conta;
- Verificar se a conta está ativa;
- Verificar se o usuário possui permissão de acesso;
- Impedir o acesso quando as credenciais forem inválidas;
- Impedir o acesso quando a conta estiver desativada;
- Controlar tentativas excessivas de login;
- Apresentar mensagens de feedback ao usuário em caso de erro;
- Criar uma sessão segura após uma autenticação válida;
- Redirecionar o usuário autenticado para a página principal da rede social;
- Permitir o encerramento da sessão por meio do logout;
- Participar do processo de recuperação e redefinição de senha;
- Armazenar as senhas utilizando mecanismo de hash seguro;
- Utilizar comunicação segura por meio de HTTPS.

### Permissões — CRUD

| Operação   | Permissão | Justificativa |
| ---------- | :-------: | --------------------------------------------------------------------- |
| **CREATE** |     ✅     | O sistema cria uma sessão segura após a autenticação válida do usuário. |
| **READ**   |     ✅     | O sistema consulta as informações necessárias para validar e autenticar o usuário. |
| **UPDATE** |     ✅     | O sistema participa da atualização da senha durante o processo de recuperação. |
| **DELETE** |     ✅     | O sistema encerra a sessão do usuário quando ocorre o logout. |

### 🔐 Regras de Segurança

O sistema deve garantir que:

- Senhas não sejam armazenadas em texto puro;
- As senhas sejam protegidas por mecanismo de hash seguro;
- A comunicação entre usuário e sistema seja protegida por HTTPS;
- Tentativas excessivas de login sejam controladas;
- Usuários com contas desativadas não consigam acessar a rede social;
- Credenciais inválidas não permitam o acesso à plataforma.

### 🔄 Fluxo básico de autenticação

```text
Usuário cadastrado
        ↓
  Informa e-mail
        ↓
   Informa senha
        ↓
Sistema valida os dados
        ↓
Sistema verifica credenciais
        ↓
Sistema verifica status da conta
        ↓
   ┌────┴────┐
   ↓         ↓
Válida    Inválida
   ↓         ↓
Criar      Negar
sessão     acesso
   ↓
Redirecionar
para página
principal
