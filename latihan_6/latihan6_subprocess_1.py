#NAMA   : RIZAL TRLAKSANA
#NIM    : 210511054
#KELAS  : K1

import subprocess

def worker(num):
    print('worker', num)

if __name__ == '__main__':
  
    processes = []
   
    for i in range(5):

        p = subprocess.Popen(['python', '-c', 'import multiprocessing; multiprocessing.Process(target= worker,args=('+str(i)+',)).start()'],stdout=subprocess.PIPE, stderr=subprocess.PIPE)
        processes.append(p)
        
    for p in processes:
        out, err = p.communicate()
        print(out.decode('utf-8'), err.decode('utf-8'))