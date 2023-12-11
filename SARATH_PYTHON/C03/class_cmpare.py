class Rectangle:
    def __init__(self, length, breadth):
        self.__length = length
        self.__breadth = breadth

    def area(self):
        return self.__length * self.__breadth
    def __lt__(self,other):
        return self.area()< other.area()
    
a,b=map(int,input("Enter the length and breath of rectangle 1: ").split())
x,y=map(int,input("Enter the length and breath of rectangle 2: ").split())


rectangle1 = Rectangle(a,b)
rectangle2 = Rectangle(x,y)

if rectangle1 < rectangle2:
    print("rectangle1 is smaller than rectangle2")
else:
    print("rectangle1 is bigger than rectangle2")