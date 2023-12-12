#include <stdio.h>
int main()
{
    int IC,CP,AA,PC,MMW,KKF,FPF;
    printf("\t\t\t\t\t ACADEMIC RECORD\n");
    printf("*****************************************************************************");
    printf("\nPlease enter your grade in Intro to Computing: ");
    scanf("%d",&IC);
    switch (IC){
        case 100:case 99:case 98:printf("Grade:%d Numerical Rating:1.00 Remarks:Passed\n",IC);break;
        case 97: case 96:case 95:printf("Grade:%d Numerical Rating:1.25 Remarks:Passed\n",IC);break;
        case 94: case 93:case 92:printf("Grade:%d Numerical Rating:1.50 Remarks:Passed\n",IC);break;
        case 91: case 90:case 89:printf("Grade:%d Numerical Rating:1.75 Remarks:Passed\n",IC);break;
        case 88: case 87:case 86:printf("Grade:%d Numerical Rating:2.00 Remarks:Passed\n",IC);break;
        case 85: case 84:case 83:printf("Grade:%d Numerical Rating:2.25 Remarks:Passed\n",IC);break;
        case 82: case 81:case 80:printf("Grade:%d Numerical Rating:2.50 Remarks:Passed\n",IC);break;
        case 79: case 78:case 77:printf("Grade:%d Numerical Rating:2.75 Remarks:Passed\n",IC);break;
        case 76: case 75:printf("Grade:%d Numerical Rating:3.00 Remarks:Passed\n",IC);break;
        case 0:printf("grade:%d Numerical Rating:D Remarks:Dropped\n",IC);break;
        default:printf("Grade:%d  Numerical Rating:INC  Remarks:Incomplete\n",IC);
    }
    printf("\nPlease enter your grade in Computer Programming: ");
    scanf("%d",&CP);
    switch (CP){
        case 100:case 99:case 98:printf("Grade:%d Numerical Rating:1.00 Remarks:Passed\n",CP);break;
        case 97: case 96:case 95:printf("Grade:%d Numerical Rating:1.25 Remarks:Passed\n",CP);break;
        case 94: case 93:case 92:printf("Grade:%d Numerical Rating:1.50 Remarks:Passed\n",CP);break;
        case 91: case 90:case 89:printf("Grade:%d Numerical Rating:1.75 Remarks:Passed\n",CP);break;
        case 88: case 87:case 86:printf("Grade:%d Numerical Rating:2.00 Remarks:Passed\n",CP);break;
        case 85: case 84:case 83:printf("Grade:%d Numerical Rating:2.25 Remarks:Passed\n",CP);break;
        case 82: case 81:case 80:printf("Grade:%d Numerical Rating:2.50 Remarks:Passed\n",CP);break;
        case 79: case 78:case 77:printf("Grade:%d Numerical Rating:2.75 Remarks:Passed\n",CP);break;
        case 76: case 75:printf("Grade:%d Numerical Rating:3.00 Remarks:Passed\n",CP);break;
        default:printf("Grade:%d  Numerical Rating:INC  Remarks:Incomplete\n",CP);break;
        case 0:printf("grade:%d Numerical Rating:D Remarks:Dropped\n",CP);break;
    }
    printf("\nPlease enter your grade in Art Appreciation: ");
    scanf("%d",&AA);
    switch (AA){
        case 100:case 99:case 98:printf("Grade:%d Numerical Rating:1.00 Remarks:Passed\n",AA);break;
        case 97: case 96:case 95:printf("Grade:%d Numerical Rating:1.25 Remarks:Passed\n",AA);break;
        case 94: case 93:case 92:printf("Grade:%d Numerical Rating:1.50 Remarks:Passed\n",AA);break;
        case 91: case 90:case 89:printf("Grade:%d Numerical Rating:1.75 Remarks:Passed\n",AA);break;
        case 88: case 87:case 86:printf("Grade:%d Numerical Rating:2.00 Remarks:Passed\n",AA);break;
        case 85: case 84:case 83:printf("Grade:%d Numerical Rating:2.25 Remarks:Passed\n",AA);break;
        case 82: case 81:case 80:printf("Grade:%d Numerical Rating:2.50 Remarks:Passed\n",AA);break;
        case 79: case 78:case 77:printf("Grade:%d Numerical Rating:2.75 Remarks:Passed\n",AA);break;
        case 76: case 75:printf("Grade:%d Numerical Rating:3.00 Remarks:Passed\n",AA);break;
        default:printf("Grade:%d  Numerical Rating:INC  Remarks:Incomplete\n",AA);break;
        case 0:printf("grade:%d Numerical Rating:D Remarks:Dropped\n",AA);break;
    }
    printf("\nPlease enter your grade in Purposive Communication: ");
    scanf("%d",&PC);
    switch (PC){
        case 100:case 99:case 98:printf("Grade:%d Numerical Rating:1.00 Remarks:Passed\n",PC);break;
        case 97: case 96:case 95:printf("Grade:%d Numerical Rating:1.25 Remarks:Passed\n",PC);break;
        case 94: case 93:case 92:printf("Grade:%d Numerical Rating:1.50 Remarks:Passed\n",PC);break;
        case 91: case 90:case 89:printf("Grade:%d Numerical Rating:1.75 Remarks:Passed\n",PC);break;
        case 88: case 87:case 86:printf("Grade:%d Numerical Rating:2.00 Remarks:Passed\n",PC);break;
        case 85: case 84:case 83:printf("Grade:%d Numerical Rating:2.25 Remarks:Passed\n",PC);break;
        case 82: case 81:case 80:printf("Grade:%d Numerical Rating:2.50 Remarks:Passed\n",PC);break;
        case 79: case 78:case 77:printf("Grade:%d Numerical Rating:2.75 Remarks:Passed\n",PC);break;
        case 76: case 75:printf("Grade:%d Numerical Rating:3.00 Remarks:Passed\n",PC);break;
        default:printf("Grade:%d  Numerical Rating:INC  Remarks:Incomplete\n",PC);break;
        case 0:printf("grade:%d Numerical Rating:D Remarks:Dropped\n",PC);break;
    }
    printf("\nPlease enter your grade in Math in the Modern World: ");
    scanf("%d",&MMW);
    switch (MMW){
        case 100:case 99:case 98:printf("Grade:%d Numerical Rating:1.00 Remarks:Passed\n",MMW);break;
        case 97: case 96:case 95:printf("Grade:%d Numerical Rating:1.25 Remarks:Passed\n",MMW);break;
        case 94: case 93:case 92:printf("Grade:%d Numerical Rating:1.50 Remarks:Passed\n",MMW);break;
        case 91: case 90:case 89:printf("Grade:%d Numerical Rating:1.75 Remarks:Passed\n",MMW);break;
        case 88: case 87:case 86:printf("Grade:%d Numerical Rating:2.00 Remarks:Passed\n",MMW);break;
        case 85: case 84:case 83:printf("Grade:%d Numerical Rating:2.25 Remarks:Passed\n",MMW);break;
        case 82: case 81:case 80:printf("Grade:%d Numerical Rating:2.50 Remarks:Passed\n",MMW);break;
        case 79: case 78:case 77:printf("Grade:%d Numerical Rating:2.75 Remarks:Passed\n",MMW);break;
        case 76: case 75:printf("Grade:%d Numerical Rating:3.00 Remarks:Passed\n",MMW);break;
        default:printf("Grade:%d  Numerical Rating:INC  Remarks:Incomplete\n",MMW);break;
        case 0:printf("grade:%d Numerical Rating:D Remarks:Dropped\n",MMW);break;
    }
    printf("\nPlease enter your grade in Kontekstwalisadong Komunikasyon sa Filipino: ");
    scanf("%d",&KKF);
    switch (KKF){
        case 100:case 99:case 98:printf("Grade:%d Numerical Rating:1.00 Remarks:Passed\n",KKF);break;
        case 97: case 96:case 95:printf("Grade:%d Numerical Rating:1.25 Remarks:Passed\n",KKF);break;
        case 94: case 93:case 92:printf("Grade:%d Numerical Rating:1.50 Remarks:Passed\n",KKF);break;
        case 91: case 90:case 89:printf("Grade:%d Numerical Rating:1.75 Remarks:Passed\n",KKF);break;
        case 88: case 87:case 86:printf("Grade:%d Numerical Rating:2.00 Remarks:Passed\n",KKF);break;
        case 85: case 84:case 83:printf("Grade:%d Numerical Rating:2.25 Remarks:Passed\n",KKF);break;
        case 82: case 81:case 80:printf("Grade:%d Numerical Rating:2.50 Remarks:Passed\n",KKF);break;
        case 79: case 78:case 77:printf("Grade:%d Numerical Rating:2.75 Remarks:Passed\n",KKF);break;
        case 76: case 75:printf("Grade:%d Numerical Rating:3.00 Remarks:Passed\n",KKF);break;
        default:printf("Grade:%d  Numerical Rating:INC  Remarks:Incomplete\n",KKF);break;
        case 0:printf("grade:%d Numerical Rating:D Remarks:Dropped\n",KKF);break;
    }
    printf("\nPlease enter your grade in Fundamentals of Physical Fitness: ");
    scanf("%d",&FPF);
    switch (FPF){
        case 100:case 99:case 98:printf("Grade:%d Numerical Rating:1.00 Remarks:Passed\n",FPF);break;
        case 97: case 96:case 95:printf("Grade:%d Numerical Rating:1.25 Remarks:Passed\n",FPF);break;
        case 94: case 93:case 92:printf("Grade:%d Numerical Rating:1.50 Remarks:Passed\n",FPF);break;
        case 91: case 90:case 89:printf("Grade:%d Numerical Rating:1.75 Remarks:Passed\n",FPF);break;
        case 88: case 87:case 86:printf("Grade:%d Numerical Rating:2.00 Remarks:Passed\n",FPF);break;
        case 85: case 84:case 83:printf("Grade:%d Numerical Rating:2.25 Remarks:Passed\n",FPF);break;
        case 82: case 81:case 80:printf("Grade:%d Numerical Rating:2.50 Remarks:Passed\n",FPF);break;
        case 79: case 78:case 77:printf("Grade:%d Numerical Rating:2.75 Remarks:Passed\n",FPF);break;
        case 76: case 75:printf("Grade:%d Numerical Rating:3.00 Remarks:Passed\n",FPF);break;
        default:printf("Grade:%d  Numerical Rating:INC  Remarks:Incomplete\n",FPF);break;
        case 0:printf("grade:%d Numerical Rating:D Remarks:Dropped\n",FPF);break;
    }
return 0;
}
