FROM debian:stable-slim

RUN apt-get update \
    && apt-get install -y --no-install-recommends gcc libc6-dev \
    && rm -rf /var/lib/apt/lists/*

# for tcpserver
# RUN apt-get install ucspi-tcp

WORKDIR /app
COPY . /app

RUN gcc -fno-stack-protector /app/flagChecker.c -o /app/flagChecker.o

EXPOSE 5555

CMD ./ynetd -a 0.0.0.0 -p 5555 "timeout 30 ./flagChecker.o"


# Alternative ways to bind binary to port
#CMD tcpserver -t 50 -RHl0 0.0.0.0 6000 ./flagChecker.o
#CMD socat TCP-LISTEN:6000,fork,reuseaddr EXEC:"./flagChecker.o",pty,stderr

