# Install

## with Sail

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

```
sail npm i
sail npm run build
sail artisan migrate
sail artisan db:seed --class=StarSeed
```
