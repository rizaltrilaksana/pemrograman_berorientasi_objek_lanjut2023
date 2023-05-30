#NAMA   : RIZALTRILAKSANA
#NIM    : 210511054
#KELAS  : K1

num1 = 10
num2 = 0

try:
    result = num1 / num2
    print(result)
except ZeroDivisionError:
    print("Tidak dapat membagi dengan nol! Mohon pastikan nilai variabel kedua tidak bernilai nol.")