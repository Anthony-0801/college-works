//Anthony A. Cabulang BSIT-2A
 	class DeliveryPizza extends Pizza 
{
	public int fee;	
	public String address;
	public DeliveryPizza (String desc, int pri, String add) 
{ 	super (desc, pri); this.address= add; 
	if (super.price>15)
{	this.fee=3;
}	else	
{	this.fee=5;
}
}
	public String printDetails()
{	return super.toString()+"Fee: "+this.fee+","+"Address: "+this.address;
}
}