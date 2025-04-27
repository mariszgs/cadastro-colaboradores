Sistema de Cadastro de Colaboradores 

 Sobre:
 Esta é uma aplicação web que tem como principais funcionalidades registrar, visualizar, editar e excluir dados de colaboradores participantes de um evento corporativo realizado por uma empresa.

 Pré Requisitos:
 - PHP >= 8.x
 - Composer 
 - MySQL (ou outro banco configurado no .env)
 - Node.js + NPM (compilar os assets)
 - Laravel 12

 Passo a Passo:

 1. Clone o Repositório
git clone https://github.com/mariszgs/cadastro-colaboradores.git
cd cadastro-colaboradores

 2. Instale as dependências PHP
composer install

 3. Copie o arquivo ".env.example" para ".env"
cp .env.example .env

 4. Gere a chave de Aplicação
php artisan key:generate

 5. Configure o banco de dados no ".env"
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

 6. Execute as Migrations
php artisan migrate

 7. Instale as dependências do front-end
npm install
npm run dev

 8. Inicie o servidor Laravel
php artisan serve

 9. Acesse "http://127.0.0.1:8000"

