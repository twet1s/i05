#include <stdio.h>

int main() {
	int x, y, o;
	float z;
	printf("Vvedite x \n");
	scanf("%d", &x);
	printf("\nVvedite y\n");
 	scanf("%d", &y);
	
	printf("\nVvedite symbol\n");
	scanf("%d", &o);

	if(o == 1) {
		z = x + y;	
	} else if(o == 2) {
		z = x - y;
	} else if(o == 3) {
		z = x * y;
	} else if(o == 4 && y != 0) {
		z = (float)x / y;
	} else {
		z = 404404;
	}
	printf("%f\n", z);
	return 0;
}
