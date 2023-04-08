#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1


#pastikan modul playsound sudah terinstall
from playsound import playsound

class Hewan:
    suara = "gaada.wav"

    def mainkan_suara(self):
        playsound(self.suara)

class Anjing(Hewan):
    suara = "anjing.wav"

class Kucing(Hewan):
    suara = "cat.wav"

class Babi(Hewan):
    suara = "babi.wav"

class Jangkrik(Hewan):
    suara = "jangkrik.wav"

class Sapi(Hewan):
    suara = "sapi.wav"

class Kodok(Hewan):
    suara = "kodok.wav"

class Kuda(Hewan):
    suara = "kuda.wav"

class Monyet(Hewan):
    suara = "monkey.wav"

class Owl(Hewan):
    suara = "owl.wav"

class Singa(Hewan):
    suara = "singa.wav"

#instansiasi
anjing=Anjing()
kucing=Kucing()
babi=Babi() 
jangkrik=Jangkrik()
sapi=Sapi()
kodok=Kodok()
kuda=Kuda()
monyet=Monyet()
owl=Owl()
singa=Singa()

#contoh pemanggilan
anjing.mainkan_suara()
kucing.mainkan_suara()
babi.mainkan_suara()
jangkrik.mainkan_suara()
sapi.mainkan_suara()
kodok.mainkan_suara()
kuda.mainkan_suara()
monyet.mainkan_suara()
owl.mainkan_suara()
singa.mainkan_suara()

#apa bila terjadi error coba upgrade/downgrade ke module playsound versi 1.2.2

