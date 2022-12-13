#include <stdio.h>
#include <stdlib.h>
#include <errno.h>
#include <unistd.h>

int main(int argc, char *argv[])
{
    char *feeds[] = {"http://www.cnn.com/rss/celebs.xml",
                    "http://www.rollingstone.com/rock.xml",
                    "http://www.eonline.com/gossip.xml"};
int times = 3;
char *phrase = argv[1];
int i;

for (i = 0; i < times; i++) {
    char var[255];
    sprintf(var, "RSS_FEED = %s", feeds[i]);
    char *vars[] = {var, NULL};
    pid_t pid = fork();
    if (pid == -1) {
        fprintf(stderr, "Не могу клонировать процесс: %s\n", strerror(errno));
        return 1;
    }
    if (!pid) {
        if (execle("/usr/bin/python", "/usr/bin/python", "./rssgossip.py", phrase, NULL, vars) == -1) {
            fprintf(stderr, "Не могу запустить скрипт: %s\n", strerror(errno));
            return 1;
             }
        }
    }
return 0;
}