#!/bin/bash

set -e

KEY=$1

VALUE=$(grep "^${KEY}" /run/secrets/.env | cut -d '=' -f2)

export "${KEY}=${VALUE}"

echo "${VALUE}"
