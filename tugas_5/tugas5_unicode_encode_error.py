#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1

try:
    with open('file.txt', 'w', encoding='ascii') as f:
        f.write('Halo, dunia!')  
except UnicodeEncodeError:
    print("Error: Failed to encode the string with ASCII encoding")