language: php

php:
  - 5.4
  - 5.5
  - 5.6
  - 7.0
  - 7.1
  - 7.2
  
sudo: false

cache:
  directories:
    - vendor
    - $HOME/.composer/cache

before_script:
  - composer install --no-interaction --prefer-source

script:
  - ant
