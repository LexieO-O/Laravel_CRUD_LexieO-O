# Exercício: refaça seu sistema no Laravel

Sistema MVC feito "na mão" e reconstruído no Laravel (Desenvolvimento WEB II).

## O que foi implementado

- Migration da tabela principal (`pessoas`)
- Model Eloquent com `$fillable`
- Controller com `index()` e `store()`
- Rotas nomeadas no `web.php`
- Layout Blade + menu em `partials/`
- Formulário com `@csrf`, validação e `@error`
- Listagem com `@forelse`

## Desafio extra

Exclusão de registro com `Route::delete(...)`, `@method('DELETE')` no formulário e `$pessoa->delete()` no controller.

## Como rodar

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Depois, acesse `http://localhost:8000/pessoas`.
