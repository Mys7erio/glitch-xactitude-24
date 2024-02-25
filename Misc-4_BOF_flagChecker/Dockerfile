FROM ubuntu:20.04

RUN apt-get update
RUN apt-get install ucspi-tcp 
RUN apt-get install -y build-essential

WORKDIR /app
COPY . /app

RUN gcc -fno-stack-protector /app/flagChecker.c -o /app/flagChecker.o

EXPOSE 63124

CMD tcpserver -t 50 -RHl0 0.0.0.0 63124 ./flagChecker.o
