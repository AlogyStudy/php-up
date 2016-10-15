public class OverTest 
{
	public static void main(String[] args)
	{
			Calc calc = new Calc();
			System.out.println(calc.area(10));
			System.out.println(calc.area(5, 8));
	}
}

class Calc 
{
	public double area(float r)
	{
		return 3.14 * r * r;
	}
	public int area( int width, int height )
	{
		return width * height;
	}
}