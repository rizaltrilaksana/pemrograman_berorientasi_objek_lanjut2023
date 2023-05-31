#NAMA   :RIZAL TRILAKSANA
#NIM    :210511054
#KELAS  :K1

def my_generator():
    try:
        yield 1
        yield 2
        yield 3
    except GeneratorExit:
        print("Generator stopped")

gen = my_generator()

print(next(gen))
print(next(gen))
gen.close()