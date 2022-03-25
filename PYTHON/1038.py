cod, quant = list(map(int,input().split()))

if cod == 1:
    total = float(4.00*quant)
    print("Total: R$ %.2f" %total)
elif cod == 2:
    total = float(4.50*quant)
    print("Total: R$ %.2f" %total)
elif cod == 3:
    total = float(5.00*quant)
    print("Total: R$ %.2f" %total)
elif cod == 4:
    total = float(2.00*quant)
    print("Total: R$ %.2f" %total)
elif cod == 5:
    total = float(1.50*quant)
    print("Total: R$ %.2f" %total)
    