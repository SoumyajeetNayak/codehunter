<?php
/****************************************************************************************************
* OBJECTIVE:TO USE THE PHP SCRIPT TO INVOKE DOS COMMAND LINE ARGUMENTS TO CREATE A ONLINE C COMPILE *
* PURPOSE:DEVELOPED FOR COLLEGE PROJECT 													        *
* DEVELOPED BY: SOUMYAJEET NAYAK(B.TECH(IT))		      											*
* DATE:16TH MAY 2014		 																		*
* PLACE:BADMAL	       					 															*
* VERSION 2.7                                            										*
*****************************************************************************************************/
	session_start();
	if(isset($_POST['content']))
	{
		$code=$_POST['content'];
		$input=$_POST['input'];
		$user_id=$_SESSION['id'];
		$user = $user_id."user";
		$filename=$user_id."userfile.c";//This is the file name created for user
		$compile='gcc -o '.$user.' '.$filename.' 2> "comop.txt"';//DOS COMMAND TO EXECUTE THE C FILE
/*************************************************************************************************************
*		List of files created:																				 *
*		1.userfile.c -> THE C PROGRAM IS STORED IN THIS FILE.												 *
*		2.inp.txt    -> THE INPUT FROM THE TEXT BOX TO BE GIVEN TO THE PROGRAM ARE STORED IN THIS FILE.      *
*		3.comop.txt  -> THE OUTPUT OF COMPILATION IS STORED IN THIS FILE.IT IS OF SIZE 0 IF NO ERROR OCCURS. *
*		4.op.txt     -> THE OUTPUT OF THE EXECUTABLE FILE IS STORED IN THIS FILE.        					 *
*		5.a.exe      -> THE EXECUTALBE IS STORED IN THIS FILE.                                                *
**************************************************************************************************************/
		if(!empty($code))
		{
			$handle=fopen($filename,"w");//OPENING THE userfile.c
			//$handle2=fopen("../userfiles/".$user_id."/tmp.txt","w");
			
			fwrite($handle,$code."\n");//WRITING TO userfile.c FROM $code TAKEN FORM THE EDITOR
			//fwrite($handle2,$code."\n");
			//fclose($handle2);
			$handle1=fopen("inp.txt","w");//OPENING THE inp.txt
			fwrite($handle1,$input."\n");//WRITING TO inp.txt FROM $input TAKEN FORM THE USER INPUT
			shell_exec($compile);//THE FUNCTION IS EXECUTING THE COMPILATION COMMAND
			$filesize=filesize("comop.txt");//FINDING THE FILE SIZE OF THE FILE THAT GIVES THE COMPILATION REPORT(ZERO SIZE MEANS N//O ERROR)
			if($filesize==0)//no error
			{
				$run=$user.".exe<inp.txt>op.txt";//DOS COMMAND TO RUN THE a.exe FILE
				shell_exec($run);//RUNNING COMMAND IN PROGRESS
				$rough= file_get_contents("op.txt");//STORING OUTPUT TO THE FILE op.txt
				$bvar= file_get_contents("inp.txt");//STORING inp.txt FILE CONTENT 
				fclose($handle);//CLOSING userinput.c
				fclose($handle1);//CLOSING inp.txt
				$del1="del ".$filename;//DELETING ALL CREATED FILES LINE 45 TO 54
				shell_exec($del1);
				$del3="del inp.txt";
				shell_exec($del3);
				$del4="del op.txt";
				shell_exec($del4);
				$del5="del comop.txt";
				shell_exec($del5);
				$del2="del ".$user.".exe";
				shell_exec($del2);
				echo "1#".$rough ;
			}
			else //when error is found
			{
				
				$control=1;
				$rough= file_get_contents("comop.txt");
				fclose($handle);
				fclose($handle1);
				$del="del comop.txt";
				shell_exec($del);
				$del1="del userfile.c";
				//shell_exec($del1);
				$del3="del inp.txt";
				shell_exec($del3);
				echo "2#".$rough;
			}
			
		}
		else
		{
			echo "Please write some code to compile and execute";
		}
	}
	else
	{
		
	}
	$del2="del a.exe";
	shell_exec($del2);
?>