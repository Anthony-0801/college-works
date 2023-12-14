//Anthony A. Cabulang BSIT-2A 
public class BusinessLoan extends Loan {
private double interestRate;

public BusinessLoan(int num, String name, double amt, int yrs, double prime) {
super(num, name, amt, yrs);
this.interestRate = (prime*100) + 1;
}

@Override
public String toString() {
return super.toString() + " at " + (int)interestRate + "% interest";
}


}