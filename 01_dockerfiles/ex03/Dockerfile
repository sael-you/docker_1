FROM ubuntu
MAINTAINER sael-you

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update -q && apt-get upgrade -y -q \
 && apt-get install curl openssh-server ca-certificates postfix tzdata -y -q \
 && curl https://packages.gitlab.com/install/repositories/gitlab/gitlab-ce/script.deb.sh | bash \
 && apt-get install -y -q gitlab-ce

EXPOSE 80 443 1337

WORKDIR /root

RUN curl -o gitconf https://raw.githubusercontent.com/sael-you/docker_1/master/gitconf

CMD ["sh", "gitconf"]
