# Projeto de Microsserviços com Docker

Este projeto demonstra uma arquitetura básica de microsserviços utilizando Docker, composta por 3 containers: PHP (com Apache), MySQL e Nginx como proxy reverso.

## Tecnologias Utilizadas

- Docker & Docker Compose
- PHP 7.4 com Apache
- MySQL 5.7
- Nginx
- SQL para persistência de dados

## Estrutura do Projeto

```yaml
├── php/
│   ├── Dockerfile 
│   └── index.php 
├── nginx/ 
│   └── nginx.conf 
├── db/ 
│   └── banco.sql 
├── docker-compose.yml
└── README.md

```
---

## Como executar

1. **Clone o repositório**
   ```bash
   git clone https://github.com/JoelsonTravassos/microservices-docker-php-nginx.git
   cd microservices-docker-php-nginx
    ```
2. Suba os containers
    ```bash
    docker-compose up --build
    ```

3. Acesse a aplicação
- Acesse via navegador: http://localhost:4500

Cada vez que você acessar, um novo registro será inserido automaticamente no banco de dados MySQL.


## Testando a aplicação

- O index.php insere dados aleatórios na tabela dados.
- A tabela é criada automaticamente pelo script banco.sql.


## Variáveis de Ambiente
As variáveis de conexão com o banco estão embutidas no código index.php, mas podem ser configuradas via ambiente Docker no futuro:

- `DB_HOST` (padrão: db)

- `DB_USER` (padrão: root)

- `DB_PASS` (padrão: rootpass)

- `DB_NAME` (padrão: meubanco)

## Créditos e Inspiração
Projeto baseado no desafio da DIO (Digital Innovation One) com melhorias de estrutura, segurança e boas práticas de DevOps.