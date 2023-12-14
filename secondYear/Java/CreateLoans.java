//Anthony A. Cabulang BSIT-2A
import java.util.*;

public class CreateLoans implements LoanConstants {
public static void main(String[] args) {
double primeInterestRate;

Scanner sc = new Scanner(System.in);
int choice,accNo,term;
String name;
double loanAmt;
System.out.println("Welcome to "+LoanConstants.COMPANY);
System.out.println("Enter the current prime interest rate as a decimal number, for example, .05");
primeInterestRate=sc.nextDouble();
Loan loans[]=new Loan[5];
for(int i=0;i<loans.length;i++)
{
System.out.println("Is this a (1) Business loan or (2) Personal loan");
choice=sc.nextInt();
if(choice==1)
{

System.out.println("Enter account number");
accNo=sc.nextInt();
System.out.println("Enter name:");
name=sc.next();

while(true)
{
System.out.println("Enter loan amount");
loanAmt=sc.nextDouble();
if(loanAmt>LoanConstants.MAXLOAN)
{
System.out.println("Invalid.Must be <="+LoanConstants.MAXLOAN);
}
else
break;
}


while(true)
{
System.out.println("Enter term:");
term=sc.nextInt();
if(term!=LoanConstants.SHORT_TERM && term!=LoanConstants.MEDIUM_TERM && term!=LoanConstants.LONG_TERM)
{
System.out.println("** Invalid.Must be either 1 or 3 or 5 **");
}
else
{
break;
}
}

BusinessLoan bl=new BusinessLoan(accNo, name,loanAmt,term, primeInterestRate);
loans[i]=bl;
}
else if(choice==2)
{

System.out.println("Enter account number");
accNo=sc.nextInt();
System.out.println("Enter name:");
name=sc.next();

System.out.println("Enter loan amount");
loanAmt=sc.nextDouble();

System.out.println("Enter term:");
term=sc.nextInt();
PersonalLoan pl=new PersonalLoan(accNo, name,loanAmt,term, primeInterestRate);
loans[i]=pl;
}
}

System.out.println("\n");
System.out.println(LoanConstants.COMPANY);
for(int i=0;i<loans.length;i++)
{
System.out.println(loans[i]);
}

}
}