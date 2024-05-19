# lord-server.ru

Official [website](http://lord-server.ru/) of Russian L.O.R.D. server for Minetest

- [Local Deploy](#local-deploy)
- [Usage in development](#usage-in-development)
    - [Everyday up & down](#everyday-up-&-down)
    - [Code Style Check & Fix](#code-style-check-&-fix)
    - [Control Code Quality](#control-code-quality)
- [About Laravel](#about-laravel)

## Local deploy

- Clone the project
  ```bash
  git clone git@gitlab.com:ava-it-group/investments/web-application.git
  ```
- Step inside & copy your own `.env`:
  ```bash
  cd web-application
  cp .env.example .env
  ```
- Then you need to install dependencies inside the [sail](https://laravel.com/docs/11.x/sail) container via [composer](https://getcomposer.org/)
  ```bash
  docker run --rm \
      -u "$(id -u):$(id -g)" \
      -v "$(pwd):/var/www/html" \
      -w /var/www/html \
      laravelsail/php83-composer:latest \
      composer install --ignore-platform-reqs
  ```
- Now we need to up the containers and generate secret key for our application:
  ```bash
  vendor/bin/sail up -d
  vendor/bin/sail artisan key:generate
  ```
- For use the latest frontend install dependencies & build it:
  ```bash
  vendor/bin/sail npm install
  vendor/bin/sail npm run build
  ```
- That's all folks! You can find the app at:  
  http://0.0.0.0/


## Usage in development
- [Everyday up & down](#everyday-up-&-down)
- [Code Style Check & Fix](#code-style-check-&-fix)
- [Control Code Quality](#control-code-quality)

### Everyday up & down
#### Backend:
- For the up containers use:
  - `vendor/bin/sail up` - to see the logs
  - or `vendor/bin/sail up -d` - to execute in background
- If you up containers in background use
  - `vendor/bin/sail down` - to stop them
#### Frontend:
- For just build the latest version (for ex. after switch between branches or pul new commits):
  ```bash
  ./vendor/bin/sail npm install
  ./vendor/bin/sail npm run build
  ```
- For frontend developing & get changes on the fly:
  - `vendor/bin/sail npm run dev`

### Code Style Check & Fix
We use [PHP-CS-Fixer](https://cs.symfony.com/) for control Code Style.
Package [`php-cs-fixer`](https://packagist.org/packages/friendsofphp/php-cs-fixer) installed locally in the project, so you can check style with:
- if you have php installed locally:
    - `vendor/bin/php-cs-fixer check --diff` - for just check
    - or `./vendor/bin/php-cs-fixer fix` - if you trust this tool :)
- or the same commands inside container:
    - `vendor/bin/sail php vendor/bin/php-cs-fixer check --diff`
    - `vendor/bin/sail php vendor/bin/php-cs-fixer fix`

For more use `--help` & [documentation](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer?tab=readme-ov-file#documentation).  
You can enable support for your IDE. It will alert you to problems on the fly.

### Control Code Quality
We use [PHPStan](https://phpstan.org/) for code quality control.
Package [`phpstan`](https://packagist.org/packages/phpstan/phpstan) installed locally in the project, so just:
- `vendor/bin/phpstan analyse` or
- `vendor/bin/sail php vendor/bin/phpstan analyse`

Also see the [Documentation](https://phpstan.org/user-guide/getting-started).  
Config for all developers we store in `phpstan.neon.dist`. Also, it's used in CI.  
If you want to add some your own settings (for ex. for your IDE), create `phpstan.neon` with similar lines:
```yaml
includes:
  - phpstan.neon.dist

parameters:
  editorUrl: 'phpstorm://open?file=%%file%%&line=%%line%%'
```
See examples in docs: [Output Format](https://phpstan.org/user-guide/output-format#opening-file-in-an-editor).  
Also look at [helpful extensions](https://phpstan.org/user-guide/extension-library#official-extensions).

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
