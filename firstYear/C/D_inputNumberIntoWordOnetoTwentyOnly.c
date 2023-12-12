#include <stdio.h>
int main()
{
    int numbers;
    printf("Enter a number from 1-20: ");
    scanf("%d",&numbers);
    switch (numbers){
    case 1:printf("The number in word is one.",numbers);break;
    case 2:printf("The number in word is two.",numbers);break;
    case 3:printf("The number in word is three.",numbers);break;
    case 4:printf("The number in word is four.",numbers);break;
    case 5:printf("The number in word is five.",numbers);break;
    case 6:printf("The number in word is six.",numbers);break;
    case 7:printf("The number in word is seven.",numbers);break;
    case 8:printf("The number in word is eight.",numbers);break;
    case 9:printf("The number in word is nine.",numbers);break;
    case 10:printf("The number in word is ten.",numbers);break;
    case 11:printf("The number in word is eleven.",numbers);break;
    case 12:printf("The number in word is twelve.",numbers);break;
    case 13:printf("The number in word is thirteen.",numbers);break;
    case 14:printf("The number in word is fourteen.",numbers);break;
    case 15:printf("The number in word is fifteen.",numbers);break;
    case 16:printf("The number in word is sixteen.",numbers);break;
    case 17:printf("The number in word is seventeen.",numbers);break;
    case 18:printf("The number in word is eighteen.",numbers);break;
    case 19:printf("The number in word is nineteen.",numbers);break;
    case 20:printf("The number in word is twenty.",numbers);break;
    default:printf("The number you entered doesn't belong to 1-20.",numbers);
    }
return 0;
}

