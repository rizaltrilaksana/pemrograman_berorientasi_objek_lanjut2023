#Nama   : Rizal Trilaksana
#Nim    : 210511054
#Kelas  : K1

try:
    s = '你好世界'
    s.encode('ascii')
except UnicodeTranslateError:
    print("Error: Failed to translate the string to ASCII encoding")