a=[]
b=[]
n1=int(input("Enter the no of element in the first list: "))
print("Enter",n1,"Elements")
for i in range(0,n1):
    a.append(int(input()))
n2=int(input("Enter the no of element in the second list: "))
print("Enter",n2,"Elements")
for i in range(0,n2):
    b.append(int(input()))
print("firstlist: ",a)
print("secondlist: ",b)

if a==b:
    print("Both list contain same element")
else:
     print("Both list contain different element")

if sum(a)==sum(b):
     print("Both list have same sum")
else:
     print("Both list have different sum")

if n1==n2:
    print("Both list contain same no of element")
else:
     print("Both list contain different no of element")
for x in a:
    for y in b:
        if(x==y):
            print(x,"occur in both list")