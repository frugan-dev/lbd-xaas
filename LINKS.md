# Usefull links

## Python

#### multiple env

- https://www.freecodecamp.org/news/manage-multiple-python-versions-and-virtual-environments-venv-pyenv-pyvenv-a29fb00c296f/
- https://medium.com/@adocquin/mastering-python-virtual-environments-with-pyenv-and-pyenv-virtualenv-c4e017c0b173
- https://github.com/ohmyzsh/ohmyzsh/tree/master/plugins/pyenv
- https://github.com/ohmyzsh/ohmyzsh/tree/master/plugins/python
- https://vietlq.medium.com/pyenv-on-ubuntu-mint-bb082e3c5ae8
- https://github.com/pyenv/pyenv/
- https://github.com/pyenv/pyenv/issues/2041#issuecomment-990253001
- https://stackoverflow.com/a/48045929/3929620

## Docker

#### Dockerfile

- https://sysdig.com/blog/dockerfile-best-practices/

#### secrets

- https://docs.docker.com/build/building/secrets
- https://docs.render.com/docker-secrets
- https://blog.taskforce.sh/building-docker-images-in-ci-using-a-secret/
- https://pythonspeed.com/articles/docker-build-secrets/

#### custom .dockerignore

- https://stackoverflow.com/a/57774684/3929620

#### busybox

- https://stackoverflow.com/a/56063572/3929620
- https://stackoverflow.com/a/67588080/3929620

#### compose environments

- https://stackoverflow.com/a/72368718/3929620
- https://stackoverflow.com/a/73451487/3929620
- https://stackoverflow.com/a/69622965/3929620

## As a service

#### general

- https://en.wikipedia.org/wiki/As_a_service
- https://kinsta.com/blog/xaas/
- https://kinsta.com/blog/function-as-a-service/
- https://hasura.io/blog/choosing-a-faas-function-as-a-service-provider
- https://cloud.google.com/learn/paas-vs-iaas-vs-saas
- https://www.hpe.com/it/it/what-is/caas.html
- https://www.plesk.com/blog/various/iaas-vs-paas-vs-saas-various-cloud-service-models-compared/

#### PaaS

- https://github.com/debarshibasak/awesome-paas
- https://www.porter.run/blog/history-of-paas-how-canon-almost-became-a-major-cloud-provider
- https://blog.back4app.com/heroku-alternatives/

> PaaS systems: Heroku, DigitalOcean Apps, Google App Engine, AWS Elastic Beanstalk, etc.

#### Wordpress on PaaS

- https://sailed.io
- https://easyengine.io/
- https://github.com/WordOps/WordOps

#### Dokku

- https://github.com/dokku/dokku/issues/1795#issuecomment-244243812
- https://github.com/swarmlet/swarmlet
- https://shokku.dev/

## Serverless

#### general

- https://github.com/anaibol/awesome-serverless
- https://jasonsmith.io/blog/a-brief-history-of-serverless/
- https://www.datadoghq.com/state-of-serverless/
- https://martinfowler.com/articles/serverless.html
- https://aws.amazon.com/serverless/
- https://azure.microsoft.com/en-us/overview/serverless-computing/
- https://cloud.google.com/serverless/
- https://medium.com/serverless-transformation/is-serverless-cheaper-for-your-use-case-find-out-with-this-calculator-2f8a52fc6a68
- https://medium.com/serverless-transformation/what-a-typical-100-serverless-architecture-looks-like-in-aws-40f252cd0ecb

#### serverless vs paas

- https://www.cloudflare.com/it-it/learning/serverless/glossary/serverless-vs-paas/

#### scaling

- https://docs.digitalocean.com/glossary/scaling/
- https://serverfault.com/questions/607490/google-app-engine-vertical-scaling
- https://medium.com/@g22shubham/kubernetes-autoscaling-cpu-vs-memory-44c769b7d102
- https://medium.com/serverless-transformation/is-serverless-cheaper-for-your-use-case-find-out-with-this-calculator-2f8a52fc6a68
- https://medium.com/serverless-transformation/what-a-typical-100-serverless-architecture-looks-like-in-aws-40f252cd0ecb

#### framework

- https://www.serverless.com
- https://medium.com/kodeyoga/serverless-framework-a73f63ab603b
- https://medium.com/@HirenDhaduk1/5-best-serverless-frameworks-to-watch-in-2022-a6722c05e3de

#### Devpod

- https://devpod.sh/
- https://dev.to/hrittikhere/supercharge-your-remote-development-environment-with-devpod-11ah
- https://devpod.sh/docs/other-topics/advanced-guides/minikube-vscode-browser

> Compared to hosted services such as Github Codespaces, JetBrains Spaces, or Google Cloud Workstations, DevPod (self hosted alternative to codespaces) has the following advantages:
> Cost savings: DevPod is usually around 5-10 times cheaper than existing services with comparable feature sets because it can use bare virtual machines.

#### Strapi

- https://www.restack.io/docs/strapi-knowledge-strapi-serverless-deployment
- https://docs.strapi.io/dev-docs/faq#can-strapi-be-run-in-serverless-environments
  
> Strapi is not well suited for serverless environments due to how the application is structured. Several actions happen while Strapi is booting that can take several seconds. Serverless deployment usually requires an application to cold boot very quickly. Strapi is designed to run as an always-on service, and we don't plan to decrease the cold boot time for the foreseeable future. Therefore, running Strapi in serverless environments is not a great experience, as every request will take seconds to respond to instead of milliseconds. Choosing between a cold boot or a warm boot is an architectural decision that many software developers need to take from a very early stage, so please consider this when choosing to use Strapi.

#### Laravel

- https://vapor.laravel.com/
- https://docs.vapor.build/introduction.html

#### WordPress

- https://ymirapp.com/
- https://carlalexander.ca/modern-wordpress-server-stack/
- https://github.com/carlalexander/debops-wordpress
- https://www.cloudways.com/en/autonomous.php
- https://en-ca.wordpress.org/plugins/ilab-media-tools/

#### Wordpress w/ Google storage

- https://it.wordpress.org/plugins/wp-stateless/

#### Wordpress on AWS Lambda

- https://repost.aws/questions/QUHXqWYpmiQh-YCGw9_lLDqA/is-it-possible-to-run-wordpress-on-lambda-using-aws-lambda-web-adapter
- https://blog.ymirapp.com/serverless-wordpress-aws/
- https://keita.blog/2019/06/27/serverless-wordpress-on-aws-lambda/
- https://keita.blog/2020/06/29/wordpress-on-aws-lambda-efs-edition/

> Invocation Payload limit for AWS Lambda is 6 MB
> The integration timeout for API Gateway is 29,000ms. Requests that are longer than 29 seconds will be terminated
> No FTP / SSH access — you’ll need to manage an EC2 instance if you need command line or direct file access.

#### Logging

- https://devopsideas.com/centralized-logging-using-graylog/

#### Google Cloud Logging vs Google Cloud Monitoring

- https://stackoverflow.com/a/63916807/3929620

#### comparison

- https://medium.com/@francismohitesh/aws-lambda-vs-azure-functions-vs-google-cloud-functions-a-comparison-of-serverless-platforms-5da5c9538d8b
- https://www.simform.com/serverless-computing-aws-lambda-vs-azure-functions-vs-google-cloud-functions/

## App Engine

#### free tier

- https://cloud.google.com/free/docs/free-cloud-features?#app-engine

#### installation

- https://cloud.google.com/sdk/docs/downloads-interactive
- https://cloud.google.com/sdk/docs/components

#### quotas and limits

- https://cloud.google.com/appengine/docs/standard/quotas
- https://cloud.google.com/appengine/docs/flexible/quotas

> File predefiniti per app: 10.000

#### Python support

- https://cloud.google.com/python/docs/python2-sunset
- https://cloud.google.com/appengine/docs/standard/runtimes
- https://cloud.google.com/appengine/docs/standard/lifecycle/support-schedule?python

#### local development

- https://github.com/GoogleCloudPlatform/cloud-sdk-docker
- https://cloud.google.com/sdk/docs/install
- https://github.com/rickpeters/google-app-engine
- https://github.com/JustinBeckwith/flem/
- https://github.com/aertje/cloud-tasks-emulator
- https://chaoming.li/blog/how-to-use-docker-for-go-app-engine-development-and-deploy-to-standard-environment/
- https://faun.pub/automating-google-app-engine-9599b51f0974
- https://github.com/drewkhoury/gae-demo
- https://github.com/drewkhoury/gcp-dev
- https://github.com/ibrunotome/docker-laravel-appengine

#### local development (standard)

- https://cloud.google.com/appengine/docs/standard/tools/using-local-server?tab=php
- https://cloud.google.com/appengine/docs/standard/tools/local-devserver-command?tab=php

#### local development (flexible)

- https://cloud.google.com/appengine/docs/flexible/php/runtime
- https://cloud.google.com/appengine/docs/flexible/php/configuring-your-app-with-app-yaml#v7.4-and-later
- https://cloud.google.com/appengine/docs/flexible/php/create-app

#### app.yaml

- https://cloud.google.com/appengine/docs/standard/reference/app-yaml
- https://stackoverflow.com/a/21711169/3929620

#### PHP application

- https://cloud.google.com/appengine/docs/standard/php-gen2/building-app
- https://cloud.google.com/appengine/docs/standard/php-gen2/runtime#application_startup
- https://github.com/GoogleCloudPlatform/php-docs-samples/tree/main/appengine/standard
- https://stackoverflow.com/a/56564960/3929620

#### Wordpress

- https://cloud.google.com/wordpress/
- https://cloud.google.com/php/tutorials/wordpress-app-engine-flexible
- https://wprecon.com/wordpress-google-app-engine/
- https://www.reddit.com/r/googlecloud/comments/o2okqh/hosting_wordpress_on_gcp_app_engine_vs_gke/

#### Laravel

- https://blog.devgenius.io/how-to-deploy-a-laravel-application-on-google-app-engine-gae-in-google-cloud-platform-gcp-25ef17286eba
- https://dev.to/bhaidar/guide-for-deploying-php-laravel-apps-on-the-google-cloud-platform-1ccl

#### Strapi

- https://www.youtube.com/watch?v=NkDaHDRsAwg

#### Cold boot

- https://stackoverflow.com/a/57056170/3929620
- https://medium.com/google-cloud/understanding-and-profiling-app-engine-cold-boot-time-908431aa971d
- https://medium.com/google-cloud/gae-startup-time-and-the-dependency-problem-b866d92c1e6f

#### errors

- https://issuetracker.google.com/issues/176839574

> TypeError: not expecting type '<class 'NoneType'>' 

#### standard vs flexible

- https://cloud.google.com/appengine/docs/the-appengine-environments
- https://cloud.google.com/appengine/docs/flexible/flexible-for-standard-users
- https://dev.to/bhaidar/guide-for-deploying-php-laravel-apps-on-the-google-cloud-platform-1ccl

> GCP offers two flavors of GAE: Standard and Flexible environment. In brief, the standard environment (https://cloud.google.com/appengine/docs/standard) has limitations that make it more suitable to host stateless Web applications that respond to HTTP requests quickly. The flexible environment (https://cloud.google.com/appengine/docs/flexible) runs your applications in Docker containers on Google Compute Engine virtual machines (VMs) (https://cloud.google.com/compute/docs/instances). It offers more flexibility and freedom to host any kind of Web application on Docker containers.

#### App Engine vs K8s

- https://www.reddit.com/r/googlecloud/comments/o2okqh/hosting_wordpress_on_gcp_app_engine_vs_gke/
- https://stackoverflow.com/questions/52258053/why-choosing-google-kubernetes-engine-instead-of-google-appengine

#### PaaS alternatives

- https://stackoverflow.com/questions/153721/what-alternatives-are-there-to-google-app-engine

## Cloud Run

#### local develop

- https://cloud.google.com/code/docs/vscode/develop-service

#### Cloud Run vs App Engine

- https://medium.com/google-cloud/cloud-run-vs-app-engine-whats-the-lowest-cost-6c82b874ed61
- https://dev.to/pcraig3/cloud-run-vs-app-engine-a-head-to-head-comparison-using-facts-and-science-1225
  
> App Engine runs 24/7 for the entire month whereas Cloud Run only runs when serving requests, and the difference is startling.

#### Cloud Run vs Cloud Functions

- https://www.linkedin.com/pulse/battle-serverless-supremacy-google-cloud-run-vs-functions-vinay-c-kpwac
  
> Cloud Run and Google Cloud Functions are two prominent serverless computing options
> Cloud Run is centred around containerization, allowing you to run entire containers, while Cloud Functions are based on the Function as a Service (FaaS) model, executing individual functions.

#### Cloud Run vs AWS Fargate

- https://medium.com/@dr.daler.boboev/serverless-container-showdown-aws-fargate-vs-google-cloud-run-vs-azure-container-instances-6dd91f9e7dda

#### Strapi

- https://medium.com/google-cloud/setting-up-strapi-on-google-cloud-run-with-cloud-sql-and-gcp-bucket-cda7fc5fc8b1
- https://www.restack.io/docs/strapi-knowledge-strapi-google-cloud-integration
- https://medium.com/google-cloud/strapi-headless-cms-google-cloud-run-and-postgresql-6126b597b10c

#### Wordpress

- https://github.com/GoogleCloudPlatform/deploystack-wordpress-on-cloudrun
- https://www.cloudbooklet.com/developer/how-to-install-wordpress-on-google-cloud-run-with-ssl/
- https://www.quora.com/What-are-the-pros-and-cons-of-running-a-Wordpress-blog-on-Google-Cloud-Run-compared-to-running-the-WordPress-blog-on-a-Google-Compute-Engine

## Minikube

#### install

- https://www.linuxtechi.com/how-to-install-minikube-on-debian/

#### Minikube, K3S/K3D, MicroK8S, KinD, etc.

- https://alperenbayramoglu2.medium.com/simple-comparison-of-lightweight-k8s-implementations-7c07c4e6e95f

## K8s

#### providers

- https://em360tech.com/top-10/top-10-managed-kubernetes-providers-2023
- https://www.cncf.io/training/certification/kcsp/
- https://collabnix.github.io/kubetools/

#### LAMP

- https://github.com/tuupola/php-docker-k8s/
- https://www.html.it/pag/451347/kubernetes-realizzare-unapplicazione-il-web-layer/
- https://medium.com/@areesmoon/writing-and-deploying-your-first-app-on-minikube-81c373089e10
- https://medium.com/@areesmoon/exposing-minikube-app-publicly-524f587b1ae0
- https://infotechys.com/creating-and-deploying-lamp-stack-on-minikube/
- https://dev.to/haamid/hello-world-kubernetes-with-nginx-on-minikube-643
- https://kubernetes.io/docs/tutorials/stateful-application/mysql-wordpress-persistent-volume/
- https://www.howtoforge.com/create-a-service-in-kubernetes/
- https://medium.com/@yaa.meir/build-pod-with-dual-micro-services-of-php-and-nginx-39c41fecd57b
- https://tkacz.pro/kubernetes-nginx-and-php-fpm/
- https://danielrotter.at/2023/05/30/configuring-nginx-with-php-fpm-in-kubernetes-and-the-file-not-found-error.html
- https://matthewpalmer.net/kubernetes-app-developer/articles/php-fpm-nginx-kubernetes.html

#### Laravel

- https://kubernetesforlaravel.com
- https://chris-vermeulen.com/laravel-in-kubernetes/
- https://learnk8s.io/blog/kubernetes-deploy-laravel-the-easy-way
- https://medium.com/@Ahmed75/deploy-laravel-application-on-kubernetes-best-practice-ce52af341df

#### stateful

- https://kubernetes.io/docs/tutorials/stateful-application/
- https://cloud.google.com/kubernetes-engine/docs/how-to/stateful-apps?hl=it
- https://medium.com/tektutor/deploying-stateful-applications-in-kubernetes-8ffd46920b55

#### Kustomize

- https://medium.com/@wadexu007/kustomize-simplifying-kubernetes-configuration-management-9b5d9c1169c3
- https://stackoverflow.com/questions/70467929/how-to-create-configmap-with-env-with-kustomize
- https://medium.com/@altairthinesh2/kustomize-kubernetes-configuration-management-23630d4f9c96
- https://stackoverflow.com/a/76816138/3929620
- https://github.com/wadexu007/learning_by_doing/tree/main/Kustomize/demo-manifests

#### configmap and secrets

- https://kubernetes.io/docs/tasks/configmap-secret/managing-secret-using-kustomize/
- https://stackoverflow.com/questions/70467929/how-to-create-configmap-with-env-with-kustomize
- https://pauldally.medium.com/kustomize-best-practices-part-4-1ddf24e88c41
- https://www.html.it/pag/437026/configmap-e-secret-in-kubernetes/
- https://stackoverflow.com/a/51269471/3929620
- https://www.jeffgeerling.com/blog/2019/mounting-kubernetes-secret-single-file-inside-pod
- https://stackoverflow.com/a/65824065/3929620

#### YAML

- https://dev.to/this-is-learning/basic-structure-of-kubernetes-configuration-file-i5e

#### service, loadbalancer and ingress

- https://home.robusta.dev/blog/kubernetes-service-vs-loadbalancer-vs-ingress

> A ClusterIP service is a good default choice for internal Services that don't need to be accessed outside the cluster.
> For Services that you'd like to expose externally, a LoadBalancer is a good choice unless you specifically need layer 7 functionality that only an Ingress allows.

- https://nws.netways.de/blog/2020/05/20/kubernetes-nginx-ingress-controller-this-is-how-you-make-a-simple-start/

#### SSL certificates

- https://minikube.sigs.k8s.io/docs/tutorials/custom_cert_ingress/
- https://github.com/cert-manager/cert-manager
- https://itnext.io/setting-up-self-signed-https-access-to-local-dev-k8s-cluster-in-minikube-539bc62ad62f
- https://traefik.io/blog/secure-web-applications-with-traefik-proxy-cert-manager-and-lets-encrypt/

#### volumes, subpath

- https://kubernetes.io/docs/tasks/access-application-cluster/communicate-containers-same-pod-shared-volume/
- https://stackoverflow.com/questions/59901574/kubernetes-share-non-empty-volume
- https://stackoverflow.com/questions/65471145/sharing-non-persistent-volume-between-containers-in-a-pod
- https://stackoverflow.com/a/46402618/3929620
- https://medium.com/@walissonscd/creating-a-kubernetes-pod-with-multiple-containers-and-a-shared-volume-257d9aa2081d
- https://cloudyuga.guru/blogs/subpath-in-kubernetes-volumes/
- https://stackoverflow.com/a/56499029/3929620

#### IPs

- https://stackoverflow.com/a/54265229/3929620
- https://stackoverflow.com/a/64006502/3929620
- https://alesnosek.com/blog/2017/02/14/accessing-kubernetes-pods-from-outside-of-the-cluster/

#### hooks, commands

- https://stackoverflow.com/a/72416903/3929620
- https://stackoverflow.com/a/39443876/3929620
- https://www.baeldung.com/linux/kubernetes-pass-many-commands

#### initContainer

- https://stackoverflow.com/a/56063572/3929620
- https://www.extraordy.com/gli-init-containers-in-kubernetes/
- https://kubernetes.io/docs/concepts/workloads/pods/init-containers/
- https://stackoverflow.com/questions/62589553/kubernetes-pod-for-one-time-initial-task

#### debug

- https://sysdig.com/blog/debug-kubernetes-crashloopbackoff/
- https://serverfault.com/a/730746/377751

#### hosting

- https://www.reddit.com/r/kubernetes/comments/12twk9d/traditional_shared_hosting_on_kubernetes/?rdt=43422

#### serverless (OpenFaas, OpenWhisk, Kubeless, Knative, Fission, Fn)

- https://www.appvia.io/blog/serverless-on-kubernetes

#### monitoring

- https://github.com/ddosify/ddosify
- https://github.com/getanteon/anteon

## GKE

#### free tier

- https://stackoverflow.com/a/67996933/3929620
- https://github.com/Neutrollized/free-tier-gke
- https://cloud.google.com/free/docs/free-cloud-features?#kubernetes-engine

#### Autopilot

- https://cloud.google.com/kubernetes-engine/docs/resources/autopilot-standard-feature-comparison
- https://cloud.google.com/kubernetes-engine/pricing#autopilot_mode

## AWS

#### general

- https://allcode.com/top-aws-services/

#### framework

- https://dev.to/slsbytheodo/the-best-serverless-framework-in-2023-a-data-driven-showdown-for-aws-projects-1p3h

#### local development w/ LocalStack

- https://awstip.com/run-aws-on-your-laptop-introduction-to-localstack-7269c19dedae
- https://alcantara-afonso.medium.com/localstack-aws-in-your-machine-and-for-free-its-a-dream-come-true-94437dc1c48
- https://medium.com/@BugDiver/an-intro-to-localstack-the-free-and-fake-aws-f84cb5fa4ad6
- https://rahullokurte.com/serverless-event-scheduling-with-aws-eventbridge-and-lambda-using-terraform-and-localstack#heading-what-is-localstack
- https://github.com/localstack-samples/localstack-on-eks
- https://docs.localstack.cloud/references/docker-images/

> To use the LocalStack Community image, you don't need to sign-up for an account on LocalStack Web Application. The Community image is free to use and does not require any API key to run.

#### AWS w/ Terraform

- https://github.com/antonbabenko/serverless.tf

#### AWS w/ Serverless Stack

- https://github.com/sst/sst
- https://seed.run/

#### Amazon Lightsail

- https://www.reddit.com/r/aws/comments/b05caz/difference_between_aws_ec2_lightsail_and_vpc/

#### AWS Lambda vs ec2

- https://www.linkedin.com/pulse/aws-lambda-vs-ec2-which-right-your-use-case-mr-a-banerjee

#### AWS Lambda vs Cloudflare workers

- https://serverlesstalent.com/compare/cloudflare-worker/aws-lambda
- https://medium.com/ddosify/cold-start-comparison-of-aws-lambda-and-cloudflare-workers-a3f9021ee60a

#### Elastic Beanstalk

- https://medium.com/mickeysden/multi-container-apps-on-elastic-beanstalk-7937785e2363
- https://www.lucasyamamoto.com/deploy-of-app-in-node-with-docker-and-elastic-beanstalk

#### Laravel on Elastic Beanstalk

- https://medium.com/@eloufirhatim/deploy-a-laravel-vite-application-on-amazon-aws-elastic-beanstalk-fcc4c6790fd5
- https://blog.memcachier.com/2019/01/28/laravel-elastic-beanstalk-and-memcache/
- https://dev.to/tanmaygi/deploy-a-phplaravel-app-on-aws-elastic-beanstalk-via-codepipeline-934

#### AWS rekognition

- https://docs.aws.amazon.com/it_it/rekognition/latest/dg/what-is.html
- https://iaay.medium.com/laravel-aws-rekognition-sdk-integration-757518974da9

#### Strapi

- https://www.restack.io/docs/strapi-knowledge-strapi-deployment-aws-guide
- https://docs.strapi.io/dev-docs/faq#why-are-my-applications-database-and-uploads-resetting-on-paas-type-services
- https://strapi.io/blog/how-to-deploy-strapi-docker-container-on-aws-elastic-beanstalk

> - Aws App Runner
> - Elastic Container Service
> - Elastic Beanstalk
> 
> App runner is the simplest. You can set up and run the container without doing many tasks, but it is not available in all regions. Elastic Container Service(ECS) is a service with a low-level abstraction to run and manage multiple containers(cluster). In our case, we just need to run one container, so Elastic Beanstalk is a perfect choice and is available in all regions.

#### SLA

- https://aws.amazon.com/it/legal/service-level-agreements/
- https://community.f5.com/kb/technicalarticles/sla-uptime-resiliency-and-why-100-uptime-can-be-misleading/311274

## Cloudflare

#### Edge

- https://blog.cloudflare.com/containers-on-the-edge/

#### Workers

- https://workers.cloudflare.com/
- https://medium.com/@segersian/serverless-edge-with-cloudflare-workers-9d9b13534e1e
- https://blog.cloudflare.com/using-workers-logs-to-gain-insight-into-your-serverless-apps/
- https://developers.cloudflare.com/workers/runtime-apis/kv
- https://modern-css.com/articles/web-development/embrace-jamstack-nextjs-cloudflare-workers
- https://logsnag.com/blog/deploying-nextjs-13-app-dir-to-cloudflare-pages
- https://developers.cloudflare.com/workers/configuration/sites/

#### Wordpress

- https://www.fogliata.net/full-page-cache-cloudflare-wordpress/

#### HTMX

- https://blog.yusu.ke/hono-htmx-cloudflare/

#### speed comparison

- https://blog.cloudflare.com/speed-week-2023-network-performance-update

#### CloudFront vs S3 Bucket

- https://stackoverflow.com/a/41953371/3929620

> CloudFront and S3 Bucket is not the same. In layman's terms: CloudFront enables you to accelerate content delivery of your web contents via Content Delivery Network (CDN) in edge locations, whereas S3 Buckets are where you store your actual files. CloudFront sources may not necessarily be from S3 but for easier visualization of S3 integration with CloudFront

## Miscellaneous

#### Tools

- https://app.diagrams.net/
- https://www.lucidchart.com/
- https://www.drawio.com
- https://lucid.co/
- https://technologyadvice.com/blog/information-technology/lucidchart-alternatives/
- https://logrocket.com/
- https://medium.com/@homebodify/5-reasons-why-im-more-excited-about-the-future-of-penpot-than-figma-286631ad30f8

#### Tailwind

- https://github.com/creativetimofficial/tailwind-starter-kit

#### Redis, Varnish

- https://www.cloudways.com/blog/varnish-vs-redis/
- https://www.paulsblog.dev/how-to-use-varnish-as-http-cache-for-your-blog/
- https://github.com/RedisLabs/memtier_benchmark

#### Git

- https://coffeeaddict.dev/how-to-manage-dotfiles-with-git-bare-repo/
- https://www.saintsjd.com/2011/01/what-is-a-bare-git-repository/

#### IaC, CI/CD

- https://blog.sparkfabrik.com/it/infrastructure-as-code-cosa-e-vantaggi
- https://www.redhat.com/en/topics/devops/what-is-ci-cd
- https://docs.gitlab.com/ee/ci/
- https://buildpacks.io/
- https://en.wikipedia.org/wiki/Test-driven_development
- https://katalon.com/resources-center/blog/ci-cd-tools
- https://medium.com/@diego.coder/introducci%C3%B3n-a-ci-cd-be79d0beafad

#### SRE

- https://blog.sparkfabrik.com/it/guides/sre-cos-e-vantaggi

#### Microservices

- https://microservices.io/
- https://www.ibm.com/cloud/learn/cloud-computing
- https://medium.com/javanlabs/micro-services-versus-monolithic-architecture-what-are-they-e17ddc8d3910

#### DevOps

- https://mia-platform.eu/it/blog/devops-dataops-gitops-noops-finops/
- https://www.dataopsmanifesto.org/
- https://www.gitops.tech/
- https://en.wikipedia.org/wiki/NoOps
- https://www.finops.org/

#### Agile, tdd, bdd, atdd

- https://www.agilealliance.org/agile101/12-principles-behind-the-agile-manifesto/
- https://blog.logrocket.com/product-management/12-agile-manifesto-principles-how-to-adopt-them/
- https://www.zerounoweb.it/software/tdd-bdd-atdd-e-altre-tecniche-di-sviluppo-agile-cosa-sono-a-che-cosa-servono-e-quando-servono/
- https://www.gianlucatramontana.it/2020/01/14/quali-differenze-tra-metodologia-agile-ci-cd-e-devops/

#### Stateless vs Stateful

- https://en.wikipedia.org/wiki/Stateless_protocol
- https://en.wikipedia.org/wiki/Stateful_protocol
- https://www.macrometa.com/blog/what-is-stateful-serverless
- https://www.virtasant.com/blog/stateful-vs-stateless-architecture-why-stateless-won

#### Laravel nova

- https://nova.laravel.com
  
> CRUD (create, read, update, delete)  
> BREAD (browse, read, edit, add, delete)

#### Opinionated Software Design

- https://www.baeldung.com/cs/opinionated-software-design

#### Headless CMS

- https://headlesscms.org/
- https://www.tech-prastish.com/blog/what-is-the-headless-cms-what-are-its-pros-cons/

#### PWA vs Native Apps

- https://web.dev/progressive-web-apps/
- https://www.simicart.com/blog/pwa-vs-native-apps/
- https://www.angularminds.com/blog/comparison-between-pwa-vs-native-apps

#### Deno js

- https://dev.to/franciscomendes10866/building-server-side-rendering-ssr-applications-with-deno-and-jsx-bk4

#### AI images

- https://www.imgix.com/pricing
- https://docs.aws.amazon.com/it_it/rekognition/latest/dg/what-is.html
- https://iaay.medium.com/laravel-aws-rekognition-sdk-integration-757518974da9
- https://webuters.medium.com/google-cloud-vision-vs-amazon-rekoginition-which-is-better-c7cb4780d82a
