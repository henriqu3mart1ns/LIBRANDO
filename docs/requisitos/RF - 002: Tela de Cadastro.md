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

# RF-002 — Tela de Cadastro de Usuários

## 1. Identificação do Requisito

| Campo | Informação |
|---|---|
| **ID** | RF-002 |
| **Título** | Tela de Cadastro de Usuários |
| **Tipo** | Requisito Funcional |
| **Prioridade** | ALTA |
| **Complexidade** | MÉDIA |
| **Status** | CONCLUÍDO |
| **Data de Criação** | A definir |
| **Última Atualização** | A definir |

### Descrição

O sistema deve permitir que novos usuários realizem seu cadastro por meio de uma tela específica, preenchendo os dados solicitados.

As informações fornecidas devem ser validadas pelo sistema antes da criação da conta. Após a validação, os dados devem ser armazenados de forma segura no banco de dados MySQL.

Quando o cadastro for concluído com sucesso, o usuário deverá receber uma confirmação visual e poderá utilizar suas credenciais para acessar a plataforma por meio da tela de login.

---

# 2. Descrição e Atores

## Objetivo

Descrever de forma clara o funcionamento do requisito de cadastro de usuários, identificando os atores envolvidos, suas responsabilidades e permissões dentro do processo.

## Benefícios para o Negócio

- Permitir que novos usuários tenham acesso à plataforma.
- Possibilitar a criação de contas de forma segura.
- Aumentar a quantidade de usuários e interações na plataforma.
- Oferecer um processo de cadastro acessível e fácil de utilizar.
- Manter os dados dos usuários organizados no banco de dados.
- Garantir que somente informações válidas sejam utilizadas na criação das contas.

## Contexto

O usuário não cadastrado acessa a opção **"Criar uma conta"** disponível na tela de login.

O sistema apresenta a tela de cadastro, na qual o usuário deve preencher os dados solicitados.

Após o preenchimento, o sistema realiza as validações necessárias, verifica as regras de negócio e confirma se já existe uma conta cadastrada com o mesmo e-mail.

Caso todas as validações sejam aprovadas, os dados são armazenados de forma segura no banco de dados e o cadastro é concluído.

Após o cadastro, o usuário recebe uma confirmação visual e é direcionado para a tela de login.

---

## Atores do Sistema

### 1. Usuário Não Cadastrado

**Tipo:** Ator Principal

**Papel:**

É o usuário que ainda não possui uma conta na plataforma e deseja realizar seu cadastro.

**Responsabilidades:**

- Acessar a opção de criação de conta.
- Preencher os dados solicitados.
- Fornecer informações válidas.
- Confirmar o cadastro.
- Corrigir informações quando houver erros apontados pelo sistema.

### Permissões CRUD

| Operação | Permissão | Descrição |
|---|---|---|
| **CREATE** | ✅ | Criar sua própria conta |
| **READ** | ❌ | Não possui acesso aos dados de outros usuários durante o cadastro |
| **UPDATE** | ❌ | Não pode alterar contas de outros usuários |
| **DELETE** | ❌ | Não pode excluir contas de outros usuários |

---

### 2. Administrador

**Tipo:** Ator Secundário

**Papel:**

Responsável pela administração e supervisão dos usuários da plataforma.

**Responsabilidades:**

- Administrar os registros de usuários.
- Consultar informações dos usuários.
- Atualizar informações quando permitido.
- Executar ações administrativas relacionadas às contas.

### Permissões CRUD

| Operação | Permissão | Descrição |
|---|---|---|
| **CREATE** | ✅ | Criar registros de usuários, caso essa funcionalidade seja disponibilizada ao administrador |
| **READ** | ✅ | Consultar informações dos usuários |
| **UPDATE** | ✅ | Atualizar informações das contas |
| **DELETE** | ✅ | Excluir ou desativar contas conforme as permissões administrativas |

---

### 3. Sistema

**Tipo:** Ator Automático

**Papel:**

Responsável por executar automaticamente as operações necessárias para validar e processar o cadastro.

**Responsabilidades:**

- Apresentar a tela de cadastro.
- Validar os campos preenchidos.
- Verificar campos obrigatórios.
- Validar formatos das informações.
- Verificar se o e-mail já está cadastrado.
- Aplicar as regras de negócio.
- Processar os dados recebidos.
- Proteger a senha utilizando hash seguro.
- Armazenar os dados no banco de dados.
- Informar o resultado do cadastro ao usuário.
- Apresentar mensagens de erro quando necessário.
- Redirecionar o usuário para a tela de login após o cadastro.

### Permissões CRUD

| Operação | Permissão | Descrição |
|---|---|---|
| **CREATE** | ✅ | Criar o registro do novo usuário |
| **READ** | ✅ | Consultar informações necessárias para validação |
| **UPDATE** | ✅ | Atualizar informações durante o processamento, quando necessário |
| **DELETE** | ✅ | Impedir ou remover registros inválidos conforme as regras do sistema |

---

# 3. Especificação de Casos de Uso

## UC-002 — Realizar Cadastro de Usuário

### Objetivo

Permitir que um usuário não cadastrado crie uma nova conta na plataforma, desde que todas as informações necessárias sejam preenchidas corretamente e as regras de negócio sejam atendidas.

### Atores

- **Usuário Não Cadastrado** — inicia e realiza o cadastro.
- **Administrador** — possui responsabilidades administrativas relacionadas aos usuários.
- **Sistema** — realiza automaticamente as validações e o processamento do cadastro.

---

## Pré-condições

Para que o caso de uso seja iniciado:

1. O usuário deve estar na tela de login ou possuir acesso à opção de criação de conta.
2. O sistema deve estar disponível.
3. O banco de dados deve estar disponível.
4. Não deve existir outra conta cadastrada com o mesmo e-mail.
5. Os serviços necessários para processamento do cadastro devem estar disponíveis.

---

## Pós-condições de Sucesso

Após a conclusão do cadastro:

1. Uma nova conta de usuário é criada.
2. Os dados fornecidos são validados.
3. A senha é armazenada de forma segura.
4. O registro do usuário é criado no banco de dados.
5. O sistema apresenta uma confirmação visual.
6. O usuário é direcionado para a tela de login.
7. O usuário poderá utilizar suas credenciais para acessar a plataforma.

---

## Pós-condições de Falha

Caso o cadastro não seja concluído:

1. A conta não deve ser criada.
2. Dados inválidos não devem ser armazenados.
3. O sistema deve apresentar uma mensagem de erro.
4. O campo que apresentar erro deve ser identificado visualmente quando aplicável.
5. O usuário permanece na tela de cadastro para realizar as correções.
6. Em caso de falha no servidor ou banco de dados, o sistema deve informar que o cadastro não pôde ser concluído.

---

# Fluxo Principal

| Nº | Ator | Ação |
|---|---|---|
| **1** | Usuário Não Cadastrado | Acessa a opção **"Criar uma conta"** na tela de login. |
| **2** | Sistema | Direciona o usuário para a tela de cadastro. |
| **3** | Sistema | Exibe o formulário com os campos necessários para o cadastro. |
| **4** | Usuário Não Cadastrado | Preenche os campos solicitados. |
| **5** | Sistema | Realiza a validação inicial dos campos preenchidos. |
| **6** | Sistema | Verifica se os campos obrigatórios foram preenchidos. |
| **7** | Sistema | Verifica se os dados possuem formatos válidos. |
| **8** | Usuário Não Cadastrado | Seleciona a opção **"Cadastrar"**. |
| **9** | Sistema | Realiza novamente as validações no servidor. |
| **10** | Sistema | Verifica se o e-mail informado já está cadastrado. |
| **11** | Sistema | Verifica as regras de negócio relacionadas ao cadastro. |
| **12** | Sistema | Processa os dados informados. |
| **13** | Sistema | Aplica hash seguro à senha antes do armazenamento. |
| **14** | Sistema | Armazena os dados do usuário no banco de dados. |
| **15** | Sistema | Confirma que o cadastro foi realizado com sucesso. |
| **16** | Sistema | Exibe a mensagem **"Cadastro realizado com sucesso!"**. |
| **17** | Sistema | Redireciona o usuário para a tela de login. |
| **18** | Usuário Não Cadastrado | Utiliza as credenciais cadastradas para realizar o login. |

---

# Fluxos Alternativos

## A1 — Campos Obrigatórios Não Preenchidos

**Quando ocorre:**  
O usuário tenta realizar o cadastro sem preencher um ou mais campos obrigatórios.

**Fluxo:**

1. O usuário seleciona **"Cadastrar"**.
2. O sistema identifica os campos obrigatórios não preenchidos.
3. O sistema informa visualmente quais campos precisam ser preenchidos.
4. O cadastro não é realizado.
5. O usuário preenche os campos necessários.
6. O fluxo retorna para a validação do cadastro.

---

## A2 — E-mail Já Cadastrado

**Quando ocorre:**  
O usuário informa um e-mail que já possui uma conta cadastrada.

**Fluxo:**

1. O usuário envia o formulário.
2. O sistema consulta o banco de dados.
3. O sistema identifica que o e-mail já está cadastrado.
4. O sistema apresenta uma mensagem informando que o e-mail já está em uso.
5. O cadastro não é realizado.
6. O usuário deve informar outro e-mail ou utilizar a opção de login.

---

## A3 — Dados Inválidos

**Quando ocorre:**  
Um ou mais dados fornecidos não atendem aos formatos ou critérios definidos pelo sistema.

**Fluxo:**

1. O usuário seleciona **"Cadastrar"**.
2. O sistema realiza a validação.
3. O sistema identifica um ou mais dados inválidos.
4. O sistema apresenta uma mensagem de erro.
5. O campo correspondente é identificado visualmente.
6. O cadastro não é realizado.
7. O usuário corrige os dados.
8. O fluxo retorna para a validação.

---

## A4 — Confirmação de Senha Diferente

**Quando ocorre:**  
A senha informada e a confirmação da senha não são iguais.

**Fluxo:**

1. O usuário preenche a senha.
2. O usuário preenche a confirmação da senha.
3. O sistema compara os dois valores.
4. O sistema identifica a divergência.
5. O sistema apresenta uma mensagem de erro.
6. O cadastro não é realizado.
7. O usuário corrige a confirmação da senha.

---

## A5 — Falha de Conexão ou Servidor

**Quando ocorre:**  
O sistema não consegue acessar o servidor ou o banco de dados durante o processo de cadastro.

**Fluxo:**

1. O usuário envia o formulário.
2. O sistema tenta processar o cadastro.
3. Ocorre uma falha de conexão ou processamento.
4. O sistema não cria a conta.
5. O sistema apresenta uma mensagem informando que não foi possível concluir o cadastro.
6. O usuário permanece na tela de cadastro.
7. O usuário poderá tentar novamente posteriormente.

---

# Regras de Negócio

## RN-001 — E-mail Único

O sistema não deve permitir o cadastro de duas contas utilizando o mesmo e-mail.

---

## RN-002 — Campos Obrigatórios

Todos os campos definidos como obrigatórios devem ser preenchidos antes da conclusão do cadastro.

---

## RN-003 — E-mail Válido

O sistema deve verificar se o e-mail informado possui um formato válido antes de permitir a criação da conta.

---

## RN-004 — Senha Obrigatória

O usuário deve informar uma senha para concluir o cadastro.

---

## RN-005 — Confirmação de Senha

Quando houver um campo de confirmação de senha, o sistema deve verificar se a senha e sua confirmação são iguais.

---

## RN-006 — Segurança da Senha

A senha do usuário não deve ser armazenada em texto puro. O sistema deve utilizar um mecanismo de hash seguro para seu armazenamento.

---

## RN-007 — Validação dos Dados

Os dados fornecidos pelo usuário devem ser validados antes da criação da conta.

---

## RN-008 — Cadastro Somente Após Validação

A conta somente deve ser criada quando todas as validações obrigatórias forem concluídas com sucesso.

---

## RN-009 — Feedback do Cadastro

O sistema deve informar visualmente ao usuário se o cadastro foi realizado com sucesso ou se ocorreu algum erro.

---

## RN-010 — Acessibilidade

As informações essenciais do processo de cadastro não devem depender exclusivamente de áudio para serem compreendidas.

---

## RN-011 — Acesso à Plataforma

Após a conclusão bem-sucedida do cadastro, o usuário deve poder utilizar as credenciais cadastradas para acessar a plataforma.

---

## RN-012 — Integridade dos Dados

O sistema deve impedir que informações inválidas sejam armazenadas como dados válidos de uma conta.

---

# Requisitos Não Funcionais

## RNF-001 — Segurança da Senha

As senhas devem ser armazenadas utilizando mecanismos de hash seguro, não sendo permitido seu armazenamento em texto puro.

**Categoria:** Segurança

---

## RNF-002 — Comunicação Segura

A comunicação entre o cliente e o servidor deve utilizar HTTPS para proteger os dados transmitidos.

**Categoria:** Segurança

---

## RNF-003 — Desempenho

Em condições normais de funcionamento, o sistema deve apresentar resposta ao processo de cadastro em até aproximadamente 2 segundos, desconsiderando problemas externos de rede ou infraestrutura.

**Categoria:** Desempenho

---

## RNF-004 — Mensagens Visuais

As mensagens de sucesso, erro e validação devem ser apresentadas de forma visual e clara.

**Categoria:** Acessibilidade

---

## RNF-005 — Suporte à Libras

Quando aplicável, as orientações importantes do processo devem possuir suporte visual compatível com Libras.

**Categoria:** Acessibilidade

---

## RNF-006 — Navegação por Teclado

Os elementos da tela de cadastro devem permitir navegação e interação por teclado.

**Categoria:** Acessibilidade

---

## RNF-007 — Identificação dos Campos

Os campos do formulário devem possuir identificação clara e persistente para facilitar seu preenchimento.

**Categoria:** Usabilidade

---

## RNF-008 — Feedback Visual

O sistema deve apresentar feedback visual durante ações relevantes, como:

- Validação dos campos;
- Erros de preenchimento;
- Cadastro realizado;
- Processamento da solicitação;
- Falhas de comunicação.

**Categoria:** Usabilidade

---

## RNF-009 — Responsividade

A tela de cadastro deve adaptar-se adequadamente a diferentes tamanhos de tela, incluindo:

- Computadores;
- Notebooks;
- Tablets;
- Smartphones.

**Categoria:** Responsividade

---

## RNF-010 — Contraste

Os textos, campos, botões e demais elementos importantes da interface devem possuir contraste visual adequado para facilitar sua identificação e leitura.

**Categoria:** Acessibilidade

---

# Critérios para Nota Máxima

Para que o requisito apresente um nível completo de especificação, devem ser considerados os seguintes pontos:

- [x] Identificação do requisito.
- [x] Descrição clara da funcionalidade.
- [x] Objetivo definido.
- [x] Benefícios para o negócio.
- [x] Contexto da funcionalidade.
- [x] Identificação dos atores.
- [x] Responsabilidades dos atores.
- [x] Permissões CRUD.
- [x] Caso de uso definido.
- [x] Pré-condições.
- [x] Pós-condições de sucesso.
- [x] Pós-condições de falha.
- [x] Fluxo principal com mais de 8 etapas.
- [x] Fluxos alternativos.
- [x] 5 fluxos alternativos especificados.
- [x] Regras de negócio.
- [x] Requisitos não funcionais.
- [x] Requisitos de segurança.
- [x] Requisitos de acessibilidade.
- [x] Requisitos de usabilidade.
- [x] Requisitos de responsividade.
- [x] Tratamento de erros.
- [x] Integração com o processo de login.
- [x] Armazenamento seguro das credenciais.
- [x] Validação dos dados antes da criação da conta.
