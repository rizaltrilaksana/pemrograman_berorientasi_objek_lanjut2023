#NAMA    : RIZAL TRILAKSANA
#NIM     : 210511054
#KELAS   : K1 

try:
    name = input("masukan nama: ")
    if not name:
        raise EOFError("tidak ada input yang diterima")
    print("Hello, " + name)
except EOFError as error:
    print(error)