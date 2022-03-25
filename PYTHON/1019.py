N = int(input(""))

horas = int(N / 3600)
resto = int(N % 3600)
minutos = int(resto / 60)
segundos = int(resto % 60)

print('{}:{}:{}'.format(horas,minutos,segundos))