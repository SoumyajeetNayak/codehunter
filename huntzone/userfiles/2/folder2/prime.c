#include"stdio.h"
int isPrime(int num)
{
	int i,flag=0;
	for(i=1;i<=num;i++)
	{
		if(num%i==0)
			flag++;
	}
	if(flag==2)
		return 1;
	else 
		return 0;
	
		
}
int main()
{
	int i,p;
	printf("Enter the number:");
	scanf("%d",&p);
	i=isPrime(p);
	if(i==0)
		printf("\n%d is not a prime number",p);
	else
		printf("\n%d is a prime number",p);
	return 0;
}
			 