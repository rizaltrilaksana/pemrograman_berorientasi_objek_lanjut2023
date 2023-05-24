#NAMA   : RIZALTRILAKSANA
#NIM    : 210511054
#KELAS  : K1

#Mengatasi FileNotFoundError

try:
    with open("file_yang_tidak_ada.txt") as file:
        data = file.read()
except FileNotFoundError:
    print("File yang diminta tidak ditemukan!") 