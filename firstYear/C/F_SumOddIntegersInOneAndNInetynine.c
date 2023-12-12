#include <stdio.h>
int main()
{
int n=50,sum,count;
printf("\nThe odd numbers are:");
for (count=1;count<=n;count++)
    {printf("%5d\t \t \t",2*count-1);
sum+=2*count-1;}
printf("\nThe sum of odd natural numbers from 1-99 is: %d \n",sum);
}

