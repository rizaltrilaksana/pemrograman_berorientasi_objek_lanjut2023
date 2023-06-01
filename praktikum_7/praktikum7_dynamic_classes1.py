#NAMA   : RIZALTRILAKSANA
#NIM    : 210511054
#KELAS  : K1

def custom_kendaraan(tipe_kendaraan):
    class kendaraan:
        def __init__(self, brand, warna):
            self.tipe_kendaraan = tipe_kendaraan
            self.brand = brand
            self.warna = warna

        def __repr__(self):
            return f"{self.brand} {self.tipe_kendaraan} ({self.warna})"

    return kendaraan


Car = custom_kendaraan("Mobil")
Motorcycle = custom_kendaraan("Motor")


car1 = Car("Nissan", "Merah")
car2 = Car("Peugeot", "Biru")

motorcycle1 = Motorcycle("Honda", "Hijau")
motorcycle2 = Motorcycle("Kawasaki", "Orange")

print(car1)  
print(car2)  

print(motorcycle1)  
print(motorcycle2)  