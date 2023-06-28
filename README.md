# Project Screen

## Requires

- Docker
- Php (v 8.1+)
- Composer (v 2.5+)
- NodeJS (v 16+)
- Npm (v 9+)

## Installation

Application installation process

### Step 1. Install Dependencies

Run `composer install` to install composer dependencies. Sometimes you may get composer errors, in this case use the flag `--ignore platform-reqs`

Run `cd ./frontend && npm install` to install nodejs dependencies.

### Step 2. Check is Docker running

Run `docker version` and check is docker has installed and running.

### Step 3. Run Backend

1. Use allias `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'` for more comfortable use of sail.
2. Decrypt laravel application key with command `sail artisan env:decrypt --key=<application key>`. The application key will be listed below.
3. Run `sail up`
4. Your application will be available at `http://localhost`

## After installation

After installation, you can test the application. To do this, run migrations and database seeders using `sail artisan migrate --seed`. After that, you will be able to check the performance of the application on test data from the database.

## Application variables
 
- Env decryption key: `base64:9cvr+o4rc0XvwD1iC1arErL7prbgyFnerK3pnIHOiNw=`

## Application Directory structure

```
root - basic laravel application structure
    /app - laravel application directory
    /bootstrap - laravel framefork bootstap
    /config - laravel configuration files
    /database - backend migrations, factories, seeders
    /frontend - VueJs frontend directory
    /public - public assets
    /routes - laravel routes defenitions
    /storage - laravel storage directory (logs, compiled files...)
    /test - laravel php unit tests

frontend - vuejs structure
    /public - assets
    /src - vuejs application source directory
        /assets - images, styles and other files
        /components - vuejs components
        /router - routes for SPA
        /views - vuejs views
```
