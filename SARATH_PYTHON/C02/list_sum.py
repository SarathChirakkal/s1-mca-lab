
a=[]
n1=int(input("Enter the no of element in the list: "))
print("Enter",n1,"Elements")
for i in range(0,n1):
    a.append(int(input()))
print("List: ",a)
print("sum =",sum(a))