#NAMA   : RIZAL TRILAKSANA
#NIM    : 210511054
#KELAS  : K1

class Peneliti:
    def __init__(self, nama, bidang):
        self.nama = nama
        self.bidang = bidang
    
    def tulis_jurnal(self, judul, isi):
        jurnal = Jurnal(judul, isi, self)
        return jurnal
    
class Jurnal:
    def __init__(self, judul, isi, penulis):
        self.judul = judul
        self.isi = isi
        self.penulis = penulis

p1 = Peneliti("gonzales", "olahraga")


j1 = p1.tulis_jurnal("metode pelatihan vertical jump dengan plyometric ", "pelatihan ini ditujukan untuk menambah vertical jump")


print(j1.judul)
print(j1.penulis.nama)