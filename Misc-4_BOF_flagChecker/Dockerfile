FROM ubuntu:20.04

RUN apt-get update
#RUN apt-get install ucspi-tcp 

# for gcc
RUN apt-get install -y build-essential

WORKDIR /app
COPY . /app
RUN mv ./ynetd /usr/local/bin/ynetd

RUN gcc -fno-stack-protector /app/flagChecker.c -o /app/flagChecker.o
EXPOSE 5555

CMD ynetd -a 0.0.0.0 -p 5555 "timeout 30 ./flagChecker.o"


# Alternative ways to bind binary to port
#CMD tcpserver -t 50 -RHl0 0.0.0.0 6000 ./flagChecker.o
#CMD socat TCP-LISTEN:6000,fork,reuseaddr EXEC:"./flagChecker.o",pty,stderr

