#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1

try:

    for i in range(5):
        print(i)
        if i == 2:
            print("Item ke-2")
            print("Sedang dijalankan") 
except TabError as e:
    print("Terjadi TabError:", e)
