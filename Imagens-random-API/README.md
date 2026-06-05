# API Random Images

## Descrição

API em Laravel para upload e distribuição de imagens. Permite armazenar imagens localmente e recuperá-las via endpoints REST, incluindo busca aleatória e por categoria.

O projeto acompanha um frontend simples em HTML/JavaScript que consome a própria API.

---

## Funcionalidades

- Upload de imagens
- Armazenamento local (storage)
- Retorno de imagem aleatória
- Filtro por categoria
- API consumida por frontend simples

---

## Endpoints

- POST /api/images → upload de imagem
- GET /api/random → imagem aleatória
- GET /api/category/{category}/{amount?} → por categoria

---

## Execução

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
php artisan serve
