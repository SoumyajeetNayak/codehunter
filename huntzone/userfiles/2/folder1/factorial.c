#include"stdio.h"
int fact(int i)
{
	int t;
	if(i==0 || i==1)
		return 1;
	else
	{
		t=i*fact(i-1);
		return t;
	}
}
int main()
{
	int i,f;
	printf("Enter the number:");
	scanf("%ld",&f);
	i=fact(f);
	printf("\nThe factorial of %ld is %ld",f,i);
	return 0;
}
			