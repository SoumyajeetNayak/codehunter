#include"stdio.h"
int main()
{
	int i=65,s=1,counter;
	while(i<=90)
	{
		counter=0;
		while(counter!=s)
		{
			printf("%c",i);
			counter++;
			i++;
			
		}
		printf("\n");
		s++;
		
	}
		
	return 0;
}
			