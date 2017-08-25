# Javascript TDD-Introduction

## Setup

The setup can be done by installing npm (and yarn) or just run docker if installed.

### Using installed yarn

First you need [yarn](https://yarnpkg.com/lang/en/docs/install/) to be installed.

    yarn install

### Using docker

First you need [docker](https://docs.docker.com/engine/installation/) to be installed.

    docker run --rm --interactive --tty -v $PWD:/app -w /app --user $(id -u):$(id -g) node yarn install

## Run tests

Here we can choose between local yarn and docker, too.

### Local yarn

Just execute `yarn test` and run the tests defined in [spec/](spec/).

    yarn test

### Using docker

Do exactly the same like with a local yarn but without the need of installing it.

    docker run --rm --interactive --tty -v $PWD:/app -w /app --user $(id -u):$(id -g) node yarn test

