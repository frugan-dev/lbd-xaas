#!/bin/bash

set -e

if [ -n "${GITHUB_TOKEN:-}" ]; then
	composer config -g github-oauth.github.com "${GITHUB_TOKEN}"
	cd private/app
	composer update --optimize-autoloader --no-interaction
	cd ../../
fi

exec "$@"
