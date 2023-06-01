#NAMA   : RIZALTRILAKSANA
#NIM    : 210511054
#KELAS  : K1

class hewan:
    def __init__(self, nama,jenis):
        self.nama = nama
        self.jenis =jenis

h = hewan("kucing", "mamalia")

h.ras = "angora"

h.jenis = "mamalia"
print(h.nama)
print(h.jenis)
print(h.ras)