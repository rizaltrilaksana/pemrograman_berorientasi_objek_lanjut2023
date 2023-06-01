#NAMA   : RIZAL TRLAKSANA
#NIM    : 210511054
#KELAS  : K1

from pathos.multiprocessing import ProcessPool

def worker(num):
  
    print('Worker', num)

if __name__ == '__main__':
   
    pool = ProcessPool(2)
   
    pool.map(worker, range(5))