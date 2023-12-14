//Anthony A. Cabulang BSIT-2A
public class Billing {
  
  public static double computeBill(double bookPrice) {
  double tax = 0.08*bookPrice;
  return bookPrice + tax;
  }
  
  public static double computeBill(double bookPrice, int quantity){
  double tax = 0.08*(bookPrice*quantity);
  return (quantity*bookPrice)+tax;
  }
  public static double computeBill(double bookPrice, int quantity, double couponValue) {
  double tax = 0.08 * (bookPrice*quantity);
  return ((quantity * bookPrice)+ tax)-couponValue;
  }
  
  public static void main(String args[]) {
    System.out.println(computeBill(10));
    System.out.println(computeBill(10, 2));
    System.out.println(computeBill(10, 20, 50));
  }
}
