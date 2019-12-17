FROM debian
MAINTAINER sael-you

RUN apt update && apt install -y \
	wget \ 
	bzip2 && \
	wget https://files.teamspeak-services.com/releases/server/3.10.2/teamspeak3-server_linux_amd64-3.10.2.tar.bz2 && \
	tar xfvj teamspeak3-server_linux_amd64-3.10.2.tar.bz2

ENV TS3SERVER_LICENSE accept

EXPOSE 30033 10011 9987

WORKDIR teamspeak3-server_linux_amd64

ENTRYPOINT ["./ts3server_minimal_runscript.sh"]
