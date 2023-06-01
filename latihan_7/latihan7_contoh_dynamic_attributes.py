#NAMA   : RIZAL TRLAKSANA
#NIM    : 210511054
#KELAS  : K1

class Person:
    def __init__(self, name, age):
        self.name = name
        self.age = age

person = Person("John", 30)

person.address = "123 Main St."

person.age = 35
print(person.name)
print(person.age)
print(person.address)