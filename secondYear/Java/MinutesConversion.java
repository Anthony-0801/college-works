//Anthony A. Cabulang BSIT-2A
import java.util.Scanner;
public class MinutesConversion {
    private static Scanner inputDevice;
    public static void main (String[]args) {
	
	final int footinInches = 12;
	int mins;
	int hours;
	float days;

	inputDevice = new Scanner(System.in);
	System.out.println ("Minutes to Convert: ");
	mins = inputDevice.nextInt();
	hours = mins/60;
	days = hours/24.0f;
	System.out.println (mins + "Minutes to convert: \n");
	System.out.println ( + mins + " minutes equals to " + hours + " hours, " + days + " days.");
    }
}