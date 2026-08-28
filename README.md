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
- Optar por permanecer conectado, quando disponível;
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

Também pode acessar os recursos de acessibilidade em Libras disponibilizados pela plataforma.

**Permissões:**

| Operação | Permissão | Justificativa |
|---|:---:|---|
| **CREATE** | ✅ | Pode iniciar o processo de criação de uma nova conta. |
| **READ** | ⚠️ | Pode acessar informações e orientações disponíveis na tela de login. |
| **UPDATE** | ❌ | Ainda não possui uma conta para alterar. |
| **DELETE** | ❌ | Não possui uma conta cadastrada para excluir. |

**Regra importante:**

O **Usuário não cadastrado NÃO possui acesso à funcionalidade "Recuperar senha"**, pois essa funcionalidade exige uma conta existente e um e-mail associado a ela.

---

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
