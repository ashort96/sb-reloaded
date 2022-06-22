# Sourcebans-Reloaded

An attempt at partially recreating [SourceBans++](https://github.com/sbpp/sourcebans-pp/) using Laravel as the backend framework. 

## Requirements:
- PHP 8.1
- MySQL 8.0

## Running locally:

Docker is the preferred way to run this. With Docker installed, all you need to do is run `./vendor/bin/sail up`. This first time you run this will take a little while, but will be much faster after the initial setup.

### Connecting to container.

```
> docker exec -it [CONTAINER_NAME]
```

### Seeding the database
Run this once connected to the laravel container:
```
root@82556a4d6b6c:/var/www/html# php artisan migrate:fresh --seed
```