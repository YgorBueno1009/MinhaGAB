# Revisão da Declaração de Trabalho — Projeto MinhaGAB

## Finalidade

Revisar a Declaração de Trabalho em conjunto com o Gerente de Projeto e o Líder Técnico, garantindo que ela esteja completa, alinhada às necessidades do cliente, tecnicamente viável e estrategicamente adequada.

---

## Passo 1: Necessidade do Negócio

O projeto **MinhaGAB** surge da necessidade de digitalizar e automatizar o processo de emissão, consulta e validação dos Guias de Análise Biomédica (GAB), que atualmente é feito de forma manual (via e-mails, planilhas e documentos físicos).

O objetivo é melhorar a **eficiência**, reduzir **erros**, agilizar **processos** entre clínicas, pacientes e setor financeiro, além de garantir maior **rastreabilidade** e **segurança dos dados**.

Está fundamentado em uma necessidade clara de **redução de custos operacionais**, **aumento da produtividade** e **melhor experiência** para os usuários.

---

## Passo 2: Alinhamento com o Plano Estratégico

O MinhaGAB está diretamente alinhado ao plano estratégico da organização, que visa:

* **Digitalização dos processos internos**;
* **Otimização da comunicação** com clínicas e pacientes;
* **Melhoria dos controles financeiros e operacionais**;
* **Redução da dependência de processos manuais** e suscetíveis a falhas;
* **Aumento da escalabilidade do negócio**.

---

## Passo 3: Descrição do Escopo do Produto

### Descrição Geral:

O MinhaGAB é um **sistema web**, desenvolvido com **Laravel** (backend) e **Blade ou Vue.js** (frontend), que gerencia todo o ciclo de vida dos Guias de Análise Biomédica (GAB).

### Lista de Entregáveis:

* Sistema web funcional (Frontend + Backend);
* Banco de dados estruturado e implementado;
* API para integrações futuras (se aplicável);
* Documentação técnica e manual do usuário;
* Relatórios operacionais e gerenciais;
* Scripts de instalação e configuração;
* Suporte à implantação inicial.

### Funcionalidades principais:

* Cadastro de clínicas, pacientes e laboratórios;
* Emissão de GAB com numeração automática;
* Status da GAB (emitido, aguardando autorização, autorizado, negado, concluído);
* Registro de justificativas para GAB negadas;
* Detalhamento do atendimento (parcial ou completo);
* Controle de solicitações e pendências;
* Dashboards operacionais;
* Login seguro com controle de permissões;
* Histórico completo de alterações.

### Critérios de Sucesso:

* Redução mínima de **70% no tempo** de emissão e validação das GABs.
* **100% das GABs rastreáveis**, auditáveis e com histórico acessível.
* Satisfação dos usuários-chave (clínicas, pacientes e setor financeiro) **superior a 85%** na fase de implantação.

### Critérios de Fracasso:

* Sistema não operante ou com falhas críticas nas funcionalidades principais.
* Interfaces não intuitivas ou processos que permaneçam sendo realizados externamente (fora do sistema).

---

## Passo 4: Calendário e Prazos

### Cronograma Macro:

* **Fase 1 — Planejamento**: 15 dias (Elaboração da DoW, requisitos e plano de projeto).
* **Fase 2 — Desenvolvimento**: 8 semanas.
    * MVP até a 5ª semana;
    * Testes e ajustes entre a 6ª e 8ª semana.
* **Fase 3 — Testes e Validação**: 2 semanas.
* **Fase 4 — Implantação**: 1 semana.

### Marcos Principais:

* Apresentação do MVP — Semana 5;
* Testes Internos — Semana 6;
* Validação com Cliente — Semana 7;
* Entrega Final — Semana 10.

---

## Passo 5: Estimativas de Custo

### Base Salarial por Hora:

| Função             | Valor/h | Horas | Custo Total |
| :----------------- | :------ | :---- | :---------- |
| Gerente de Projeto | R$ 100  | 120   | R$ 12.000   |
| Líder Técnico      | R$ 90   | 150   | R$ 13.500   |
| Desenvolvedor (x2) | R$ 80   | 330   | R$ 26.400   |
| **Total** | —       | **600** | **R$ 51.900** |

**Observação**: O orçamento está dentro da capacidade orçamentária prevista pela organização e cobre todo o ciclo do projeto, incluindo desenvolvimento, testes e implantação, através de uma simulação de valores.

---

## Conclusão da Revisão

A declaração de trabalho do MinhaGAB está adequada, cobre todos os pontos críticos para atender à necessidade do cliente, está alinhada com os objetivos estratégicos da organização e apresenta custos e prazos viáveis.

# PM.1.3 Definir as Instruções de Entrega

## Finalidade

Definir, em conjunto com o cliente, como serão realizadas as entregas dos produtos e entregáveis especificados na Declaração de Trabalho do MinhaGAB. O objetivo é garantir que a entrega ocorra de forma eficiente, segura e adequada, atendendo às necessidades do cliente e dos usuários finais.

---

## Passo 1: Possuir uma Implementação Completa

O produto MinhaGAB será entregue contendo:

* **Código-fonte** do sistema (Backend Laravel + Frontend Blade).
* **Banco de dados** configurado, scripts de criação e migração.
* **Documentação técnica** e **manual de usuário**.
* **Relatórios finais** do projeto e do sistema.
* **Scripts de instalação** (docker, composer, artisan).
* **Dados de configuração** para ambiente de homologação e produção.
* **Scripts ou ferramentas para migração dos dados** (se houver necessidade de migração de sistemas anteriores).

---

## Passo 2: Empacotar o Software

O pacote de entrega incluirá:

* **Arquivo ZIP ou RAR** com o código-fonte.
* **Imagem Docker** (opcional) ou instruções para deploy manual.
* **Documentação completa** (em PDF e versão online).
* **Scripts SQL** para banco de dados.
* **Manual de instalação e configuração**.
* **Licenciamento, termos de uso** (se aplicável).

---

## Passo 3: Distribuição do Software

A distribuição será realizada das seguintes formas:

* Envio do pacote final por **link seguro** (Google Drive, OneDrive ou similar).
* Acesso ao **repositório GitHub privado** durante o desenvolvimento e após a entrega.
* **Implantação direta no ambiente do cliente** (se for contratado).

Além disso, será acordado com o cliente:

* **Controle de acesso** via autenticação no repositório.
* Definição dos **responsáveis pela implantação** (time MinhaGAB ou cliente).
* Entrega de **chaves de licenciamento**, se necessário (para terceiros ou APIs).

---

## Passo 4: Instalação do Software

A instalação poderá ser feita de duas formas:

* **Local**: Setup no servidor interno do cliente.
* **Nuvem**: Deploy em plataforma cloud (AWS, Azure, Google Cloud ou outro).

O time fornecerá:

* **Guia de instalação passo a passo**.
* **Scripts automatizados** (Docker, Bash ou Batch).
* **Suporte remoto** para o processo de instalação inicial.

---

## Passo 5: Migração

Caso o cliente utilize algum sistema anterior (planilhas, emails ou outro sistema manual), será realizada:

* **Análise dos dados atuais**.
* **Desenvolvimento de scripts de migração** (se necessário).
* **Teste e validação dos dados migrados** para dentro do MinhaGAB.
* **Validação junto ao cliente** antes da ativação em produção.

---

## Passo 6: Fornecer Auxílio e Assistência ao Usuário

Será disponibilizado suporte ao cliente, composto por:

* **Manual do Usuário** (PDF e online).
* **Vídeo-aula de treinamento** (opcional).
* **Treinamento remoto** para os principais usuários e administradores.
* **Suporte técnico por e-mail e WhatsApp** no período pós-entrega (a ser acordado).
* **Plano de manutenção e suporte opcional**, mediante contratação.

---

## Conclusão

Estas instruções garantem que a entrega do MinhaGAB seja clara, organizada e atenda tanto às expectativas operacionais quanto técnicas do cliente.

# PM.1.3 Identificar Tarefas

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Data de Criação:** 03/06/2025  
- **Versão:** 1.0  
- **Responsável:** Gerente de Projeto  

---

## Descrição da Tarefa

Este documento tem como objetivo identificar e descrever as tarefas necessárias para a realização do projeto **MinhaGAB**, a partir da decomposição do escopo definido na **Declaração de Trabalho** e no **Backlog**.

---

## Tarefas Identificadas

| ID   | Tarefa                                                                 | Fase                    | Dependências              |
|------|------------------------------------------------------------------------|-------------------------|---------------------------|
| T1   | Redigir Declaração de Visão do Projeto                                | Iniciação               | Nenhuma                   |
| T2   | Realizar análise de stakeholders                                       | Iniciação               | Nenhuma                   |
| T3   | Levantar requisitos funcionais e não funcionais                        | Requisitos              | T1, T2                    |
| T4   | Registrar resultados da reunião de coleta (25/10/2024)                | Requisitos              | T3                        |
| T5   | Elaborar documentação de requisitos completa                           | Requisitos              | T3, T4                    |
| T6   | Desenvolver Plano de Projeto (cronograma, recursos, orçamento)        | Planejamento            | T5                        |
| T7   | Criar Plano de Gerenciamento de Riscos e Comunicação                   | Planejamento            | T6                        |
| T8   | Desenvolver Plano de Testes                                            | Planejamento/Testes     | T5                        |
| T9   | Elaborar arquitetura e diagramas UML (casos de uso, classes, sequência) | Design                | T5                        |
| T10  | Desenvolver especificação de design detalhada                          | Design                  | T9                        |
| T11  | Implementar cadastro/login de usuários                                 | Desenvolvimento         | T10                       |
| T12  | Desenvolver painel do financeiro (upload, validação, etc.)            | Desenvolvimento         | T11                       |
| T13  | Desenvolver painel da clínica                                          | Desenvolvimento         | T11                       |
| T14  | Desenvolver painel do cliente                                          | Desenvolvimento         | T11                       |
| T15  | Criar e testar APIs de comunicação                                     | Desenvolvimento         | T12, T13, T14             |
| T16  | Realizar testes (funcionais, de regressão, validação)                  | Testes                  | T15, T8                   |
| T17  | Corrigir falhas identificadas nos testes                               | Testes                  | T16                       |
| T18  | Criar Manual do Usuário e Guia de Instalação                           | Implantação             | T16                       |
| T19  | Planejar e executar implantação em ambiente de produção                | Implantação             | T18                       |
| T20  | Elaborar Relatório Final e Documentar Lições Aprendidas               | Encerramento            | T19                       |

---

## Critérios de Aceitação

- Todas as tarefas estão alinhadas ao escopo e cronograma do projeto  
- Nenhuma dependência lógica foi violada  
- A rastreabilidade com os requisitos está garantida  

---

## Referências

- Backlog atualizado (versão de 03/06/2025)  
- Declaração de Trabalho (versão inicial)  
- Relatório da reunião de coleta de requisitos (25/10/2024)  


# PM.1.4 Estimar Execução da Tarefa

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Data de Criação:** 03/06/2025  
- **Versão:** 1.0  
- **Responsável:** Gerente de Projeto: Ygor Bueno  

---

## Estimativas de Execução

| ID   | Tarefa                                                   | Esforço Estimado (h) | Responsável                     |
|------|----------------------------------------------------------|----------------------|---------------------------------|
| T1   | Redigir Declaração de Visão do Projeto                   | 8                    | Gerente de Projeto              |
| T2   | Realizar análise de stakeholders                         | 10                   | GP + Analista de Requisitos     |
| T3   | Levantar requisitos funcionais e não funcionais          | 20                   | Analista de Requisitos          |
| T4   | Registrar resultados da reunião de coleta                | 4                    | Analista de Requisitos          |
| T5   | Elaborar documentação de requisitos completa             | 12                   | Analista de Requisitos          |
| T6   | Desenvolver Plano de Projeto                             | 10                   | Gerente de Projeto              |
| T7   | Criar Plano de Gerenciamento de Riscos e Comunicação     | 8                    | GP + QA                         |
| T8   | Desenvolver Plano de Testes                              | 10                   | QA                              |
| T9   | Elaborar arquitetura e diagramas UML                     | 16                   | Arquiteto de Software           |
| T10  | Desenvolver especificação de design detalhada            | 10                   | Arquiteto de Software           |
| T11  | Implementar cadastro/login de usuários                   | 12                   | Dev Backend + Frontend          |
| T12  | Desenvolver painel do financeiro                         | 20                   | Dev Backend + Frontend          |
| T13  | Desenvolver painel da clínica                            | 16                   | Dev Backend + Frontend          |
| T14  | Desenvolver painel do cliente                            | 16                   | Dev Backend + Frontend          |
| T15  | Criar e testar APIs de comunicação                       | 14                   | Dev Backend                     |
| T16  | Realizar testes completos                                | 12                   | QA                              |
| T17  | Corrigir falhas dos testes                               | 10                   | Dev Backend                     |
| T18  | Criar Manual do Usuário e Guia de Instalação             | 8                    | QA + Redator Técnico            |
| T19  | Implantar sistema em produção                            | 8                    | DevOps                          |
| T20  | Elaborar Relatório Final e Documentar Lições            | 6                    | Gerente de Projeto              |

---

## Método de Estimativa Utilizado

- Técnica **Delphi** com base em histórico de projetos similares  
- Consideração de dias úteis e carga horária de **6h por membro/dia útil**  
- **Validação com equipe técnica envolvida**  

---

## Critérios de Aceitação

- Esforços realistas e compatíveis com o cronograma aprovado  
- Estimativas compatíveis com a experiência da equipe  
- Estimativas validadas com stakeholders e membros técnicos  

# PM.1.5 Identificar e Documentar Recursos

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Data:** 03/06/2025  
- **Responsável:** Gerente de Projeto  

---

## Objetivo

Este documento tem como objetivo identificar e registrar todos os recursos necessários para a execução do projeto **MinhaGAB**, incluindo recursos humanos, materiais, tecnológicos e informacionais. A definição e planejamento adequados desses recursos visam garantir o cumprimento do escopo, prazo e qualidade do produto final.

---

## 1. Recursos Humanos

| Função                 | Nome / Perfil                   | Responsabilidades Principais                                         | Disponibilidade |
|------------------------|----------------------------------|----------------------------------------------------------------------|-----------------|
| Gerente de Projeto     | Ygor Bueno                      | Planejamento, acompanhamento, comunicação com stakeholders           | 100%            |
| Analista de Requisitos | Ygor Bueno                      | Levantamento e documentação dos requisitos                           | 50%             |
| Desenvolvedor Backend  | Caio Sousa e Isaac Aires        | Implementação da lógica de negócio e APIs                            | 75%             |
| Desenvolvedor Frontend | Samuel Milhomens                | Desenvolvimento das interfaces dos três perfis                       | 75%             |
| Arquiteto de Software  | Samuel Milhomens                | Modelagem da arquitetura, diagramas e estrutura do sistema           | 25%             |
| QA (Testes e Qualidade)| Caio Sousa e Isaac Aires        | Elaboração de plano de testes, execução e validação final            | 50%             |
| Redator Técnico        | Samuel Milhomens e Ygor Bueno   | Elaboração de manuais e documentação de entrega                      | 25%             |
| DevOps (implantação)   | Samuel Milhomens                | Implantação e manutenção em produção                                 | 25%             |

---

## 2. Recursos Tecnológicos

| Tipo                        | Descrição                                                                 |
|-----------------------------|---------------------------------------------------------------------------|
| Computadores                | Computadores pessoais dos integrantes com ambiente de desenvolvimento     |
| IDEs                        | IntelliJ IDEA (Java), Visual Studio Code                                  |
| Sistema de Controle de Versão | Git + GitHub (repositório privado para o projeto MinhaGAB)               |
| Ferramentas de Modelagem    | AstahUML e MySQL Workbench para modelagem de requisitos e arquitetura     |
| Banco de Dados              | MySQL                                                                     |
| Frameworks e Bibliotecas    | Laravel (PHP), Blade (Frontend)                                           |
| Plataforma de Hospedagem    | HospedaGratis                                                             |
| Ferramentas de Comunicação  | Discord e Trello (acompanhamento de tarefas), Google Meet (reuniões)     |

---

## 3. Recursos Informacionais

| Documento/Fonte                        | Finalidade                                                              |
|----------------------------------------|-------------------------------------------------------------------------|
| Declaração de Trabalho                 | Define o escopo, entregas e objetivos do projeto                        |
| Documento de Requisitos Funcionais e NF| Direciona o desenvolvimento e os testes                                |
| Relatório da Reunião de Coleta (25/10/2024) | Contextualiza necessidades específicas do cliente                   |
| Backlog atualizado                     | Controla a evolução e prioridades das funcionalidades                   |
| Padrões da ISO/IEC 29110               | Fornece a estrutura metodológica para gestão do projeto                 |
| Modelos UML                            | Direcionam o desenvolvimento da arquitetura e implementação             |

---

## 4. Recursos Materiais

| Item                        | Finalidade                                                       |
|-----------------------------|------------------------------------------------------------------|
| Acesso à internet           | Comunicação, versionamento e pesquisa                           |
| Cadeiras e mesas adequadas | Conforto durante o desenvolvimento                              |
| Cadernos ou aplicativos de notas | Apoio ao registro de ideias e acompanhamento              |
| Equipamentos para reuniões  | Microfones, fones de ouvido, câmeras                            |

---

## Critérios de Aceitação

- Todos os recursos humanos estão alocados com estimativas de disponibilidade adequadas.  
- Os recursos tecnológicos e informacionais são compatíveis com os requisitos do projeto.  
- Há evidência de que os recursos serão suficientes para garantir a execução dentro dos prazos definidos.  

---

## Referências

- Backlog atualizado (2025-06-03)  
- Reunião de Coleta de Requisitos – 25/10/2024  
- Documentação de Requisitos Funcionais e Não Funcionais  
- Declaração de Trabalho – Versão Inicial  
- Norma ISO/IEC 29110  

# PM.1.6 Estabelecer a Equipe de Trabalho

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Data:** 03/06/2025  
- **Responsável:** Gerente de Projeto  

---

## Objetivo

Este documento tem como objetivo formalizar a composição da equipe de trabalho responsável pela execução do projeto **MinhaGAB**, atribuindo papéis, responsabilidades e identificando a disponibilidade de cada integrante.

---

## 1. Estrutura da Equipe de Projeto

A equipe de desenvolvimento do MinhaGAB é composta por alunos de Engenharia de Software, atuando de forma colaborativa sob orientação de um gerente de projeto. A seguir estão definidos os papéis e respectivas responsabilidades:

| Membro                        | Papel                            | Responsabilidades Principais                                                                      | Disponibilidade |
|------------------------------|----------------------------------|---------------------------------------------------------------------------------------------------|-----------------|
| Ygor Bueno                   | Gerente de Projeto (PM)          | Planejamento, acompanhamento, controle de qualidade, comunicação com stakeholders                 | 100%            |
| Ygor Bueno                   | Analista de Requisitos           | Levantamento, documentação e validação dos requisitos com as partes interessadas                  | 50%             |
| Caio Sousa e Isaac Aires     | Desenvolvedor Backend            | Implementação da lógica de negócio, controle de versões e integração com o banco de dados         | 75%             |
| Samuel Milhomens             | Desenvolvedor Frontend           | Implementação da interface para os três perfis do sistema (clínica, financeiro, cliente)          | 75%             |
| Caio Sousa e Isaac Aires     | QA/Testador                      | Planejamento de testes, execução de casos de teste e registro de falhas                           | 50%             |
| Samuel Milhomens e Ygor Bueno| Redator Técnico / Documentação   | Elaboração da documentação de requisitos, relatórios e manuais de uso                             | 25%             |
| Samuel Milhomens             | DevOps/Implantação               | Suporte à implantação do sistema, CI/CD e ambiente de homologação                                 | 25%             |

---

## 2. Justificativa das Atribuições

As atribuições foram distribuídas de acordo com o conhecimento prévio, interesse e disponibilidade de cada membro da equipe, considerando:

- Experiência anterior em projetos similares  
- Habilidades técnicas e interpessoais  
- Afinidade com determinadas áreas do ciclo de vida do software  
- Distribuição equilibrada da carga de trabalho  

---

## 3. Comprometimento da Equipe

Todos os membros da equipe foram informados de suas funções, responsabilidades e da importância da colaboração e comprometimento com os prazos e entregas.  

**Reuniões regulares** serão realizadas para:  
- Acompanhamento do progresso  
- Realocação de tarefas  
- Apoio mútuo  
- Resolução de impedimentos  

---

## 4. Plano de Comunicação Interna

- **Reuniões semanais:** Checkpoint de progresso com gerente e desenvolvedores  
- **Reuniões de sprint:** Início e fim de ciclos de desenvolvimento  

**Ferramentas utilizadas:**  
- Trello (planejamento de tarefas)  
- Discord (comunicação instantânea)  
- Google Drive (compartilhamento de documentos)  
- Google Meet (reuniões formais)  

---

## 5. Riscos Associados à Equipe

| Risco                          | Impacto                | Plano de Mitigação                          |
|-------------------------------|------------------------|---------------------------------------------|
| Falta de disponibilidade       | Atraso na entrega      | Redistribuição temporária de tarefas        |
| Desalinhamento de expectativas | Baixa produtividade    | Reuniões de alinhamento frequentes          |
| Desmotivação/abandono          | Redução da equipe      | Backup de tarefas e realocação rápida       |

---

## Critérios de Aceitação

- Todos os papéis foram atribuídos com base nas capacidades e disponibilidade dos membros  
- A equipe está alinhada com os objetivos do projeto e ciente das responsabilidades  
- Há meios de comunicação e acompanhamento claramente definidos  

---

## Referências

- Declaração de Trabalho – MinhaGAB  
- Documento de Requisitos Funcionais e Não Funcionais  
- Relatório da Reunião de Coleta de Requisitos – 25/10/2024  
- Backlog Atualizado  
- ISO/IEC 29110 – PM.1.6 Estabelecer a Equipe de Trabalho  

# PM.1.7 – Estimar Início e Término das Tarefas

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Data:** 03/06/2025  
- **Responsável:** Gerente de Projeto: Ygor Bueno  

---

## Objetivo

Este documento tem como finalidade estimar as datas de início e término das tarefas do projeto **MinhaGAB**, com base nas dependências entre atividades, disponibilidade da equipe e prioridades definidas no planejamento. Essas estimativas servirão como base para o cronograma detalhado do projeto.

---

## 1. Premissas para Estimativa

As estimativas foram baseadas em:

- Disponibilidade semanal da equipe (em horas dedicadas por membro).  
- Complexidade e escopo de cada tarefa definida no backlog.  
- Dependências lógicas entre tarefas (ex.: tarefas que só podem iniciar após outras estarem concluídas).  
- Ciclos de entrega quinzenais (sprints) a partir de **08/05/2025** até **12/06/2025**.  

---

## 2. Estimativas por Tarefa

| ID  | Tarefa                                                                 | Início Estimado | Término Estimado | Duração (dias) | Observações                                  |
|-----|------------------------------------------------------------------------|------------------|-------------------|----------------|----------------------------------------------|
| T01 | Implementar campo de justificativa para consultas negadas              | 08/05/2025       | 10/05/2025        | 3              | Independente                                 |
| T02 | Adicionar campo de detalhamento da situação do atendimento             | 10/05/2025       | 13/05/2025        | 4              | Depende parcialmente da T01                  |
| T03 | Ajustar fluxo para que GAB vá direto para hospital ao selecioná-lo     | 13/05/2025       | 17/05/2025        | 5              | Requer análise de lógica e testes            |
| T04 | Implementar numeração automática das emissões                          | 17/05/2025       | 20/05/2025        | 3              | Independente                                 |
| T05 | Criar tela de registro de solicitações                                 | 20/05/2025       | 25/05/2025        | 6              | Depende de T02                               |
| T06 | Implementar funcionalidade “Aguardando autorização”                    | 25/05/2025       | 30/05/2025        | 6              | Depende de T03                               |
| T07 | Testes de integração e validação geral das funcionalidades             | 30/05/2025       | 06/06/2025        | 7              | Após todas as tarefas implementadas          |
| T08 | Ajustes finais e homologação                                           | 06/06/2025       | 10/06/2025        | 5              | Fase de ajustes com base em feedback         |
| T09 | Entrega final e documentação                                           | 10/06/2025       | 12/06/2025        | 3              | Final do ciclo de desenvolvimento            |

---

## 3. Diagrama de Gantt (Resumo Visual)

> *O Diagrama de Gantt está disponível no cronograma visual da ferramenta utilizada no projeto (ex: Trello, GanttProject ou Google Sheets).*

---

## 4. Considerações

- As datas são estimativas iniciais, sujeitas a ajustes conforme os ciclos de reunião e revisões de progresso.  
- O cronograma será monitorado semanalmente.  
- Cada tarefa foi planejada considerando sobreposição mínima para evitar gargalos.  
- A metodologia ágil será usada para adaptação contínua.  

---

## Critérios de Aceitação

- Todas as tarefas do backlog possuem data estimada de início e término.  
- As dependências entre tarefas foram devidamente consideradas.  
- As estimativas foram feitas com base na capacidade da equipe e escopo do projeto.  

---

## Referências

- Backlog de Funcionalidades – MinhaGAB  
- Declaração de Trabalho  
- Documento PM.1.3 – Identificação das Tarefas  
- Documento PM.1.4 – Estimativas de Execução das Tarefas  
- ISO/IEC 29110 – PM.1.7 Estimar Início e Término das Tarefas  

# PM 1.8 — Estimativa de Esforço e Custo do Projeto

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Data:** 03/06/2025  
- **Gerente do Projeto (Executor Primário):** Ygor Bueno  
- **Executores Adicionais:**  
  - Líder Técnico: Samuel Milhomens  
  - Desenvolvedores: Caio Sousa e Isaac Aires  

---

## Finalidade

O objetivo deste documento é calcular e documentar o **esforço e o custo estimado** para completar o projeto **MinhaGAB**, garantindo que os recursos financeiros, humanos e temporais estejam devidamente previstos para atender aos requisitos e prazos estabelecidos (**16/08/2024 até 19/11/2024**).

---

## Entradas Obrigatórias

- Cronograma das Tarefas do Projeto (baseado nas 10 sprints já planejadas)

---

## Saída

- Estimativa de Esforço e Custo do Projeto

---

## Etapas Realizadas

### Passo 1: Estimativa Aproximada no Início do Projeto

Com base em projetos anteriores semelhantes e em benchmarks de produtividade:

- **Duração estimada:** 14 semanas (10 Sprints)  
- **Equipe estimada:**  
  - 1 Gerente de Projeto (part-time)  
  - 1 Líder Técnico  
  - 2 Desenvolvedores  

---

### Passo 2: Estimativa Detalhada por Função e Sprint

| Sprint | Área Responsável           | Pessoas | Esforço Estimado (h) |
|--------|----------------------------|---------|-----------------------|
| 1      | GP + LT                    | 2       | 60                    |
| 2      | LT                         | 1       | 80                    |
| 3      | GP + LT                    | 2       | 50                    |
| 4      | QA (feito pelos DEVs)      | 1       | 30                    |
| 5      | DEV + LT (UX incluído)     | 3       | 90                    |
| 6      | DEV                        | 2       | 110                   |
| 7      | DEV                        | 2       | 110                   |
| 8      | QA + DEV                   | 2       | 40                    |
| 9      | DEV + GP + LT              | 3       | 60                    |
| 10     | GP                         | 1       | 30                    |
| **Total Estimado** | —              | 4       | **670 horas**         |

---

### Passo 3: Estimativa de Custo

| Função                        | Valor/h (BRL) | Total de Horas | Custo (BRL)      |
|------------------------------|---------------|----------------|------------------|
| Gerente de Projeto           | R$ 100        | 120            | R$ 12.000        |
| Líder Técnico (LT + AR)      | R$ 90         | 200            | R$ 18.000        |
| Desenvolvedores (2)          | R$ 80         | 300            | R$ 24.000        |
| QA/Testes*                   | —             | 50             | (Incluso nos DEVs e LT) |
| **Total Estimado**           | —             | **670 horas**  | **R$ 54.000**     |

---

### Passo 4: Aprovação de Alterações

Qualquer alteração nos **valores**, **escopo** ou **duração das sprints** será submetida à aprovação formal do **Gerente de Projeto** e das **partes interessadas**, como o cliente.

---

### Passo 5: Monitoramento das Atividades do Projeto

Durante a execução, o esforço será monitorado por meio de:

- **Check-ins semanais**  
- **Reavaliações a cada fim de sprint**  
- **Replanejamento em caso de desvio acima de 15% no orçamento ou esforço**

---

## Critérios de Aceitação

- As estimativas estão alinhadas com o escopo, cronograma e capacidade da equipe  
- O orçamento proposto é compatível com os recursos disponíveis  
- A metodologia de monitoramento é suficiente para detectar desvios em tempo hábil

---

## Referências

- Planejamento do Projeto MinhaGAB  
- Documentos PM.1.3 a PM.1.7  
- Histórico de Projetos Anteriores  
- Benchmarks de Produtividade Interna  

# PM 1.9 — Identificar e Documentar os Riscos

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Data:** 03/06/2025  
- **Gerente do Projeto (Executor Primário):** Ygor Bueno  
- **Líder Técnico:** Samuel Milhomens  
- **Executores Adicionais:** Caio Sousa, Isaac Aires  

---

## Finalidade

Identificar os riscos que possam afetar o **andamento, escopo, custo, prazo ou qualidade** do projeto MinhaGAB, além de documentar suas características, impactos e possíveis **planos de mitigação**.

---

## Relacionamentos

### Entradas Obrigatórias:

- Composição da Equipe de Trabalho  
- Cronograma das Tarefas do Projeto  
- Declaração de Trabalho  
- Duração Estimada  
- Estimativa de Esforço e Custo do Projeto  
- Instruções de Entrega  
- Recursos  
- Tarefas  

### Entradas Opcionais:

- Nenhuma

### Saída:

- Identificação dos Riscos do Projeto

---

## Descrição Principal

O gerenciamento de riscos do projeto é essencial para garantir que possíveis imprevistos **não comprometam a entrega** do MinhaGAB. O processo envolve:

- Identificação dos riscos  
- Avaliação de impacto e probabilidade  
- Desenvolvimento de planos de mitigação  
- Monitoramento constante dos riscos  
- Comunicação transparente às partes interessadas  

---

## Etapas e Resultados

### Passo 1: Identificar Riscos

Riscos identificados a partir da EAP, cronograma e análise do escopo:

| ID  | Risco                                            | Categoria           |
|-----|--------------------------------------------------|---------------------|
| R1  | Atraso na entrega de funcionalidades-chave       | Cronograma          |
| R2  | Dificuldades técnicas na integração de módulos   | Técnico             |
| R3  | Mudanças frequentes nos requisitos               | Gerencial/Cliente   |
| R4  | Subestimação de esforço em tarefas críticas      | Planejamento        |
| R5  | Falha na comunicação entre equipe e cliente      | Comunicação         |
| R6  | Indisponibilidade de membros-chave da equipe     | Recursos Humanos    |
| R7  | Problemas de infraestrutura (servidores, rede)   | Tecnológico         |

---

### Passo 2: Avaliar Potenciais Efeitos dos Riscos

| ID  | Impacto | Probabilidade | Severidade (I x P) | Descrição do Impacto                       |
|-----|---------|---------------|---------------------|--------------------------------------------|
| R1  | Alto    | Média         | Alta                | Atraso nas datas-chave do projeto          |
| R2  | Alto    | Média         | Alta                | Retrabalho, perda de produtividade         |
| R3  | Alto    | Alta          | Crítica             | Escopo inflado, aumento de prazo e custos  |
| R4  | Média   | Alta          | Alta                | Comprometimento de entregas de sprints     |
| R5  | Média   | Alta          | Alta                | Entregas desalinhadas, retrabalho          |
| R6  | Alta    | Baixa         | Média               | Paralisação de atividades                  |
| R7  | Alta    | Baixa         | Média               | Interrupção no desenvolvimento e testes    |

---

### Passo 3: Desenvolver Planos de Mitigação

| ID  | Plano de Mitigação                                                                 |
|-----|-------------------------------------------------------------------------------------|
| R1  | Monitoramento semanal das entregas. Aplicação de metodologias ágeis.              |
| R2  | Prototipagem antecipada e testes modulares. Suporte técnico contínuo.             |
| R3  | Definição clara de requisitos iniciais. Controle de mudanças formal no backlog.   |
| R4  | Revisão constante das estimativas. Margem de segurança nas tarefas críticas.      |
| R5  | Reuniões semanais obrigatórias. Ferramentas de comunicação e documentação.        |
| R6  | Plano de backup para funções-chave. Redistribuição de tarefas se necessário.      |
| R7  | Contratação de serviços de nuvem confiáveis. Contingência local e remota.         |

---

### Passo 4: Monitoramento dos Riscos

- Realização de checkpoints a cada sprint  
- Avaliação da evolução dos riscos identificados  
- Registro de novos riscos e atualização dos planos de mitigação  

---

### Passo 5: Comunicação dos Riscos

- Todos os riscos são comunicados ao cliente na apresentação de início, nas reuniões de acompanhamento e nos relatórios semanais  
- A equipe interna tem acesso contínuo ao **documento vivo de gestão de riscos**, mantido no repositório do projeto  

---

## Conclusão

Este documento garante que o projeto **MinhaGAB** tenha um **controle efetivo sobre os principais riscos**, aumentando as chances de sucesso na entrega dentro do **prazo**, do **custo** e da **qualidade planejada**.

# PM 1.10 — Estratégia de Controle de Versão

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Data:** 03/06/2025  
- **Gerente do Projeto (Executor Primário):** Ygor Bueno  
- **Líder Técnico:** Samuel Milhomens  
- **Executores Adicionais:** Caio Sousa e Isaac Aires  

---

## Finalidade

Garantir que todas as versões dos artefatos, produtos e documentos do projeto **MinhaGAB** sejam **controladas de forma segura, organizada e rastreável**, evitando perda de informações, conflitos de alteração e garantindo a **integridade do projeto** durante todo o seu ciclo de vida.

---

## Relacionamentos

### Entradas:
- Declaração de Trabalho  
- Cronograma do Projeto  
- Composição da Equipe  
- Plano de Gerenciamento de Riscos  
- Estrutura Analítica do Projeto (EAP)  

### Saída:
- Estratégia de Controle de Versão documentada no Plano do Projeto

---

## Descrição Principal

A estratégia de controle de versão do projeto **MinhaGAB** abrange os seguintes artefatos:

- Código-fonte  
- Documentos de requisitos  
- Backlogs  
- Diagramas  
- Relatórios  
- Manuais e Documentação Técnica  

---

## Níveis de Controle

| Nível de Controle | Descrição                                                                 |
|-------------------|---------------------------------------------------------------------------|
| **Controle Padrão**  | Armazenamento em repositório compartilhado com controle de alterações.    |
| **Controle Rígido**  | Uso de sistema de versionamento com histórico completo, branches e auditoria. |

---

## Ferramentas de Controle

- **GitHub**, **GitLab** ou **Bitbucket** para:  
  - Código-fonte  
  - Scripts  
  - Documentação técnica  
  - Versionamento de diagramas  

- **Google Drive** ou **OneDrive** (com controle de acesso) para:  
  - Documentos administrativos  
  - Atas de reunião  
  - Materiais de apoio  

---

## Política de Controle de Acesso

- Acesso ao repositório Git via **chave SSH** e permissões de usuário  
- **Permissão de escrita restrita** a desenvolvedores e ao gerente de projeto  
- **Pull Requests (PR)** obrigatórios para alterações no branch principal  
- Revisões de PR realizadas pelo **líder técnico**  
- Documentos no Google Drive com **histórico ativado** e permissões restritas  

---

## Gerenciamento de Branches

| Branch        | Finalidade                                |
|---------------|--------------------------------------------|
| `main` / `master` | Versão de produção e homologação             |
| `develop`      | Linha principal de desenvolvimento         |
| `bugfix/*`     | Correções pontuais de erros identificados  |

---

## Etapas do Processo

| Etapa                   | Descrição                                                                 |
|-------------------------|---------------------------------------------------------------------------|
| 1. Estrutura de Acesso  | Criação de repositórios e organização de pastas com controle de permissões |
| 2. Armazenamento        | Todos os itens versionados com histórico e possibilidade de recuperação    |
| 3. Gerenciamento de Versões | Uso de tags, branches, controle de merges                                |
| 4. Registro de Alterações | Commits com mensagens claras, PRs documentados, log de mudanças           |
| 5. Relatórios de Versões | Uso de GitHub Insights ou ferramentas similares para monitoramento        |

---

## Relatórios Gerados

- Relatório de controle de commits  
- Relatório de mudanças no código-fonte  
- Histórico de versões dos documentos-chave  

---

## Auditoria e Rastreabilidade

- Todos os commits devem estar associados a tarefas do backlog  
- Revisões e aprovações documentadas nos PRs  
- Alterações nos documentos com histórico de versão ativo e backups mensais  

---

## Conclusão

A aplicação desta **estratégia de controle de versão** assegura que o projeto **MinhaGAB** mantenha **integridade, rastreabilidade e qualidade** durante todas as fases, minimizando riscos de perda de dados e facilitando **auditorias e manutenções futuras**.

# PM 1.11 — Integração do Plano do Projeto

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Responsável:** Gerente do Projeto  
- **Data:** 16/06/2025  

---

## Finalidade

Consolidar e integrar todos os elementos de planejamento elaborados nas tarefas anteriores da fase de Planejamento de Projeto, formando o **Plano do Projeto Integrado**.  
Esse plano servirá como **referência formal e base de controle** durante toda a execução do projeto **MinhaGAB**.

---

## Funções Envolvidas

- **Executor Primário:**  
  - Gerente do Projeto: Ygor Bueno  

- **Executores Adicionais:**  
  - Líder Técnico: Samuel Milhomens  
  - Equipe de Planejamento: Caio Sousa e Isaac Aires  

---

## Entradas

| Elemento                     | Fonte                                         |
|-----------------------------|-----------------------------------------------|
| Composição da Equipe        | Tarefa: PM Compor Equipe de Trabalho          |
| Cronograma das Tarefas      | Tarefa: PM Estabelecer Cronograma             |
| Declaração de Trabalho      | Tarefa: PM Elaborar Declaração de Trabalho    |
| Duração Estimada            | Tarefa: PM Estimar Duração                    |
| Estimativa de Esforço/Custo | Tarefa: PM Estimar Esforço e Custo            |
| Estratégia de Versão        | Tarefa: PM Estratégia de Controle de Versão   |
| Identificação de Riscos     | Tarefa: PM Identificar e Documentar os Riscos |
| Instruções de Entrega       | Tarefa: PM Definir Instruções de Entrega      |
| Recursos                    | Tarefa: PM Alocar Recursos                    |
| Tarefas                     | EAP + Lista de Atividades Planejadas          |

---

## Saídas

Todos os elementos integrados no **Plano do Projeto Integrado**, incluindo:

- Escopo e Declaração de Trabalho  
- Cronograma com Duração Estimada  
- Esforço e Custo por Tarefa  
- Riscos e Estratégias de Mitigação  
- Equipe e Recursos Alocados  
- Instruções de Entrega  
- Estratégia de Controle de Versão  

---

## Descrição Principal

Durante esta tarefa, o gerente do projeto deve:

- Coletar todos os documentos e informações produzidas nas tarefas anteriores  
- Verificar a **consistência entre os elementos**  
  - Ex: Riscos alinhados ao escopo e tarefas  
  - Esforço compatível com duração e recursos alocados  
- Consolidar os dados em um único artefato formal: **Plano do Projeto Integrado**  
- Distribuir este plano para **aprovação da equipe e stakeholders**  
- Atualizar a **baseline do projeto**, assumindo esse plano como referência para monitoramento e controle  

---

## Estrutura Recomendada do Plano Integrado

| Seção                       | Conteúdo                                                                 |
|----------------------------|--------------------------------------------------------------------------|
| **1. Introdução**          | Objetivo do plano, escopo geral, stakeholders principais                 |
| **2. Declaração de Trabalho** | Entregas, objetivos, premissas, critérios de sucesso                   |
| **3. Cronograma do Projeto** | Diagrama de Gantt, tarefas, marcos, duração e dependências             |
| **4. Recursos e Equipe**   | Equipe de trabalho, papéis, ferramentas, orçamento estimado             |
| **5. Estimativa de Esforço/Custo** | Esforço por tarefa, custo total estimado, justificativas         |
| **6. Gestão de Riscos**    | Riscos identificados, impacto, probabilidade, estratégias de mitigação  |
| **7. Controle de Versão**  | Ferramentas e práticas para controle e rastreabilidade de artefatos     |
| **8. Instruções de Entrega** | Como e quando cada artefato/produto será entregue e validado          |

---

## Observações Finais

- O **Plano do Projeto Integrado** é o **artefato mais importante** da fase de planejamento.  
- Deve ser **revisado periodicamente** e **atualizado formalmente** em caso de mudanças significativas.  
- Recomenda-se armazená-lo em **repositório versionado com controle de acesso** (ex: Git + Google Drive).  

# PM 1.12 — Descrever os Elementos no Plano de Projeto

## Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Versão:** 1.0  
- **Responsável:** Gerente do Projeto  
- **Data:** 16/06/2025  

---

## Finalidade

Descrever de forma clara, objetiva e formal os principais elementos do projeto: **Produto, Escopo, Objetivos e Entregáveis**, incorporando essas informações ao Plano de Projeto.  
Esta tarefa representa a **finalização formal da fase de planejamento** do projeto MinhaGAB.

---

## Funções Envolvidas

- **Executor Primário:**  
  - Gerente de Projeto: Ygor Bueno  

- **Executores Adicionais:**  
  - Líder Técnico: Samuel Milhomens  

---

## Entradas Utilizadas

| Elemento              | Fonte                                     |
|-----------------------|-------------------------------------------|
| Declaração de Trabalho | Tarefa: PM Elaborar Declaração de Trabalho |
| Descrição do Produto   | Tarefa: PM Definir Produto                |
| Entregáveis            | Tarefa: PM Definir Marcos e Entregas     |
| Escopo                 | Tarefa: PM Especificar Escopo e Limites  |
| Objetivos              | Tarefa: PM Definir Objetivos SMART       |

---

## Saídas (a serem incorporadas ao Plano do Projeto)

### 1. Descrição do Produto

O **MinhaGAB** é um sistema web desenvolvido para digitalizar e automatizar a emissão, consulta, validação e arquivamento de **Guias de Análise Biomédica (GABs)**, que atualmente são processadas manualmente por e-mail entre clínicas, pacientes e setor financeiro.  

O sistema visa:

- Maior eficiência operacional  
- Rastreabilidade  
- Integração entre os setores envolvidos  

---

### 2. Escopo do Projeto

**Inclusões:**

- Cadastro e autenticação de usuários (clínicas, pacientes, setor financeiro)  
- Emissão digital de GABs com numeração automática  
- Registro de status (aguardando autorização, autorizado, negado com justificativa)  
- Tela de registro e acompanhamento de solicitações  
- Sistema de consulta e download de GABs  
- Integração com banco de dados e infraestrutura em nuvem  

**Exclusões:**

- Integração com convênios de saúde  
- Inteligência artificial para pré-análise de exames (prevista para versão futura)  
- Aplicativo móvel  

---

### 3. Objetivos

| Objetivo                         | Descrição                                                                 |
|----------------------------------|---------------------------------------------------------------------------|
| Otimizar o processo de emissão  | Reduzir o tempo médio de emissão até o final do projeto                   |
| Eliminar o uso de e-mails manuais | Substituir 100% da comunicação de GABs por funcionalidades digitais       |
| Melhorar rastreabilidade         | Acompanhar cada GAB em tempo real por status e responsável                |
| Gerar relatórios automatizados   | Permitir exportação de GABs por data, status ou clínica                   |

---

### 4. Entregáveis

| Entregável                             | Formato           | Responsável                      |
|----------------------------------------|-------------------|----------------------------------|
| Documento de Requisitos                | PDF               | Analista de Requisitos           |
| Protótipo Navegável (Wireframe)        | Figma/Link Interativo | Designer UX                  |
| Módulo de Cadastro/Login               | Sistema Web       | Desenvolvedor Backend/Frontend  |
| Tela de Emissão e Consulta de GABs     | Sistema Web       | Desenvolvedor Frontend          |
| Funcionalidade de Justificativa de Negativa | Sistema Web  | Desenvolvedor Backend           |
| Funcionalidade de Solicitações         | Sistema Web       | Desenvolvedor Frontend          |
| Manual de Usuário                      | PDF               | Gerente de Projeto               |
| Relatório Final de Projeto             | PDF               | Gerente de Projeto               |

---

## Considerações Finais

A descrição clara e detalhada dos elementos-chave do projeto permite:

- Alinhamento entre os stakeholders  
- Transparência quanto às entregas e expectativas  
- Base sólida para gestão de mudanças e controle de escopo  

Com esta tarefa, **considera-se finalizado o Plano de Projeto MinhaGAB**, e o projeto encontra-se **apto para iniciar a fase de Execução**.

# Projeto MinhaGAB — Planejamento e Estrutura do Projeto

---

## PM 1.3 — Identificar Tarefas

### Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Data de Criação:** 03/06/2025  
- **Versão:** 1.0  
- **Responsável:** Gerente de Projeto  

### Descrição da Tarefa

Este documento tem como objetivo identificar e descrever as tarefas necessárias para a realização do projeto MinhaGAB, a partir da decomposição do escopo definido na Declaração de Trabalho e no Backlog.

### Tarefas Identificadas

| ID  | Tarefa                                              | Fase               | Dependências        |
|------|----------------------------------------------------|--------------------|---------------------|
| T1   | Redigir Declaração de Visão do Projeto             | Iniciação          | Nenhuma             |
| T2   | Realizar análise de stakeholders                    | Iniciação          | Nenhuma             |
| T3   | Levantar requisitos funcionais e não funcionais    | Requisitos         | T1, T2              |
| T4   | Registrar resultados da reunião de coleta (25/10/2024) | Requisitos     | T3                  |
| T5   | Elaborar documentação de requisitos completa       | Requisitos         | T3, T4              |
| T6   | Desenvolver Plano de Projeto (cronograma, recursos, orçamento) | Planejamento | T5                  |
| T7   | Criar Plano de Gerenciamento de Riscos e Comunicação | Planejamento    | T6                  |
| T8   | Desenvolver Plano de Testes                         | Planejamento/Testes | T5                  |
| T9   | Elaborar arquitetura e diagramas UML (casos de uso, classes, sequência) | Design    | T5                  |
| T10  | Desenvolver especificação de design detalhada      | Design             | T9                  |
| T11  | Implementar cadastro/login de usuários              | Desenvolvimento    | T10                 |
| T12  | Desenvolver painel do financeiro (upload, validação, etc.) | Desenvolvimento | T11                 |
| T13  | Desenvolver painel da clínica                        | Desenvolvimento    | T11                 |
| T14  | Desenvolver painel do cliente                        | Desenvolvimento    | T11                 |
| T15  | Criar e testar APIs de comunicação                   | Desenvolvimento    | T12, T13, T14       |
| T16  | Realizar testes (funcionais, de regressão, validação) | Testes           | T15, T8             |
| T17  | Corrigir falhas identificadas nos testes             | Testes             | T16                 |
| T18  | Criar Manual do Usuário e Guia de Instalação         | Implantação        | T16                 |
| T19  | Planejar e executar implantação em ambiente de produção | Implantação    | T18                 |
| T20  | Elaborar Relatório Final e Documentar Lições Aprendidas | Encerramento    | T19                 |

### Critérios de Aceitação

- Todas as tarefas estão alinhadas ao escopo e cronograma do projeto  
- Nenhuma dependência lógica foi violada  
- A rastreabilidade com os requisitos está garantida  

### Referências

- Backlog atualizado (versão de 03/06/2025)  
- Declaração de Trabalho (versão inicial)  
- Relatório da reunião de coleta de requisitos (25/10/2024)  

---

## PM 1.4 — Estimar Execução da Tarefa

### Identificação

- **Projeto:** MinhaGAB – Sistema de Gerenciamento de Guias de Análise Biomédica  
- **Data de Criação:** 03/06/2025  
- **Versão:** 1.0  
- **Responsável:** Gerente de Projeto: Ygor Bueno  

### Estimativas de Execução

| ID  | Tarefa                                     | Esforço Estimado (h) | Responsável              |
|------|--------------------------------------------|---------------------|-------------------------|
| T1   | Redigir Declaração de Visão do Projeto     | 8                   | Gerente de Projeto      |
| T2   | Realizar análise de stakeholders            | 10                  | GP + Analista de Requisitos |
| T3   | Levantar requisitos funcionais e não funcionais | 20              | Analista de Requisitos  |
| T4   | Registrar resultados da reunião de coleta  | 4                   | Analista de Requisitos  |
| T5   | Elaborar documentação de requisitos completa | 12                | Analista de Requisitos  |
| T6   | Desenvolver Plano de Projeto                | 10                  | Gerente de Projeto      |
| T7   | Criar Plano de Gerenciamento de Riscos e Comunicação | 8              | GP + QA                 |
| T8   | Desenvolver Plano de Testes                 | 10                  | QA                      |
| T9   | Elaborar arquitetura e diagramas UML       | 16                  | Arquiteto de Software   |
| T10  | Desenvolver especificação de design detalhada | 10                | Arquiteto de Software   |
| T11  | Implementar cadastro/login de usuários     | 12                  | Dev Backend + Frontend  |
| T12  | Desenvolver painel do financeiro            | 20                  | Dev Backend + Frontend  |
| T13  | Desenvolver painel da clínica               | 16                  | Dev Backend + Frontend  |
| T14  | Desenvolver painel do cliente               | 16                  | Dev Backend + Frontend  |
| T15  | Criar e testar APIs de comunicação          | 14                  | Dev Backend             |
| T16  | Realizar testes completos                    | 12                  | QA                      |
| T17  | Corrigir falhas dos testes                   | 10                  | Dev Backend             |
| T18  | Criar Manual do Usuário e Guia de Instalação| 8                   | QA + Redator Técnico    |
| T19  | Implantar sistema em produção                | 8                   | DevOps                  |
| T20  | Elaborar Relatório Final e Documentar Lições| 6                   | Gerente de Projeto      |

### Método de Estimativa Utilizado

- Técnica Delphi com base em histórico de projetos similares  
- Consideração de dias úteis e carga horária de 6h por membro/dia útil  
- Validação com equipe técnica envolvida  

### Critérios de Aceitação

- Esforços realistas e compatíveis com o cronograma aprovado  
- Estimativas compatíveis com a experiência da equipe  
- Estimativas validadas com stakeholders e membros técnicos  

---

## PM — Estimativa de Esforço e Custo do Projeto

### Identificação

- **Projeto:** MinhaGAB  
- **Versão:** 1.0  
- **Data:** 03/06/2025  
- **Gerente do Projeto (Executor Primário):** Ygor Bueno  
- **Executores Adicionais:** Líder técnico: Samuel Milhomens, Desenvolvedores: Caio Sousa e Isaac Aires  

### Finalidade

Calcular e documentar o esforço e o custo estimado para completar o projeto MinhaGAB, garantindo que os recursos financeiros, humanos e temporais estejam previstos para atender aos requisitos e prazos estabelecidos (16/08/2024 até 19/11/2024).

### Entradas Obrigatórias

- Cronograma das Tarefas do Projeto (baseado nas 10 sprints já planejadas)

### Saída

- Estimativa de Esforço e Custo do Projeto

### Etapas Realizadas

#### Passo 1: Estimativa aproximada no início do projeto

- Duração estimada do projeto: 14 semanas (10 Sprints)  
- Equipe estimada:
  - 1 Gerente de Projeto (part-time)  
  - 1 Líder técnico  
  - 2 Desenvolvedores  

#### Passo 2: Estimativa detalhada por função e sprint

| Sprint | Área Responsável   | Pessoas | Esforço Estimado (h) |
|--------|--------------------|---------|----------------------|
| 1      | GP + LT            | 2       | 60                   |
| 2      | LT                 | 1       | 80                   |
| 3      | GP + LT            | 2       | 50                   |
| 4      | QA (feito pelos DEVs) | 1     | 30                   |
| 5      | DEV + LT (UX incluído) | 3     | 90                   |
| 6      | DEV                | 2       | 110                  |
| 7      | DEV                | 2       | 110                  |
| 8      | QA + DEV           | 2       | 40                   |
| 9      | DEV + GP + LT      | 3       | 60                   |
| 10     | GP                 | 1       | 30                   |

- **Total Estimado:** 670 horas  

#### Passo 3: Custo por função

| Função             | Valor/h (BRL) | Total de Horas | Custo (BRL)   |
|--------------------|---------------|----------------|---------------|
| Gerente de Projeto  | R$ 100        | 120            | R$ 12.000     |
| Líder Técnico (LT + AR) | R$ 90     | 200            | R$ 18.000     |
| Desenvolvedores (2) | R$ 80         | 300            | R$ 24.000     |
| QA/Testes* (feito pelos DEVs e LT) | - | 50         | Incluso nos DEVs e LT |

- **Total Estimado:** 670 horas — R$ 54.000  

#### Passo 4: Aprovação de alterações

Qualquer alteração nos valores, escopo ou duração das sprints será submetida à aprovação formal do Gerente de Projeto e partes interessadas principais, como o cliente.

#### Passo 5: Monitoramento das atividades do projeto

- Check-ins semanais  
- Reavaliações a cada fim de sprint  
- Replanejamento em caso de desvio acima de 15% no orçamento ou esforço  

---

## PM — Estabelecer o Repositório do Projeto

### Identificação

- **Projeto:** MinhaGAB  
- **Versão:** 1.0  
- **Responsável:**  
  - Gerente do Projeto: Ygor Bueno  
  - Líder Técnico: Samuel Milhomens  
- **Data:** 16/06/2025  

### Finalidade

Estabelecer o repositório oficial do projeto, seguindo as diretrizes definidas na estratégia de controle de versão. O objetivo é garantir um ambiente centralizado, seguro e controlado para armazenar, versionar e gerenciar os artefatos do projeto.

### Funções Envolvidas

- Executor Primário: Gerente do Projeto: Ygor Bueno  
- Executor Adicional: Líder Técnico: Samuel Milhomens  
- Executor Adicional: Desenvolvedor: Caio Sousa  
- Executor Adicional: Desenvolvedor: Isaac Aires  

### Entrada Utilizada

- Estratégia de Controle de Versão  

### Saída

- Repositório de Projeto: Criado e operacional  

### Organização do Repositório

- **Plataforma:** GitHub (ou GitLab / Bitbucket, conforme preferência da equipe)  
- **URL:** [inserir link após criação]  

### Estrutura recomendada:

```
/minhaGAB
├── /docs → Documentação (Declaração de Trabalho, Requisitos, Relatórios)
├── /app → Código-fonte da aplicação (MVC - Models, Controllers, Services)
├── /bootstrap → Arquivos de bootstrap e cache inicial da aplicação
├── /config → Arquivos de configuração
├── /database
│ ├── /factories → Fábricas de dados para testes
│ ├── /migrations → Scripts de migração do banco de dados
│ └── /seeders → População inicial do banco
├── /public → Pasta pública acessível na web (index.php, assets)
├── /resources
│ ├── /views → Arquivos Blade (Templates)
│ ├── /lang → Arquivos de tradução
│ └── /css, /js → Frontend (se não separado)
├── /routes → Arquivos de rotas da aplicação (web.php, api.php)
├── /storage
│ ├── /app → Arquivos gerados pela aplicação
│ ├── /framework → Cache, sessões e arquivos temporários
│ └── /logs → Logs da aplicação
├── /tests → Testes automatizados (Feature, Unit)
├── /vendor → Dependências gerenciadas pelo Composer
├── /releases → Versões estáveis empacotadas
├── /tools → Scripts auxiliares, automações, pipelines
├── .env.example → Arquivo exemplo de variáveis de ambiente
├── .gitignore → Arquivos/pastas ignoradas no versionamento
├── README.md → Descrição geral do projeto
├── composer.json → Dependências PHP e configuração do Laravel
├── package.json → Dependências JS e scripts do frontend
└── LICENSE → Licença do projeto (se aplicável)
```


### Políticas e Estratégia de Versionamento

- **Controle de Versionamento:** Git  
- **Modelo de Branch:**  
  - `main` → Código de produção estável  
  - `develop` → Desenvolvimento integrado  
  - `bugfix/*` → Correções de erros  
- **Controle de Concorrência:** Otimista (via pull requests e revisões)  
- **Controle de Acesso:**  
  - Permissão total: Líder Técnico e Gerente de Projeto  
  - Permissão de push: Desenvolvedores autorizados  
  - Permissão de leitura: Equipe ampliada e stakeholders (opcional)  

### Boas Práticas Adotadas

- Arquivos temporários, binários e caches são excluídos via `.gitignore`  
- Padrão de commits semânticos (Ex.: `feat: adicionar tela de login`, `fix: corrigir erro na emissão da GAB`)  
- Readme com instruções claras de instalação, configuração e execução do projeto  
- Uso de pipeline para integração contínua e entrega contínua (CI/CD) [opcional]  

### Status do Repositório

- Diretório principal criado  
- Estrutura de pastas definida e aplicada  
- Dados e artefatos iniciais importados  
- Políticas de acesso configuradas  

---

**Fim do documento.**
