#include <stdio.h>
int main ()
{

    int num1,num2;
    char operator;
printf("A Simple calculator by Anthony A. Cabulang\n");
printf("Enter an operator:\n'+' for addition,\n'-' for subtraction,\n'*' for multiplication,\n'/' for division,\n'%%' for modulus division): ");
scanf("%c",&operator);
printf("Enter first number: ");
scanf("%d",&num1);
printf("Enter second number: ");
scanf("%d",&num2);
switch (operator){
case'+':
    printf("\nResult: %.1d + %.1d is %.1d.",num1,num2,num1+num2);
    break;
case'-':
    printf("\nResult: %.1d - %.1d is %.1d.",num1,num2,num1-num2);
    break;
case'*':
    printf("\nResult: %.1d * %.1d is %.1d.",num1,num2,num1*num2);
    break;
case'/':
    printf("\nResult: %.1d / %.1d is %.1d.",num1,num2,num1/num2);
    break;
case'%':
    printf("\nResult: %.1d %% %.1d is %.1d.",num1,num2,num1%num2);
    break;
default:
    printf("The operator that you entered is wrong.");
    break;
}

return 0;
}
