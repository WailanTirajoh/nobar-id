## Instalation guide
```
composer install

npm install

npm run dev

```


## Setup .env
```
cp .env.example .env
php artisan key:generate
```

## Setup DB
```
mysql -u root -p
create database watch_together;
```

## Development
```
change settings on path/webpack.mix.js -> look at this line and change to your url (localhost:8000 or whatever) .browserSync('watch-together.test');
npm run watch
```
