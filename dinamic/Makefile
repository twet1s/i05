main: hfcal.o main.o
	gcc main.o hfcal.o -o main

hfcal.o: hfcal.c hfcal.h
	gcc -c hfcal.c

main.o: main.c hfcal.h
	gcc -c main.c
