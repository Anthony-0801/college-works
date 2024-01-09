//Anthony A. Cabulang BSIT 2A
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