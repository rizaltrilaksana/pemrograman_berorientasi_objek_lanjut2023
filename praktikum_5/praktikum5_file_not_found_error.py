#NAMA   : RIZAL TRILAKSANA
#NIM    : 210511054
#KELAS  : K1
try:
    file = open("file_tidak_ada.txt", "r")
    print(file.read())
    file.close()
except FileNotFoundError:
    print("File tidak ditemukan! Mohon pastikan file sudah tersedia di direktori yang benar.")