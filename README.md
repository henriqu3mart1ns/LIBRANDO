## 1. METADADOS DO PROJETO E DA EQUIPE

### 1.1 Composição da Equipe


| ID | Nome Completo | Papel Primário | Papel Secundário | E-mail / Contato |
|:---:|:---|:---|:---|:---|
| 1 | [André Mendes] | Scrum Master | Fullstack | [andre53774636@edu.df.senac.br] |
| 2 | [Eduardo] | Desenvolvedor Front-End | — | [eduardo59381426@edu.df.senac.br] |
| 3 | [Gabriel Souza / Vitor Silva] | Desenvolvedor Back-End | — | [gabriel49414966@edu.df.senac.br / vitor59422706@edu.df.senac.br] |
| 4 | [Henrique Alves] | DBA / Banco de Dados | — | [henrique51782196@edu.df.senac.br] |
| 5 | [Angel Pacheco] | QA / SecDevOps | — | [angel59381406@edu.df.senac.br] |
| 6 | [Angel Pacheco] | Fullstack (opcional) | — | [angel59381406@edu.df.senac.br] |

### 1.2 Identificação

- **NOME_DO_PROJETO:** [LIBRANDO]
  - 

- **DESCRICAO_BREVE:** [1-2 linhas sobre o que o sistema faz]
  - *Exemplo: Sistema web para gerenciamento completo de hóspedes, reservas, check-in/check-out e faturamento de hotel.*

### 1.3 Localização dos Artefatos

- **LINK_REPOSITORIO_GITHUB:** https://github.com/[seu-usuario]/[seu-repo]
- **BRANCH_PRINCIPAL:** main ou develop
- **LINK_APLICACAO_DEPLOY:** https://[seu-projeto].github.io (GitHub Pages) ou Vercel, Netlify, etc.
- **LINK_BANCO_DADOS:** [Supabase, Firebase, MongoDB Atlas, etc.] (com acesso de leitura para professor)
- **LINK_API_SWAGGER:** https://[seu-backend]/api-docs (Documentação OpenAPI/Swagger)
- **LINK_DEMONSTRAÇÃO:** [URL funcional da aplicação em produção]

---

## 2. ESTRUTURA DE DIRETÓRIOS DO PROJETO

```
seu-projeto-arquitetura/
├── docs/
│   ├── requisitos/
│   │   ├── RF-001-cadastro-hospede.md (ENTREGA - DOCUMENTO ÚNICO)
│   │   ├── RF-002-alterar-hospede.md  (ENTREGA - DOCUMENTO ÚNICO)
│   │   └── ... (RF-XXX)
│   │
│   └── api/
│       └── swagger.json (ou openapi.json)
│
├── src/
│   ├── rf-001-cadastro-hospede/
│   │   ├── index.html (HTML com CSS embutido)
│   │   ├── app.js (Código-fonte JavaScript/Linguagem escolhida)
│   │   └── README.md (Como executar)
│   │
│   ├── rf-002-alterar-hospede/
│   │   ├── index.html
│   │   ├── app.js
│   │   └── README.md
│   └── ... (rf-XXX)
│
├── database/
│   ├── ddl/
│   │   ├── rf-001-hospedes-ddl.sql (Script DDL - CREATE TABLE)
│   │   ├── rf-002-hospedes-alter-ddl.sql
│   │   └── ... (scripts por requisito)
│   │
│   └── seeds/
│       ├── hospedes-seeds.sql (Dados de exemplo)
│       └── ...
│
├── .github/
│   └── workflows/ (CI/CD - opcional)
│
├── README.md (guia geral do projeto)
└── .gitignore (incluir .env, node_modules, etc)
```

**Localização dos Arquivos:**
- **Documentação:** `docs/requisitos/RF-NNN-nome-requisito.md` (UM ÚNICO DOCUMENTO POR RF)
- **Código-fonte:** `src/rf-NNN-nome-requisito/` (HTML + CSS + JS/TypeScript/etc)
- **Scripts BD:** `database/ddl/rf-NNN-nome-requisito-ddl.sql`
- **API Swagger:** `docs/api/swagger.json` ou URL do Swagger UI
- **Aplicação Funcional:** Deployed em GitHub Pages ou nuvem com BD integrado

## 3. DETALHAMENTO TÉCNICO DE UM REQUISITO FUNCIONAL

### 🎯 3.1 IDENTIFICAÇÃO DO REQUISITO (2%)

**ID:** RF-001
**Título:** Cadastro de Novo Hóspede no Sistema
**Tipo:** Requisito Funcional
**Prioridade:** ALTA (bloqueia RF-002, RF-003 e RF-004)
**Complexidade:** MÉDIA (estimado 5 story points)
**Status:** EM DESENVOLVIMENTO
**Data de Criação:** 12/10/2026
**Última Atualização:** 12/10/2026

**Breve Descrição:**
O sistema deve permitir que recepcionistas cadastrem novos hóspedes com dados essenciais (nome, email, CPF, telefone, data de nascimento) para manter registro atualizado de clientes do hotel.

---



### 📋 3.2  DESCRIÇÃO E ATORES — RF: Tela de Login da Rede Social

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

# 🔄 3. ESPECIFICAÇÃO DE CASOS DE USO + REQUISITOS NÃO-FUNCIONAIS (20%)

**Objetivo:** Descrever detalhadamente como o requisito da tela de login é executado, apresentando pré-condições, pós-condições, fluxo principal, fluxos alternativos, regras de negócio e requisitos não-funcionais.

## 📌 Caso de Uso

**Caso de Uso (UC-001): Realizar Login**

**Requisito Funcional:** RF — Tela de Login da Rede Social

### Atores Envolvidos

- 👤 **Usuário Cadastrado** — Ator Principal
- 👨‍💼 **Administrador** — Ator Secundário
- ⚙️ **Sistema** — Ator Automático

## 🔹 Pré-Condições

- ✅ O usuário deve possuir uma conta cadastrada;
- ✅ O usuário deve possuir um e-mail válido associado à sua conta;
- ✅ O usuário deve possuir uma senha cadastrada;
- ✅ A conta do usuário deve estar ativa;
- ✅ O sistema deve estar disponível;
- ✅ O banco de dados deve estar acessível;
- ✅ O usuário deve estar na tela de login da rede social.

## 🔹 Pós-Condições (Sucesso)

- ✅ As credenciais do usuário são validadas;
- ✅ A conta do usuário é identificada;
- ✅ O sistema verifica se a conta está ativa;
- ✅ O sistema identifica o perfil do usuário;
- ✅ Uma sessão segura é criada;
- ✅ O usuário é autenticado;
- ✅ O usuário é direcionado para a página principal da rede social;
- ✅ Caso seja Administrador, suas permissões administrativas são carregadas.

## 🔹 Pós-Condições (Falha)

- ❌ O usuário não é autenticado;
- ❌ Uma sessão não é criada;
- ❌ O acesso à rede social é negado;
- ✅ Uma mensagem de erro é apresentada;
- ✅ O usuário permanece na tela de login;
- ✅ A tentativa pode ser registrada para fins de segurança.

## 🔄 Fluxo Principal

1. Usuário cadastrado acessa a tela de login da rede social.
2. Sistema apresenta os campos de **E-mail** e **Senha**.
3. Usuário informa seu e-mail cadastrado.
4. Sistema verifica se o campo de e-mail foi preenchido corretamente.
5. Usuário informa sua senha.
6. Sistema verifica se o campo de senha foi preenchido.
7. Usuário clica no botão **"Entrar"**.
8. Sistema valida os dados informados.
9. Sistema verifica se o e-mail está cadastrado.
10. Sistema verifica se a senha corresponde à conta.
11. Sistema verifica se a conta está ativa.
12. Sistema identifica o perfil associado à conta.
13. Sistema autentica o usuário.
14. Sistema cria uma sessão segura para o usuário.
15. Sistema registra o acesso, quando previsto pelas regras de segurança.
16. Sistema redireciona o usuário para a página principal da rede social.
17. Usuário acessa a plataforma de acordo com suas permissões.
18. Caso o usuário seja Administrador, o sistema disponibiliza as funcionalidades administrativas permitidas para seu perfil.

# 🔀 Fluxos Alternativos

## Fluxo Alternativo A1 — E-mail ou senha inválidos

1. Sistema identifica que as credenciais informadas são inválidas.
2. Sistema impede a autenticação do usuário.
3. Sistema não cria uma sessão.
4. Sistema apresenta uma mensagem de erro.
5. Usuário permanece na tela de login.
6. Usuário pode corrigir os dados e realizar uma nova tentativa.

## Fluxo Alternativo A2 — Conta desativada

1. Sistema identifica que a conta associada ao e-mail está desativada.
2. Sistema impede a autenticação.
3. Sistema não cria uma sessão para o usuário.
4. Sistema informa que a conta está desativada.
5. Sistema orienta o usuário a entrar em contato com o suporte, quando aplicável.

**Mensagem sugerida:**  

## Fluxo Alternativo A3 — E-mail não cadastrado

1. Sistema verifica que não existe uma conta associada ao e-mail informado.
2. Sistema impede a autenticação.
3. Sistema não cria uma sessão.
4. Sistema informa que não foi encontrada uma conta para aquele e-mail.
5. Sistema disponibiliza a opção **"Criar uma conta"**.
6. Usuário pode iniciar o processo de cadastro.

**Mensagem sugerida:**  

## Fluxo Alternativo A4 — Campos obrigatórios não preenchidos

1. Sistema identifica que o campo de e-mail está vazio ou inválido.
2. Sistema destaca o campo que apresenta erro.
3. Sistema apresenta uma mensagem orientando o preenchimento correto.
4. Usuário corrige o campo.
5. Sistema realiza novamente a validação.

## Fluxo Alternativo A5 — Recuperação de senha

1. Usuário cadastrado seleciona a opção **"Esqueci minha senha"**.
2. Sistema solicita o e-mail associado à conta.
3. Usuário informa o e-mail.
4. Sistema verifica se o e-mail está associado a uma conta.
5. Sistema inicia o processo de recuperação de senha.
6. Usuário recebe as instruções necessárias para redefinir sua senha.
7. Usuário define uma nova senha.
8. Sistema atualiza a senha da conta.
9. Usuário retorna à tela de login e pode realizar uma nova tentativa.

## Fluxo Alternativo A6 — Falha de conexão

1. Sistema tenta realizar a validação das credenciais.
2. Sistema identifica uma falha de comunicação com o banco de dados ou servidor.
3. Sistema não consegue concluir a autenticação.
4. Sistema impede a criação da sessão.
5. Sistema apresenta uma mensagem informando que o serviço está temporariamente indisponível.
6. Usuário pode tentar realizar o login novamente posteriormente.

# 📋 Regras de Negócio (RN)

| ID | Regra | Descrição |
|:---:|:---|:---|
| **RN-01** | E-mail Obrigatório | O usuário deve informar um e-mail para realizar o login. |
| **RN-02** | Senha Obrigatória | O usuário deve informar uma senha para realizar o login. |
| **RN-03** | E-mail Cadastrado | O e-mail informado deve estar associado a uma conta existente no sistema. |
| **RN-04** | Credenciais Válidas | O e-mail e a senha informados devem corresponder aos dados cadastrados. |
| **RN-05** | Conta Ativa | Apenas contas ativas podem realizar login na rede social. |
| **RN-06** | Sessão de Usuário | Uma sessão deve ser criada somente após uma autenticação válida. |
| **RN-07** | Recuperação de Senha | Somente usuários que possuem uma conta cadastrada podem iniciar a recuperação de senha. |
| **RN-08** | Perfil do Usuário | Após a autenticação, o sistema deve identificar o perfil do usuário e aplicar suas respectivas permissões. |
| **RN-09** | Administrador | O Administrador utiliza o mesmo processo de login do usuário cadastrado, diferenciando-se pelas permissões administrativas após a autenticação. |
| **RN-10** | Tentativas de Login | O sistema deve controlar tentativas excessivas de autenticação para aumentar a segurança das contas. |

---

# ⚙️ Requisitos Não-Funcionais (RNF)

| ID | Atributo | Requisito | Métrica | Justificativa |
|:---:|:---|:---|:---|:---|
| **RNF-01** | Performance | O sistema deve responder às solicitações de login em até 2 segundos em condições normais de operação. | Tempo de resposta | Evitar que o usuário fique aguardando durante a autenticação. |
| **RNF-02** | Segurança | As senhas dos usuários devem ser armazenadas utilizando mecanismo seguro de hash. | Senhas não armazenadas em texto puro | Proteger as credenciais dos usuários contra acesso indevido. |
| **RNF-03** | Disponibilidade | A funcionalidade de login deve estar disponível durante o funcionamento normal da plataforma. | Disponibilidade do serviço | Permitir que os usuários consigam acessar a rede social. |
| **RNF-04** | Acessibilidade | A tela de login deve disponibilizar recursos de acessibilidade adequados ao público-alvo, incluindo recursos em Libras quando previstos. | Recursos de acessibilidade disponíveis | Facilitar o acesso à plataforma. |
| **RNF-05** | Usabilidade | A tela deve apresentar campos e mensagens de erro de forma clara e objetiva. | Clareza das mensagens | Facilitar a realização do login e a correção de erros. |
| **RNF-06** | Segurança de Sessão | O sistema deve criar uma sessão segura somente após a autenticação válida. | Sessões autenticadas corretamente | Evitar acesso não autorizado às contas dos usuários. |
