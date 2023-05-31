#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1

try:
    file = open("filengaco.txt", "r")
except OSError as error:
    print(error)