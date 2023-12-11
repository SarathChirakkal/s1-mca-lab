def fibo():
    n=int(input("Enter the range of series: "))
    a=0
    b=1
    if(n<0):
        print("Please enter a positive value")
    else:
        print(a)
        print(b)
        for i in range(3,n+1):
            nxt=a+b
            print(nxt)
            a=b
            b=nxt

fibo()