# API CRUD de Produtos - Laravel

API REST para gerenciamento de produtos desenvolvida em Laravel.

## Requisitos

- PHP 8.3+
- Composer
- MySQL

## Instalação

1. Clone o repositório:
```
git clone https://github.com/MFazioni/meu-crud.git
```

2. Instale as dependências:
```
composer install
```

3. Copie o arquivo de ambiente:
```
cp .env.example .env
```

4. Configure o banco de dados no `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meu_crud
DB_USERNAME=root
DB_PASSWORD=
```

5. Gere a chave da aplicação:
```
php artisan key:generate
```

6. Rode as migrations:
```
php artisan migrate
```

7. Inicie o servidor:
```
php artisan serve
```

## Rotas da API

| Método | Rota | Descrição |
|--------|------|-----------|
| GET | /api/produtos | Listar todos |
| POST | /api/produtos | Criar produto |
| GET | /api/produtos/{id} | Buscar por ID |
| PUT | /api/produtos/{id} | Atualizar |
| DELETE | /api/produtos/{id} | Deletar |

## Tecnologias

- Laravel 13
- MySQL
- Eloquent ORM
