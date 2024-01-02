//Anthony A. Cabulang BSIT-2A

import java.util.Scanner;

public class Insurance {
static int age;
static int premium;
static int decades;
public static void main (String [] args) {
	Scanner sc = new Scanner (System.in);
	System.out.print("Enter your age in current year: ");
	age = sc.nextInt();
	decades = age/10;
	premium = (decades + 15)*20;
	System.out.println("");
	System.out.println("The annual premium to be paid for age "+age+" is $" +premium);
}
}