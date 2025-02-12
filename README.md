# Laravel 11 Inertia Vue NO Starter Kit
A basic Laravel Inertia Vue project NO Starter Kit reference / example

### Project setup
```
git clone https://github.com/hokorivault/laravel-inertia-vue.git
cd laravel-inertia-vue
npm install
composer update
```

### Database

### Create a MySQL database
```
mysql> CREATE DATABASE laravel-inertia-vue CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```
Dont forget to run
```
php artisan migrate
```

### Vite / Vue - apply changes before viewing in browser
```
npm run dev
```
### Run Laravel web server
```
php artisan serve
```

If it throws exception error,
_Laravel: "Vite manifest not found at /laravel-inertia-vue\public\build/manifest.json"_

Try
```
npm run build
```
