def long_item(a):
    max=len(a[0])

    for i in a:
        if len(i)>max:
            max = len(i)
            temp=i
    print("The word is :",temp,"with length is",max)

a=["mango","apple","grape","orange"]
long_item(a)

