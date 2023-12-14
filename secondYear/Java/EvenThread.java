// Anthony A. Cabulang BSIT 2A
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