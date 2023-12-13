#include <stdio.h>
int main()
{
int x;
x=1;
while (x<=50){
    printf("%d%c", x, (x%5) ? '\t':'\n');
    ++x;}
}

