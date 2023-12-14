
//Anthony A. Cabulang BSIT-2A
class Circle {
// How to define a constant in Java
private final double PI = 3.14159;
// radius of circle
private double radius;

// no arg Constructor
public Circle() {
radius = 0.0;
}
// Parameterized constructor
public Circle(double r) {
radius = r;
}
//Setter (Mutator) method for radius
public void setRadius(double r) {
radius = r;
}
//Getter (Accessor) method for radius
public double getRadius() {
return radius;
}
// method to calculate and return area
public double getArea() {
return PI * radius * radius;
}
}
 class CircleTest {

public static void main(String[] args) {

//create first circle object with
//no arg constructor
Circle circle1 = new Circle();
// Create a second circle object with
//parameterized constructor
Circle circle2 = new Circle(3.5);

//call getArea() method for object circle1
System.out.println("Area of circle for first object circle1 with radius 0="+circle1.getArea());
//call getArea() method for object circle2
System.out.println("Area of circle for second object circle2="+circle2.getArea());
//set radius of first circle to 1.5
circle1.setRadius(1.5);
//once again call getArea() method for object circle1
System.out.println("Area of circle for first object circle1 with radius 1.5="+circle1.getArea());

}

}
