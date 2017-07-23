#include"stdio.h"
int main()
{
	int a=2,b;
	b=a++ + --a;
	printf("%d %d",a,b);
	return 0;
}
			