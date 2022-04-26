# Project Docs

## Docs
### Generating docs
```shell
$ phpDocumentor -d ./src -t ./public/docs/
```

## Testing
```shell
$ php -d xdebug.mode=coverage vendor/bin/phpunit --coverage-html public/tests-report/ tests
```

## Application Server
```shell
$ cd public && php -S localhost:1234
```
