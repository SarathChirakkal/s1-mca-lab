p=float(input("Enter the side length of a squre: "))
q=float(input("Enter the length of a rectangle: "))
r=float(input("Enter the width of a rectangle: "))
s=float(input("Enter the base length of the triangle: "))
t=float(input("Enter the height of the triangle: "))


x=lambda a:a*a
print(x(p))
y=lambda l,b:l*b
print(y(q,r))
z=lambda b,h:.5*b*h
print(z(s,t))