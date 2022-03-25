sal = float(input())

if (sal >= 0 and sal <= 400.00):
    reajuste = (sal*0.15)
    novoSal = sal+reajuste
    percentual = 15
elif (sal > 400.00 and sal <= 800.00):
    reajuste = (sal*0.12)
    novoSal = sal+reajuste
    percentual = 12
elif (sal > 800.00 and sal <= 1200.00):
    reajuste = (sal*0.10)
    novoSal = sal+reajuste
    percentual = 10
elif (sal > 1200.00 and sal <= 2000.00):
    reajuste = (sal*0.07)
    novoSal = sal+reajuste
    percentual = 7
elif (sal > 2000.00):
    reajuste = (sal*0.04)
    novoSal = sal+reajuste
    percentual = 4
    
print('Novo salario: {:.2f}'.format(novoSal))
print('Reajuste ganho: {:.2f}'.format(reajuste))
print('Em percentual: {} %'.format(percentual))