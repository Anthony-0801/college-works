//Anthony A. Cabulang BSIT-2A
import java.util.*;
		
public class DemoTees
{
		public static void main(String[] args)  
{
		

	TeeShirt tee1 = new TeeShirt();  
			TeeShirt tee2 = new TeeShirt(); 
			

CustomTee tee3 = new CustomTee(); 
			

CustomTee tee4 = new CustomTee();  
			

tee1.setOrderNumber(1);  
			

tee1.setSize("M");  
			

tee1.setColor("red");
  


			tee2.setOrderNumber(2);  
			

tee2.setSize("S");  
			

tee2.setColor("orange");  

			

tee3.setOrderNumber(3);   
			

tee3.setSize("L");  
			
tee3.setColor("yellow");  
			

tee3.setSlogan("Born to be wild");  

			tee4.setOrderNumber(4);  

			tee4.setSize("XXXL");  

			tee4.setColor("green");  

			tee4.setSlogan("Rastaman for President");  
			display(tee1);  
			

display(tee2);  

			displayCustomData(tee3);  
			
displayCustomData(tee4);  
}  
		public static void display(TeeShirt tee) 
{			
System.out.println("Order #" + tee.getOrderNumber());  
			
System.out.println(" Description: " + tee.getSize() +  " " + tee.getColor());  
	
		System.out.println(" Price: $" + tee.getPrice()); 
}


		public static void displayCustomData(CustomTee tee) 
{  		
display(tee);  
		
System.out.println(" Slogan: " + tee.getSlogan());  
} }