<p align="center">
    <img src='logo.svg' style='margin: 0 auto;'>
</p>

<p align='center'>
    <img src='https://img.shields.io/github/downloads/BlankBuffoon/Project-Screen/total'>
    <img src='https://img.shields.io/github/last-commit/BlankBuffoon/Project-Screen/main'>
    <img src='https://img.shields.io/github/contributors/BlankBuffoon/Project-Screen'>
</p>

---

## Content
- [Requires](#requires)
- [Installation](#installation)
- [Application variables](#variables)
- [Application Directory structure](#directory-structure)

<a id="requires"></a>
## Requires

- Docker
- Php (v 8.1+)
- Composer (v 2.5+)
- NodeJS (v 16+)
- Npm (v 9+)

### Additional dependencies

For faster composer operation, you can install unzip into your system using `sudo apt install zip unzip php-zip`. You can also use nvm to manage nodejs versions.

<a id="installation"></a>
## Installation

Application installation process

### Step 1. Install Dependencies

Run `composer install` to install composer dependencies. Sometimes you may get composer errors, in this case use the flag `--ignore platform-reqs`

Install dependencies from `package.json` don't need json for vue. The Docker compose configuration provides for automatic installation of dependencies inside the container

### Step 2. Check is Docker running

Run `docker version` and check is docker has installed and running.

### Step 3. Run Application

1. Use allias `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'` for more comfortable use of sail.
2. Decrypt laravel application key with command `php artisan env:decrypt --key=<application key>`. The application key will be listed below.
3. Run `sail up`
4. Your application will be available at `http://localhost` - for frontend, and `http://localhost:8081` - for backend (you can change this ports in `.env` file). 

### After installation

After installation, you can test the application. To do this, run migrations and database seeders using `sail artisan migrate --seed`. After that, you will be able to check the performance of the application on test data from the database.

<a id="variables"></a>
## Application variables
 
- Env decryption key: `base64:9cvr+o4rc0XvwD1iC1arErL7prbgyFnerK3pnIHOiNw=`

<a id="directory-structure"></a>
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
