//Anthony A. Cabulang BSIT-2A
import java.util.Scanner;
public class InchestoFeetInteractive {
    public static void main (String[]args) {
	Scanner input = new Scanner (System.in);
	final int footinInches = 12;
	int inches;
	int feet;
	System.out.println ("Length in inches: ");
	inches = input.nextInt();
	feet = inches/footinInches;
	inches = inches%footinInches;
	System.out.println (feet + "Feet and " +inches+ " inches");
    }
}