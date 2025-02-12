# Laravel 11 Inertia Vue NO Starter Kit
A basic barebones boilerplate / template or whatever you call it of a Laravel Inertia Vue project NO Starter Kit

### Clone this project
```
git clone https://github.com/hokorivault/laravel-inertia-vue.git
```

### Project setup
```
cd laravel-inertia-vue
npm install
```

### Update / Install composer
```
composer update
```

### Database

### Create a MySQL database
```
laravel-inertia-vue.sql
```

### Set collation to
```
utf8mb4_unicode_ci
```

And then,
```
php artisan migrate
```

### Run the web server
```
php artisan serve
```

If it throws exception error,
_Laravel: "Vite manifest not found at /laravel-inertia-vue\public\build/manifest.json"_

Try
```
npm run build
```