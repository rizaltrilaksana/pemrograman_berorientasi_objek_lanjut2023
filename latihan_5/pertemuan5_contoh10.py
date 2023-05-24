#NAMA   : RIZALTRILAKSANA
#NIM    : 210511054
#KELAS  : K1

#Mengatasi MemoryError
try:
    data = " " * (10**10)
except MemoryError:
    print("Memori tidak cukup untuk menampung data yang diminta!") 