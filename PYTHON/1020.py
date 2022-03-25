dias = int(input())

anos = dias//365
dias %= 365
mes = dias//30
dias %= 30

print("%d ano(s)"%anos)
print("%d mes(es)"%mes)
print("%d dia(s)"%dias)
