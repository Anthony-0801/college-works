#include<stdio.h>
int main()

{
    int pd,pm,py,bd,bm,by;
    int month[]={31,28,31,30,31,30,31,31,30,31,30,31};
    printf("Programmed by Anthony A. Cabulang\n\n");
    printf("Please answer the provided questions with numbers, thank you!\n");
    printf("What is the present day for today?\n");
    scanf("%d",&pd);
    printf("What is the present month for today?\n");
    scanf("%d",&pm);
    printf("What is the present year for today?\n");
    scanf("%d",&py);
    printf("What is your birth date?\n");
    scanf("%d",&bd);
    printf("What is your birthmonth?\n");
    scanf("%d",&bm);
    printf("What is your birthyear?\n");
    scanf("%d",&by);

    if(bd>pd){pd=pd+month[bm-1];pm=pm-1;}
    if(bm>pm){py=py-1;pm=pm+12;}

    int fd=pd-bd;
    int fm=pm-bm;
    int fy=py-by;
    printf("Your Present Age is: %d Days %d Months %d Years",fd,fm,fy);

}
