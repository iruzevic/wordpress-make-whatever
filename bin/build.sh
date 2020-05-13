#!/usr/bin/env sh

function build() {
  cd wp-content/themes/whatever;
  npm install
  composer install --no-dev --no-scripts
  npm run build
}

build
