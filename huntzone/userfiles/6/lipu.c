#include"stdio.h"
int main()
{
	int n,i, j,x,y=1;
	n=0;
	x=5;
	for(j=1;j<6;j++)
	{
		if(j==1)
		{
			for(i=x;i>1;i--)
			{
				printf("%d",i);
				printf("\t");
			}
		}
		else
		{
		for(i=x;i>=1;i--)
		{
		printf("%d",i);
		printf("\t");
		}
		}
		
		
		if(j>=2)
		{
		for(n=0;n<y;n++)
		{
			printf("\t");
		}
		y=y+2;
		}
		for(i=1;i<=x;i++)
		{
		printf("%d",i);
		printf("\t");
		}
		printf("\n");
		x--;
	}
	return 0;
}
			