#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1

def divide(x, y):
    if y == 0:
        raise RuntimeError("pembagian dengan 0")
    else:
        return x / y

try:
    result = divide(10, 0)
except RuntimeError as error:
    print(error)