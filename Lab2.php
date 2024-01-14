<?php
      /* $j1=mt_rand(1,6);
	   $j1=array("Blue","Orange","Pink","Red","Black","Purple");  //Arrays in PHP would be called a structure in other languages
	   echo "My variable is $j1[0]. </br>"; //Array can't go in a quote statement
	   */
	  
	 
	 
	 
	 echo "*************** For Loop*************</br>";
	 /*for next loop example*/
	 $j=0;
	 for ($j=0;$j<11;$j++)
	 {
		echo "The value of J is $j ---- </br>"; 
	//	echo "My array variable is $j1[$j] </br>";
	 }
	 echo "*************** While Loop*************</br>";
	 /*while loop example*/
		$j=0;
		while($j < 11) 
		{
		echo "The number is: $j <br>";
		$j++;
		} 
	 
	  echo "*************** Do/While Loop*************</br>";
	  /*do while loop example*/
	  $j=0;
	  do
	  {
		  echo "The number is: $j <br>";
		  $j++;
	  }
	  while($j<11);
	  
	  
	 echo "*************** For Each Loop*************</br>";	
	  $my_colors=array("Blue","Orange","Pink","Red","Black","Purple");	
	 /*For Each loop*/
  $j = 0;
for ($j = 0; $j < 6;$j++) 
{
  echo "My color is $my_colors[$j] </br>";
}
 
      echo "*************** Break/Continue Loop*************</br>";
	  
      /*Break Continue  example*/
	  $j=0;
	  for ($j = 0; $j < 11; $j++) {
  if ($j == 11) {
    break;
  }
  echo "The number is: $j <br>";
}
	


	
?>

 