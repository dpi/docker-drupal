#!/usr/bin/env sh

set -e

cat config/drupal/settings.php >> web/sites/default/settings.php \
&& cp config/drupal/settings.local.php web/sites/default \
&& cp config/drupal/development.services.yml web/sites \
&& printf "Your site is scaffolded. Run\n\t'docker-compose up --build'\nto spin up.\n"
