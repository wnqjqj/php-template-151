void f(){
 char * rName = getenv("test.txt");
 char buf[30];
 strncpy(buf, "/website/staticFiles/test.txt);
 strncat(buf, rName, 30);
 unlink(buf);
}