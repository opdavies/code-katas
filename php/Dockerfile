FROM php:8.1-cli-bullseye

ENV PATH=$PATH:/app/vendor/bin

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app

RUN apt-get update -yqq \
  && apt-get install -yqq git unzip \
  && adduser --disabled-password app \
  && chown app:app -R /app

USER app

COPY --chown=app:app composer.* ./

RUN composer install

COPY --chown=app:app . .
