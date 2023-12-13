int main()
{
    int number, a, b, count = 1;

    number=10;
    count = number - 1;
    for (b = 1; b <= number; b++)
    {
        for (a = 1; a <= count; a++)
            printf(" ");
        count--;
        for (a = 1; a <= 2 * b - 1; a++)
            printf("*");
        printf("\n");
     }
     count = 1;
     for (b = 1; b <= number - 1; b++)
     {
         for (a = 1; a <= count; a++)
             printf(" ");
         count++;
         for (a = 1 ; a <= 2 *(number - b)-  1; a++)
             printf("*");
         printf("\n");
      }
      return 0;
}

