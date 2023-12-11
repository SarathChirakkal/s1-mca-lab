n=int(input("Enter a number : "))
print("Factors are")
for i in range(1,n+1):
    if(n%i==0):
        print(i,end=" ")