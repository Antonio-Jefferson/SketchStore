# sketchStore

## Requisitos

Certifique-se de ter o Docker e o Docker Compose instalados no seu sistema antes de prosseguir.

- Docker: [Instalação do Docker](https://docs.docker.com/get-docker/)
- Docker Compose: [Instalação do Docker Compose](https://docs.docker.com/compose/install/)

## Como rodar o projeto

1. Clone este repositório:

git clone https://github.com/Antonio-Jefferson/sketchStore.git

arduino
Copy code

2. Navegue até o diretório do projeto:

cd sketchStore

arduino
Copy code

3. Copie o arquivo de exemplo de configuração do ambiente:

cp .env.example .env

markdown
Copy code

4. Abra o arquivo `.env` e ajuste as configurações de banco de dados conforme necessário.

5. Inicialize os contêineres Docker usando o Docker Compose:

docker-compose up -d

csharp
Copy code

Isso irá construir e iniciar os contêineres necessários.

6. Instale as dependências PHP do Laravel usando o Composer:

docker-compose exec app composer install

css
Copy code

7. Gere uma chave de aplicativo para a aplicação Laravel:

docker-compose exec app php artisan key:generate

csharp
Copy code

8. Execute as migrações do banco de dados para criar as tabelas necessárias:

docker-compose exec app php artisan migrate

less
Copy code

9. Acesse a aplicação em seu navegador em `http://localhost/8000`.

## Parando a execução do projeto

Para parar a execução do projeto, execute o seguinte comando na raiz do projeto:

docker-compose down

css
Copy code

Isso irá parar e remover os contêineres Docker.