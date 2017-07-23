#include"stdio.h"
int main()
{
	int i,number,counter=0;
	scanf("%d",&number);
	for(i=1;i<=number;i++)
	{
		if(number%i==0)
			counter++;
	}
	if(counter==2)
		printf("%d is a Prime Number",number);
	else
		printf("%d is a  not Prime Number",number);
	
	return 0;
}
			