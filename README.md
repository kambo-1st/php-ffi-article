# PHP FFI examples
Set of simple FFI examples.

## Requirements

All provided code samples require minimum version of PHP 7.4 and operating system Linux or Windows with WSL. You can use provided Docker image.

## Docker image usage

First you have to build the image:
```console
docker-compose build --no-cache --pull
```

You can then run any example:
```console
docker-compose run php74 php abs.php
```
