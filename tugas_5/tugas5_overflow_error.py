#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1

import sys

try:
    x = sys.maxsize + 1
    y = x * x
except OverflowError as error:
    print(error)