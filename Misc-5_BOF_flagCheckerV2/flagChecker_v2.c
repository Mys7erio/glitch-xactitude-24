#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define FLAG_BUFF 60

// vulnerable function
void userInput(){
  char buff[FLAG_BUFF];
  gets(buff);

  puts("\nGood flag, keep it safe!");
}

// EIP target FUNCTION
void readFlag() {

  char flag[FLAG_BUFF];

  FILE *f = fopen("flag.txt","r");

  if (f == NULL) {
    printf("\nERROR: flag file missing.\n");
    exit(0);
  }

  fgets(flag, FLAG_BUFF, f);
  printf(flag);
}


int main(){

  setvbuf(stdout, NULL, _IONBF, 0);

  printf("-------FlagCheckerV2--------\n");
  puts("Please enter your flag: ");

  userInput();
  return 0;
}

