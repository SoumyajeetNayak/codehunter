#include"stdio.h"
int main()
{
	int a[10],size,i,val,pos,flag=0;
	scanf("%d",&size);
	for(i=0;i<size;i++)
		scanf("%d",&a[i]);
	scanf("%d",&val);
	for(i=0;i<size;i++)
	{
		if(a[i]==val)
		{
			pos=i+1;
			flag=1;
			break;
		}
	}
	if(flag==0)
		printf("%d is not found in the array:",val);
	else
		printf("%d is found at %dth position",val,pos);
		
	getch();
	return 0;
}
			
