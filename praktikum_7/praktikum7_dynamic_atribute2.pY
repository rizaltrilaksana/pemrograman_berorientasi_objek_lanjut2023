#NAMA   : RIZALTRILAKSANA
#NIM    : 210511054
#KELAS  : K1

class menu:
    def __init__(self, nama,harga):
        self.nama = nama
        self.harga =harga

m = menu("gudeg", "10000")

m.khas = "Jogja"

m.harga = "10000"
print(m.nama)
print(m.harga)
print(m.khas)