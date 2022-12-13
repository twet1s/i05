#include <stdio.h>

int main() {
    float latitude, longitude;
    char info[80];
    
    int started = 0;

    puts("{\"date\": [");

    while (scanf("%f, %f, %79[^\n]", &latitude, &longitude, info) == 3) {
        if (started) {
            printf(",\n");
        } else {
            started = 1;
        }

        if((latitude < -90.0) || (latitude > 90.0)) {
            fprintf(stderr, "Incorrect latitude: %f\n", latitude);
        }
        if((longitude < -180.0) || (longitude > 180.0)) {
            fprintf(stderr, "Incorrect longitude: %f\n", longitude);
        }

        printf("    {\"latitude\": %f, \"longitude\": %f, \"info\": \"%s\"}", latitude, longitude, info);
    }
    puts("\n]\n}");
    return 0;    
}

