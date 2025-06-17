# MinhaGAB

Sistema de Gerenciamento de Guias Ambulatoriais (GABs), amplamente utilizado na Força Aérea Brasileira (FAB) em Anápolis/GO.
O projeto é desenvolvido por alunos do curso de Engenharia de Software, em colaboração com a equipe de saúde da FAB Anápolis, com foco em otimizar e modernizar os processos internos de gestão ambulatorial.

## Pré Instalação

Para a instalaçao do projeto é nescessario:

* PHP versão >= 8.1
* Composer >= 2.8.3
* MySql >= 8 
* Todas as extenções do PHP necessarias citadas pela documentação do Laravel.

## Instalação

Após clonar o repositório execute os seguintes comandos no seu terminal.

```
cp .env.example .env     # Cria o arquivo de hambiente.
composer update          # Instala todas as dependencias.
php artisan key:generate # Cria a chave de segurança da aplicação.
php artisan migrate:fresh --seed # Cria/Reseta o DB e popula ele

```