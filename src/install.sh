#!/bin/bash

set -e

#https://github.com/anordal/shellharden/blob/master/how_to_do_things_safely_in_bash.md
#https://stackoverflow.com/a/20909045/3929620
#https://stackoverflow.com/a/66118031/3929620
#https://gist.github.com/mihow/9c7f559807069a03e302605691f85572
#https://github.com/docker/compose/issues/3702
set -a
# shellcheck source=/dev/null
source <(sed -e '/^#/d;/^\s*$/d' -e "s/'/'\\\''/g" -e "s/=\(.*\)/='\1'/g" .env)
set +a

mkcert -cert-file \
	"private/docker/apache/certs/server.crt" \
	-key-file "private/docker/apache/certs/server.key" \
	localhost 127.0.0.1 ::1
chmod +r private/docker/apache/certs/server.*
