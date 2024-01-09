//Anthony A. Cabulang BSIT-2A
	 class Pizza 
{
	public String description;	
	public int price;
	public Pizza() {} 
	public Pizza (String desc, int pri)
{	this.description=desc;
	this.price=pri;
}
	public String toString()
{	return this.description+"Price: "+this.price;
}
}