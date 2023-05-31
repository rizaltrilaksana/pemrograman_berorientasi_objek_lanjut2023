#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1

def print_list(lst):
    for item in lst:
        print(item)

try:
    print_list(undefined_list)
except ReferenceError as error:
    print(error)