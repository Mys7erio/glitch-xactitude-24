#include <stdio.h>
#include <string.h>

#define FLAG_BUFF 64

int main(){

	char UserFlag[FLAG_BUFF];
	int flagCheck = 0;

	// read flag from local file.
	FILE *flag_file;
	char FLAG[100];
	flag_file = fopen("flag.txt", "r");
	fgets(FLAG, 100, flag_file);

    printf("+-------[ Flag Checker ]-----+\n");
	printf("\n[ Enter your flag ]=> ");
	gets(UserFlag);

	// ret 0 means right in strcmp.
	if (strcmp(UserFlag, FLAG)) {
		printf("\nThat isn't the flag we are looking for :(\n");
	}
	else {
		printf("\nThats Right!\n");
		flagCheck = 1;
	}

	if (flagCheck){
		printf("%s", FLAG);
		//printf("glitch{Cry1ng_0ver_5p1lt_buff3r}");
	}

	fclose(flag_file);
	return 0;
}
