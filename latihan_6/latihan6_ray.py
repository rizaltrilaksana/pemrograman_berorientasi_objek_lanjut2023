#NAMA   : RIZAL TRLAKSANA
#NIM    : 210511054
#KELAS  : K1

import ray

@ray.remote
def worker(num):
    print('Worker', num)

if __name__ == '__main__':

    ray.init()
   
    results = [worker.remote(i) for i in range(5)]

    ray.get(results)