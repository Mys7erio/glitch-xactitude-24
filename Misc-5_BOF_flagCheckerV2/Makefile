# Makefile
# make sure to compile for 32 bit (!)

COMPILE := gcc
CARGS := -fno-stack-protector -m32 -z execstack
SRC := flagChecker_v2.c
DEST := flagChecker_v2.o

$(DEST): $(SRC)
	$(COMPILE) $(CARGS) $(SRC) -o $(DEST)

clean:
	rm -rf $(DEST)
