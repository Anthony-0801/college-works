//Anthony A. Cabulang BSIT-2A
public class DemoPizzas 
{
	public static void main (String[]args) 
{ 	Pizza pizza=new Pizza("Sausage Pizza ",20);
	System.out.println(pizza.toString());

	Pizza pizza1=new Pizza("Ham and Cheese Pizza ",15);
	System.out.println(pizza1.toString());

	DeliveryPizza deliveryPizza=new DeliveryPizza("Toasted Pizza ", 20, "Damortis");
	System.out.println(deliveryPizza.printDetails());

	DeliveryPizza deliveryPizza1=new DeliveryPizza("Pineapple Pizza ", 15, "Agoo");
	System.out.println(deliveryPizza1.printDetails());	
}
}
