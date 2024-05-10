[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

# Learning By Doing: Exploring XaaS with Simple Applications

Collection of simple applications for Learning By Doing across different XaaS (Anything as a Service) stacks and cloud infrastructures.

### Inspired by

- https://github.com/wadexu007/learning_by_doing
- https://github.com/tuupola/php-docker-k8s

### Getting Started

1\) First of all clone this repository:

```sh
$ git clone git@github.com:frugan-dev/lbd-xaas.git
$ cd lbd-xaas
```

2\) Copy and rename these files: 

```
src/.env.dist -> src/.env
src/private/app/.env.dist -> src/private/app/.env
```

and edit them according to your needs.

## Docker compose

<details>
<summary>Requirements</summary>

- [Docker Desktop](https://docs.docker.com/desktop/) (or [Docker Engine](https://docs.docker.com/engine/) + [Docker Compose](https://docs.docker.com/compose/))
- [mkcert](https://github.com/FiloSottile/mkcert)

</details>

<details>
<summary>Installation</summary>

1\) Create local CA with mkcert:

```sh
$ mkcert -install
```

2\) Run install script:

```sh
$ cd src
$ sudo chmod +x install.sh
$ ./install.sh
$ docker compose up -d
```

3\) Capture the Docker PHP-FPM container logs:

```sh
$ docker compose logs -f php-fpm
```

and wait until all initialization operations are completed.

4\) Browse via HTTPS to the following address https://localhost.

5\) Stop, delete everything and return to parent folder:

```sh
$ docker compose down
$ docker system prune --all
$ cd ../
```
</details>

## Google App Engine standard (second-generation runtime)

<details>
<summary>Requirements</summary>

- [Docker Desktop](https://docs.docker.com/desktop/) (or [Docker Engine](https://docs.docker.com/engine/) + [Docker Compose](https://docs.docker.com/compose/))

</details>

<details>
<summary>Installation</summary>

> Note: PHP v8.2 is used, instead of v8.3, because at the time of writing the following error message appears:
> 
> `RuntimeError: Unknown runtime 'php83'; supported runtimes are 'go119', 'go120', 'go121', 'go122', 'php81', 'php82', 'python310', 'python311', 'python312', 'python38', 'python39'`.

1\) Run deploy script:

```sh
$ cd gae-standard
$ sudo chmod +x deploy.sh
$ ./deploy.sh
```

2\) Capture the Docker container logs:

```sh
$ docker compose logs -f local
```

and wait until all initialization operations are completed.

3\) Browse the application via HTTP to the following address http://localhost:8080.

4\) Browse the administration console via HTTP to the following address http://localhost:8000.

5\) Stop, delete everything and return to parent folder:

```sh
$ docker compose down
$ docker system prune --all
$ cd ../
```

</details>

## Google App Engine flexible (second-generation runtime)

<details>
<summary>Requirements</summary>

- [Docker Desktop](https://docs.docker.com/desktop/) (or [Docker Engine](https://docs.docker.com/engine/) + [Docker Compose](https://docs.docker.com/compose/))

</details>

<details>
<summary>Installation</summary>

> Note: at the time of writing, despite having followed the official documentation, this stack does not work and the following error message appears:
> 
> `In env: flex, only the following runtimes are allowed: ('python-compat', 'go', 'custom')`

1\) Run deploy script:

```sh
$ cd gae-flexible
$ sudo chmod +x deploy.sh
$ ./deploy.sh
```

2\) Capture the Docker container logs:

```sh
$ docker compose logs -f local
```

and wait until all initialization operations are completed.

3\) Browse the application via HTTP to the following address http://localhost:8080.

4\) Browse the administration console via HTTP to the following address http://localhost:8000.

5\) Stop, delete everything and return to parent folder:

```sh
$ docker compose down
$ docker system prune --all
$ cd ../
```

</details>

## Kubernetes (stateful)

<details>
<summary>Requirements</summary>

- [Minikube](https://minikube.sigs.k8s.io/docs/start/)
- [kubectl](https://kubernetes.io/docs/tasks/tools/install-kubectl-linux/)

</details>

<details>
<summary>Installation</summary>

1\) Create `stateful-app` image in your Docker local registry:

```sh
$ DOCKER_BUILDKIT=1 docker build \
  -f k8s-stateful/Dockerfile \
  -t registry.local/stateful-app:latest \
  .
```

Note: about `DOCKER_BUILDKIT=1` see here [https://stackoverflow.com/a/57774684/3929620](https://stackoverflow.com/a/57774684/3929620).

2\) Verify that the image was created correctly in Docker local registry:

```sh
$ docker image ls
```

3\) Start Minikube cluster:

```sh
$ minikube start
```

4\) Push Docker local image to Minikube local registry:

```sh
$ minikube image load registry.local/stateful-app
```

5\) Verify that the image was created correctly in Minikube local registry:

```sh
$ minikube image ls
```

6\) Apply resources from Kustomize configurations:

```sh
$ kubectl apply -k ./k8s-stateful
```

7\) Verify that all pods are in `Running` state:

```sh
$ kubectl get pods
```

8\) Get the NodePort using the service command:

```sh
$ minikube service stateful-app-service --url
```

9\) Browse via HTTP to the address returned (e.g. http://192.168.0.0:12345).

10\) Stop and delete everything:

```sh
$ kubectl delete -k ./k8s-stateful
$ minikube image rm registry.local/stateful-app
$ minikube image rm docker.io/bitnami/apache
$ minikube stop
$ minikube delete
$ docker system prune --all
```

</details>

## Kubernetes (stateless)

<details>
<summary>Requirements</summary>

- [Minikube](https://minikube.sigs.k8s.io/docs/start/)
- [kubectl](https://kubernetes.io/docs/tasks/tools/install-kubectl-linux/)

</details>

<details>
<summary>Installation</summary>

1\) Create `stateless-app` image in your Docker local registry:

```sh
$ DOCKER_BUILDKIT=1 docker build \
  --secret id=.env,src=$PWD/src/.env \
  -f k8s-stateless/Dockerfile \
  -t registry.local/stateless-app:latest \
  .
```

Note: about `DOCKER_BUILDKIT=1` see here [https://stackoverflow.com/a/57774684/3929620](https://stackoverflow.com/a/57774684/3929620).

2\) Verify that the image was created correctly in Docker local registry:

```sh
$ docker image ls
```

3\) Start Minikube cluster:

```sh
$ minikube start
```

4\) Push Docker local image to Minikube local registry:

```sh
$ minikube image load registry.local/stateless-app
```

5\) Verify that the image was created correctly in Minikube local registry:

```sh
$ minikube image ls
```

6\) Apply resources from Kustomize configurations:

```sh
$ kubectl apply -k ./k8s-stateless
```

7\) Verify that all pods are in `Running` state:

```sh
$ kubectl get pods
```

8\) Get the NodePort using the service command:

```sh
$ minikube service stateless-app-service --url
```

9\) Browse via HTTP to the address returned (e.g. http://192.168.0.0:12345).

10\) Stop and delete everything:

```sh
$ kubectl delete -k ./k8s-stateless
$ minikube image rm registry.local/stateless-app
$ minikube stop
$ minikube delete
$ docker system prune --all
```

</details>

### Known issues

<details>
<summary>Docker use root user/group in host machine</summary>

1\) Get your Unix user/group informations:

```sh
$ id
```

2\) Add this to `/etc/subuid`:

```sh
{USER}:{UID}:1
...
```

3\) Add this to `/etc/subgid`:

```sh
{USER}:{DOCKER_GUI}:1
...
```

4\) Add this to `/etc/docker/daemon.json`:

```json
{
  "userns-remap": "{USER}"
} 
```

to enable Docker's user namespace feature.

5\) Restart Docker engine:

```sh
$ sudo service docker restart
```

More info:

- https://jtreminio.com/blog/running-docker-containers-as-current-host-user/
- https://www.jujens.eu/posts/en/2017/Jul/02/docker-userns-remap/
- https://medium.com/faun/set-current-host-user-for-docker-container-4e521cef9ffc
- https://daten-und-bass.io/blog/docker-user-namespaces-enabling-userns-remap-on-docker-toolbox/
- https://stackoverflow.com/a/49600083

</details>

### More info

See [LINKS](LINKS.md) file.

### Changelog

See auto-[CHANGELOG](CHANGELOG.md) file.

### Contributing

For your contributions please use:

- [git-flow workflow](https://danielkummer.github.io/git-flow-cheatsheet/)
- [conventional commits](https://www.conventionalcommits.org)

### Support

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="200" alt="Buy Me A Coffee">](https://buymeacoff.ee/frugan)

### License

(ɔ) Copyleft 2024 [Frugan](https://frugan.it).  
[GNU GPLv3](https://choosealicense.com/licenses/gpl-3.0/), see [COPYING](COPYING) file.
