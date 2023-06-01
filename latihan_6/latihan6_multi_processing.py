#NAMA   : RIZAL TRLAKSANA
#NIM    : 210511054
#KELAS  : K1

import multiprocessing


def worker(num):
    print('Worker', num)

if __name__ == '__main__':

    processes = []
    for i in range(5):
        p = multiprocessing.Process(target=worker, args=(i,))
        processes.append(p)
        p.start()


    for p in processes:
        p.join()