#include <stdio.h>
#include <string.h>
//I've set this two as a global variable
char String_One[]="Hello, how are you doing?",String_Two[]="I am doing great! How about you?";
int main ()
{
 printf("Programmed by Anthony A. Cabulang \n");
 printf("String One=\"Hello, how are you doing?\"\nString Two=\"I am doing great! How about you?\"\n");
 printf("\n***Compare two strings whether they are the same or not***");
 /*I use strcmp function to compare the two strings and store it in int results
 and do a condition that will print whatever the condition that was fulfilled*/
 int results;
 results=strcmp(String_One,String_Two);
 if (results<0)printf("\nThe strings are not the same",results)?(results==0):printf("\nThe strings are same",results);
/*I declare some integers and set the condition that detects some vowels
 the program will read the entire length of String One and as as the program approach the set condition (the vowels),
the system will add +1 to the starting point which is zero.*/
int len, i, vow=0;
printf("\n\n***Count the number of vowels in String One***");
len=strlen(String_One);
for(i=0;i<len;i++){
        if (String_One[i]=='a' || String_One[i]=='A' || String_One[i]=='e' || String_One[i]=='E' || String_One[i]=='i' || String_One[i]=='I' ||
        String_One[i]=='o' || String_One[i]=='O' || String_One[i]=='u' || String_One[i]=='U') vow=vow+1;}
 printf("\nThe number of vowels in String One is %d.",vow);
/*Just like from the top, I've set some integers and use the function strlen to count the lenght of String Two
I've also set out a condition in which if the program approach some whitespaces, it will break it down and now a word is separated
from the sentence*/
 int j, endIndex, startIndex=0;
 printf("\n\n***Count the length of each word in String Two***");
 for (j=0; j<strlen(String_Two); j++)
 {
        if(String_Two[j]==' '||j==strlen(String_Two)-1)
    {
        endIndex=j; printf("\n%.*s=%d",(endIndex-startIndex),String_Two+startIndex,(endIndex-startIndex));startIndex=j+1;
    }
 }
/*This time I use two string functions, strcat and strcpy, I use strcat to copy the value of String Two to String One
then I use strcpy to copy the combined value of String 1 and 2 (which is stored in String One) finally, it was stored in String Three.*/
 char String_Three[100];
 printf("\n\n***Add the values of String_One and String_Two. Store it in String_Three then displays its value.***\n");
 strcat(String_One,String_Two);
 strcpy(String_Three,String_One);
 puts (String_Three);
//I use the string function strupr, to capitalized all letters of String Three then print it.
 printf("\n\n***Convert String_Three to all capital letters.***\n");
 printf("%s",strupr(String_Three));
/*Just like the usual, I've declared some integers and a new character string, in which the program runs the whole length
of String Three and when it finds a whitespaces it removes it according to the set condition and lastly it prints the result*/
 int k=0, l=0, lens;
 char st[100];
 printf("\n\n***Remove all spaces in String_Three.***");
 lens=strlen(String_Three);
 while (String_Three[k]!= '\0'){
    if(String_Three[k]!=' '){
        st[l++]=String_Three[k];
    }k++;
 }st[k]='\0';
 printf("\n%s",st);
//I use the strlen function to find the length of String Three and print it.
 printf("\n\n***Count the length of String_Three.***\n");
 printf("The length of String Three is %d.",strlen(String_Three));
 }


