#NAMA   :RIZAL TRILAKSANA
#NIM    :210511054
#KELAS  :K1

import math

try:
    result = math.sqrt(-1)
    print(result)
except FloatingPointError as error:
    print(error)