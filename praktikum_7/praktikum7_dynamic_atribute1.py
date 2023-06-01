#NAMA   : RIZALTRILAKSANA
#NIM    : 210511054
#KELAS  : K1

class mobil:
    def __init__(self, jenis,merk):
        self.jenis = jenis
        self.merk =merk

m = mobil("Fairlady", "Nissan")

m.cc = "2000 cc"

m.merk = "Nissan"
print(m.jenis)
print(m.merk)
print(m.cc)