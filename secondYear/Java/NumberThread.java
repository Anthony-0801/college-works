// Anthony A. Cabulang BSIT 2A
import java.util.Scanner;

public class NumberThread {
    private static Scanner sc;
	public static void main(String [] args) {
        int limit, evenSum=0, oddSum=0;
        try (Scanner sc = new Scanner(System.in)) {
			System.out.print("Please Enter the Limit Number : ");
			limit = sc.nextInt();
			
		}
        Thread EvenThread = new Thread(new EvenThreadRunnable(limit));
        Thread OddThread = new Thread(new OddThreadRunnable(limit));
        EvenThread.start();
        OddThread.start();
    }
}
class EvenThreadRunnable implements Runnable {
    int limit;
    public EvenThreadRunnable(int limit) {
        this.limit = limit;
    }
@Override
    public void run() {
	int evenSum=0;
	for (int even =2;even <= limit;even+=2) {
		{
			evenSum = evenSum + even; 
		}
            System.out.println("\nThe Number is Even : " + even);
            System.out.println("\nThe Sum of Even Numbers up to " + limit + "  =  " + evenSum);
    		
try {
Thread.sleep(1000);

}
catch (InterruptedException e){

}
        }
    }
}

class OddThreadRunnable implements Runnable {
    int limit;
    public OddThreadRunnable(int limit) {
        this.limit = limit;
    }
@Override
    public void run() {
		int oddSum=0;
		for (int odd=1;odd <= limit;odd+=2) {
			{
    			oddSum = oddSum + odd; 
    		}
            System.out.println("\nThe Number is Odd : " + odd);
            System.out.println("\nThe Sum of Odd Numbers up to " + limit + "  =  " + oddSum);
    		
            try {
Thread.sleep(1000);

}
catch (InterruptedException e){

}

        }
    }
}