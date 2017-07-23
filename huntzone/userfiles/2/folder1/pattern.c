#include"stdio.h"
int main()
{
	int i,j,s=-1;
	for(j=5;j>=1;j--)
	{
		for(i=j;i>=1;i--)
		{
			printf("%d\t",i);
		}
		for(i=1;i<=s;i++)
			printf("\t");
		if(j==5)
			for(i=2;i<=j;i++)
			{
			
			printf("%d\t",i);
			}
		else
			for(i=1;i<=j;i++)
			{
				
				printf("%d\t",i);
			}
		printf("\n");
		s=s+2;
	}
	
	return 0;
}
			