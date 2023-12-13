#include<stdio.h>
int main()
{//I use integer array for the following because I like to use arrays
int a[1];
    printf("Programmed by Anthony A. Cabulang\n\n");
    printf("Cube Sequence\n");
    //In this part I'll print the following text that ask for the input of the user
    printf("Please put the first low number and last high number. (Example:1 4)\t");
    //Next I'll scan it and store it the first user input a[0] and the last to a[1]
   scanf("%d %d",&a[0],&a[1]);
   printf("The cube sequence is:\n");
   //Then I'll use the for function that states if a[0] is less than or equal to a[1] then it will increment the value of a[0] by 1 everytime, but it will not exceed the value of a[1] that was filled out by the user.
   //Lastly I'll print the value of a[0] and multiply it to itself three times so that I can get the cube sequence.
   for (;a[0]<=a[1];++a[0])printf(" %d,",a[0]*a[0]*a[0]);

int b[1];
   printf("\n\nArithmetic Sequence by 3 that Resets When it Approached 0\n");
   //In this part I'll print the following text that ask for the input of the user
   printf("Please put the first negative number and last positive number. (Example:-5 12)\t");
   //Next I'll scan it and store it the first user input b[0] and the last to b[1]
   scanf("%d %d",&b[0],&b[1]);
   //Then I'll use the for function that states if b[0] is less than or equal to zero it will increment and add the value of a[0] to 3, then it will stop in the number of 0 and print it.
   //Lastly, I'll use another for function that states if b[0] is equal to 0, then it is less than b[1], this means that the loop will start at number 0, it will add three, and it will loop until it meets the value of b[1].
    for(;b[0]<=0 ;b[0]+=3)printf(" %d,",b[0]);{for(b[0]=0;b[0]<=b[1];b[0]+=3)printf(" %d,",b[0]);};

int c[1];
printf("\n\nArithmetic Sequence by -2\n");
//In this part I'll print the following text that ask for the input of the user
printf("Please put the first negative number and last negative number. (Example:-2 -12)\t");
//Next I'll scan it and store it the first user input c[0] and the last to c[1]
scanf("%d %d",&c[0],&c[1]);
printf("The arithmetic sequence is:\n");
//Then I'll use the for function that states if c[0] is greater than or equal to c[1], c[0]'s value will be subtracted to 2, it wlll loop out until it reach the value of c[1].
//lastly, it will print the aritmethic sequence.
for(;c[0]>=c[1];c[0]-=2)printf(" %d,",c[0]);

int d[1];
printf("\n\nArithmetic Sequence by 3\n");
//In this part I'll print the following text that ask for the input of the user
printf("Please put the first positive lowest number and the last highest positive number. (Example:1 10)\t");
//Next I'll scan it and store it the first user input d[0] and the last to d[1]
scanf("%d %d", &d[0],&d[1]);
printf("The arithmetic sequence is:\n");
//Then I'll use the for function that states if d[0] is less than or equal to d[1], d[0]'s value will be added to 3, it wlll loop out until it reach the value of d[1].
//Lastly it will print the aritmethic sequence.
for (;d[0]<=d[1];d[0]+=3)printf(" %d,",d[0]);
}
