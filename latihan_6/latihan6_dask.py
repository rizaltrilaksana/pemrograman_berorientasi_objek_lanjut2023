#NAMA   : RIZAL TRLAKSANA
#NIM    : 210511054
#KELAS  : K1

import dask.bag as db
def worker(num):

    print('Worker', num)
if __name__ == '__main__':
    bag = db.from_sequence(range(5))

bag.map(worker).compute()