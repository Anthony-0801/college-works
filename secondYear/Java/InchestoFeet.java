//Anthony A. Cabulang BSIT-2A
public class InchestoFeet {
    public static void main (String args []) {
	final int footinInches = 12;
	int inches = 86;
	int feet;
	feet = inches/footinInches;
	inches = inches%footinInches;
	System.out.println (feet + "Feet and " +inches+ " inches");
    }
}