//Anthony A. Cabulang BSIT-2A
public class PersonalLoan extends Loan {
private double interestRate;

public PersonalLoan(int num, String name, double amt, int yrs, double prime) {
super(num, name, amt, yrs);
this.interestRate = prime*100 + 2;
}

@Override
public String toString() {
return super.toString() + " at " + (int)interestRate + "% interest";
}


}