#include <stdio.h>
int main()
{
    do{
    int IC,CP,AA,PC,MMW,KKF,FPF;
    char choice;

    printf("\t\t\t\tACADEMIC RECORD\n");
    printf("\n*****************************************************************************");
    printf("\nPlease enter your grade in Intro to Computing: ");
    scanf("%d",&IC);
    printf("\nPlease enter your grade in Computer Programming: ");
    scanf("%d",&CP);
    printf("\nPlease enter your grade in Art Appreciation: ");
    scanf("%d",&AA);
    printf("\nPlease enter your grade in Purposive Communication: ");
    scanf("%d",&PC);
    printf("\nPlease enter your grade in Math in the Modern World: ");
    scanf("%d",&MMW);
    printf("\nPlease enter your grade in Kontekstwalisadong Komunikasyon sa Filipino: ");
    scanf("%d",&KKF);
    printf("\nPlease enter your grade in Fundamentals of Physical Fitness: ");
    scanf("%d",&FPF);
    printf("\n*****************************************************************************");
    printf("\n\t\t\t\tSUMMARY \n");
    printf("\n*****************************************************************************");
    printf("\n\tSUBJECT\t\t\tGRADE\t\tNUMERICAL RATING\tREMARKS\n");
    switch (IC){
        case 100:case 99:case 98:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:1.00 \tRemarks:Passed\n",IC);break;
        case 97: case 96:case 95:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:1.25 \tRemarks:Passed\n",IC);break;
        case 94: case 93:case 92:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:1.50 \tRemarks:Passed\n",IC);break;
        case 91: case 90:case 89:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:1.75 \tRemarks:Passed\n",IC);break;
        case 88: case 87:case 86:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:2.00 \tRemarks:Passed\n",IC);break;
        case 85: case 84:case 83:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:2.25 \tRemarks:Passed\n",IC);break;
        case 82: case 81:case 80:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:2.50 \tRemarks:Passed\n",IC);break;
        case 79: case 78:case 77:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:2.75 \tRemarks:Passed\n",IC);break;
        case 76: case 75:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:3.00 \tRemarks:Passed\n",IC);break;
        case 0:printf("Introduction to Computing  \tGrade:%d \tNumerical Rating:D \tRemarks:Dropped\n",IC);break;
        default:printf("Introduction to Computing  \tGrade:%d  \tNumerical Rating:INC  \tRemarks:Incomplete\n",IC);
    }
    switch (CP){
        case 100:case 99:case 98:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:1.00 \tRemarks:Passed\n",CP);break;
        case 97: case 96:case 95:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:1.25 \tRemarks:Passed\n",CP);break;
        case 94: case 93:case 92:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:1.50 \tRemarks:Passed\n",CP);break;
        case 91: case 90:case 89:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:1.75 \tRemarks:Passed\n",CP);break;
        case 88: case 87:case 86:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:2.00 \tRemarks:Passed\n",CP);break;
        case 85: case 84:case 83:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:2.25 \tRemarks:Passed\n",CP);break;
        case 82: case 81:case 80:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:2.50 \tRemarks:Passed\n",CP);break;
        case 79: case 78:case 77:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:2.75 \tRemarks:Passed\n",CP);break;
        case 76: case 75:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:3.00 \tRemarks:Passed\n",CP);break;
        case 0:printf("Computer Programming  \t\tGrade:%d \tNumerical Rating:D \tRemarks:Dropped\n",CP);break;
        default:printf("Computer Programming  \t\tGrade:%d  \tNumerical Rating:INC  \tRemarks:Incomplete\n",CP);
    }
     switch (AA){
        case 100:case 99:case 98:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:1.00 \tRemarks:Passed\n",AA);break;
        case 97: case 96:case 95:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:1.25 \tRemarks:Passed\n",AA);break;
        case 94: case 93:case 92:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:1.50 \tRemarks:Passed\n",AA);break;
        case 91: case 90:case 89:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:1.75 \tRemarks:Passed\n",AA);break;
        case 88: case 87:case 86:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:2.00 \tRemarks:Passed\n",AA);break;
        case 85: case 84:case 83:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:2.25 \tRemarks:Passed\n",AA);break;
        case 82: case 81:case 80:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:2.50 \tRemarks:Passed\n",AA);break;
        case 79: case 78:case 77:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:2.75 \tRemarks:Passed\n",AA);break;
        case 76: case 75:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:3.00 \tRemarks:Passed\n",AA);break;
        case 0:printf("Art Appreciation  \t\tGrade:%d \tNumerical Rating:D \tRemarks:Dropped\n",AA);break;
        default:printf("Art Appreciation  \t\tGrade:%d  \tNumerical Rating:INC  \tRemarks:Incomplete\n",AA);
    }
    switch (PC){
        case 100:case 99:case 98:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:1.00 \tRemarks:Passed\n",PC);break;
        case 97: case 96:case 95:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:1.25 \tRemarks:Passed\n",PC);break;
        case 94: case 93:case 92:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:1.50 \tRemarks:Passed\n",PC);break;
        case 91: case 90:case 89:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:1.75 \tRemarks:Passed\n",PC);break;
        case 88: case 87:case 86:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:2.00 \tRemarks:Passed\n",PC);break;
        case 85: case 84:case 83:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:2.25 \tRemarks:Passed\n",PC);break;
        case 82: case 81:case 80:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:2.50 \tRemarks:Passed\n",PC);break;
        case 79: case 78:case 77:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:2.75 \tRemarks:Passed\n",PC);break;
        case 76: case 75:printf("Purposive Communication  \tGrade:%d \tNumerical Rating:3.00 \tRemarks:Passed\n",PC);break;
        case 0:printf("Purposive Communication \tGrade:%d \tNumerical Rating:D \tRemarks:Dropped\n",PC);break;
        default:printf("Purposive Communication  \tGrade:%d  \tNumerical Rating:INC  \tRemarks:Incomplete\n",PC);
    }
    switch (MMW){
        case 100:case 99:case 98:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:1.00 \tRemarks:Passed\n",MMW);break;
        case 97: case 96:case 95:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:1.25 \tRemarks:Passed\n",MMW);break;
        case 94: case 93:case 92:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:1.50 \tRemarks:Passed\n",MMW);break;
        case 91: case 90:case 89:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:1.75 \tRemarks:Passed\n",MMW);break;
        case 88: case 87:case 86:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:2.00 \tRemarks:Passed\n",MMW);break;
        case 85: case 84:case 83:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:2.25 \tRemarks:Passed\n",MMW);break;
        case 82: case 81:case 80:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:2.50 \tRemarks:Passed\n",MMW);break;
        case 79: case 78:case 77:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:2.75 \tRemarks:Passed\n",MMW);break;
        case 76: case 75:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:3.00 \tRemarks:Passed\n",MMW);break;
        case 0:printf("Math in the Modern World  \tGrade:%d \tNumerical Rating:D \tRemarks:Dropped\n",MMW);break;
        default:printf("Math in the Modern World  \tGrade:%d  \tNumerical Rating:INC  \tRemarks:Incomplete\n",MMW);
    }
    switch (KKF){
        case 100:case 99:case 98:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:1.00 \tRemarks:Passed\n",KKF);break;
        case 97: case 96:case 95:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:1.25 \tRemarks:Passed\n",KKF);break;
        case 94: case 93:case 92:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:1.50 \tRemarks:Passed\n",KKF);break;
        case 91: case 90:case 89:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:1.75 \tRemarks:Passed\n",KKF);break;
        case 88: case 87:case 86:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:2.00 \tRemarks:Passed\n",KKF);break;
        case 85: case 84:case 83:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:2.25 \tRemarks:Passed\n",KKF);break;
        case 82: case 81:case 80:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:2.50 \tRemarks:Passed\n",KKF);break;
        case 79: case 78:case 77:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:2.75 \tRemarks:Passed\n",KKF);break;
        case 76: case 75:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:3.00 \tRemarks:Passed\n",KKF);break;
        case 0:printf("Kontekstwal na Komu.sa Filipino Grade:%d \tNumerical Rating:D \tRemarks:Dropped\n",KKF);break;
        default:printf("Kontekstwal na Komu.sa Filipino Grade:%d  \tNumerical Rating:INC  \tRemarks:Incomplete\n",KKF);
    }
     switch (FPF){
        case 100:case 99:case 98:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:1.00 \tRemarks:Passed\n",FPF);break;
        case 97: case 96:case 95:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:1.25 \tRemarks:Passed\n",FPF);break;
        case 94: case 93:case 92:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:1.50 \tRemarks:Passed\n",FPF);break;
        case 91: case 90:case 89:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:1.75 \tRemarks:Passed\n",FPF);break;
        case 88: case 87:case 86:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:2.00 \tRemarks:Passed\n",FPF);break;
        case 85: case 84:case 83:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:2.25 \tRemarks:Passed\n",FPF);break;
        case 82: case 81:case 80:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:2.50 \tRemarks:Passed\n",FPF);break;
        case 79: case 78:case 77:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:2.75 \tRemarks:Passed\n",FPF);break;
        case 76: case 75:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:3.00 \tRemarks:Passed\n",FPF);break;
        case 0:printf("Fundamental of Physical Fitness Grade:%d \tNumerical Rating:D \tRemarks:Dropped\n",FPF);break;
        default:printf("Fundamental of Physical Fitness Grade:%d  \tNumerical Rating:INC  \tRemarks:Incomplete\n",FPF);
        }
        printf("\nDo you want to calculate again?: Press y/n");
choice=getchar();
getchar();
}while(choice=='y' || choice=='Y');}



