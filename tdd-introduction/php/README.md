# PHP TDD-Introduction

## Setup

The setup can be done by installing composer or just run docker if installed.

### Using installed composer

First you need [composer](https://getcomposer.org/doc/00-intro.md) to be installed.

    composer install

### Using docker

First you need [docker](https://docs.docker.com/engine/installation/) to be installed.

    docker run --rm --interactive --tty -v $PWD:/app --user $(id -u):$(id -g) composer install

## Run tests

Here we can choose between local php and docker, too.

### Local php

Just execute phpunit and run the testsuite described in [phpunit.xml](phpunit.xml) and defined in [test/](test/).

    vendor/bin/phpunit

### Using docker

Do exactly the same like with a local php but without the need of installing it.

    docker run --rm --interactive --tty -v $PWD:/app -w /app --user $(id -u):$(id -g) php vendor/bin/phpunit

