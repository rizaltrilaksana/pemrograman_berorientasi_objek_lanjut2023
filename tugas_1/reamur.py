#NAMA   : RIZAL TRILAKSANA
#NIM    : 210511054
#KELAS  : K1

def Reamur(C):
    R = 4/5 * C
    return R

print("Konversi Suhu dari Celcius")
print("==========================")
C = float(input("masukkan suhu dalam Celcius:"))
R = Reamur(C)
print("celcius",str(C))
print("-------------")
print("Konversi ke Reamur -",R)