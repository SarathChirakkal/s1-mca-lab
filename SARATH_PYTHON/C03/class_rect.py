class Rectangle:
    def _init_(self, length, breadth):
        self.length = length
        self.breadth = breadth

    def area(self):
        return self.length * self.breadth

    def perimeter(self):
        return 2 * (self.length + self.breadth)
    
    
    def compare_area(self,other_rectangle):
        if self.area() > other_rectangle.area():
            return True
        elif self.area() < other_rectangle.area():
            return False
        else:
            return "Area is equal"

    
a,b=map(int,input("Enter the length and breath of rectangle 1: ").split())
x,y=map(int,input("Enter the length and breath of rectangle 2: ").split())


rectangle1 = Rectangle(a,b)
rectangle2 = Rectangle(x,y)

print("Area of rectangle 1:", rectangle1.area())
print("Perimeter of rectangle 1:", rectangle1.perimeter())
print("Area of rectangle 2:", rectangle2.area())
print("Perimeter of rectangle 2:", rectangle2.perimeter())

result=rectangle1.compare_area(rectangle2)
print("Comparison Result:",result)