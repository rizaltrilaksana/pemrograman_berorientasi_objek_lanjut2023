#NAMA   : RIZAL TRLAKSANA
#NIM    : 210511054
#KELAS  : K1

class SegitigaMeta(type):
    def __init__(cls, name, bases, attrs):
        super().__init__(name, bases, attrs)

        def luas(cls, alas, tinggi):
            return (alas * tinggi) / 2
        cls.luas = classmethod(luas)

        def keliling(cls, sisi1, sisi2, sisi3):
            return sisi1 + sisi2 + sisi3
        cls.keliling = classmethod(keliling)

class Segitiga(metaclass=SegitigaMeta):
    pass
s = Segitiga()

luas_segitiga = Segitiga.luas(4, 5)
print("Luas segitiga:", luas_segitiga)

keliling_segitiga = Segitiga.keliling(3, 4, 5)
print("Keliling segitiga:", keliling_segitiga)