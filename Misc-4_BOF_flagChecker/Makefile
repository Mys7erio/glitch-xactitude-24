# Makefile

COMPILE := gcc
CARGS := -fno-stack-protector
SRC := flagChecker.c
DEST := flagChecker.o

$(DEST): $(SRC)
	$(COMPILE) $(CARGS) $(SRC) -o $(DEST)

clean:
	rm -rf $(DEST) 
