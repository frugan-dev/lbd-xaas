#!/bin/bash

set -e

if [ -f .env ]; then
	rm .env
fi

ln -sfn ../src/.env .

docker compose up -d
