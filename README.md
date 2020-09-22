# FizzBuzz
FizzBuzz PHP implementation

Run
```
~ $ composer install
~ $ php public/index.php
```

Or With Docker

```
~ $ docker run --rm --interactive --tty --volume $PWD:/app composer install --ignore-platform-reqs
~ $ docker run --rm --interactive --tty --volume $PWD:/usr/src/app -w /usr/src/app php:7.1-cli-alpine php public/index.php
```