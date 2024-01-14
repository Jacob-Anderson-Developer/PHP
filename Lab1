<?php
 /* LAB 1
 PHP
 
 LOU'S LUNCH
 
 Student: Jacob Anderson
 Date: 1/20/2022
 
 **NARRATIVE:**
 Lou and his four friends have lunch every day at Sally's Diner.  
 They agree to share equally the cost.
 
 Lou is always there.
 Sam is there 80% of the time
 Mike is there 70% of the time
 Bill is there 50% of the time
 Ted is there 50% of the time.
 
 Bill and Ted are always together.
 Every one orders one of the same five things.
 
 **Menu Items:**
 French Dip - $7.29
 Hamburger - $5.49
 Reuben Sandwich - $6.49
 Club Sandwich - $7.29
 Bowl of Chili - $4.49
 
 Tip - $1.00
 They round up for each meal for additional tip.
 If Ted is present he Tips Sally an additional $1.00 
 
 Your goal:
 Create a simulation showing who is present, 
             (Randomize who is present)
             (Echo who is present)
 what they order, 
              (Randomize what they order)
            (Echo what they ordered and how much it is)
 How much each paid
           (Add together every meal and add 6.5% sales tax)
           (Round up each meal value) and then add $1.00.
		(Echo the ending equal cost to everyone) 
		(echo the total tax)
what the tip to Sally is.
		(Determine how much tip Sally receives.
** Rank sort by cost what everyone ordered **
     Name - What ordered  - cost



Hey Jim,

Here is my lazy version of the project.  I plan on writing the sorting code you have given us, just because I think it is extremely useful and I want to know how to do it.  
If my work is not satisfactory, I will submit it with the correct sorting mechanism.  Really enjoying class so far!


 */
 /*Declarations*/
 $l1="Lou";$l2=1;$l3="";$l4=0;$l5=0;$l6=0;
 $s1="Sam";$s2=0;$s3="";$s4=0;$s5=0;$s6=0;
 $m1="Mike";$m2=0;$m3="";$m4=0;$m5=0;$m6=0;
 $b1="Bill";$b2=0;$b3="";$b4=0;$b5=0;$b6=0;
 $t1="Ted";$t2=0;$t3="";$t4=0;$t5=0;$t6=0;
 
 $tax = 1.065;
$billTot=0; $louTot=0; $mikeTot=0; $samTot=0; $tedTot=0;
$bTax=0; $lTax=0; $mTax=0; $sTax=0; $tTax=0;

 /*
   1-name
   2-present
   3- order name
   4- order cost
   5 used later
   6 used later
 */
 /* Randomize process*/
	/*Lou*/
	$total_people=1;
	$tip="1";
	$f=mt_rand(1,5);   		//Generate a random number between 1 - 5 representing the five different items.
	//	echo "$f </br>";
		
			if($f<2)
			{
				$l3 = "French Dip";
				$l4 = round(7.29*1.065,2);
				$lTax = round(7.29*.065,2);
				$l5 = ceil($l4)-$l4;
				$louTot = ceil($l4) + 1;
				echo "Lou got A $l3 </br>";
			    echo "It cost $$louTot after tax and tip. </br>";
				echo "Sally got an additional $$l5 </br>";
				
			}
			elseif($f<3)
			{
				$l3 = "Club Sandwich";
				$l4 = round(7.29*1.065,2);
				$lTax = round(7.29*.065,2);
				$l5 = ceil($l4)-$l4;
				$louTot = ceil($l4) + 1;
				echo "Lou got A $l3 </br>";
			    echo "It cost $$louTot after tax and tip. </br>";
				echo "Sally got an additional $$l5 </br>";
				
			}
			elseif($f<4)
			{
				$l3 = "Reuben Sandwich";
				$l4 = round(6.49*1.065,2);
				$lTax = round(6.49*.065,2);
				$l5 = ceil($l4)-$l4;
				$louTot = ceil($l4) + 1;
				echo "Lou got A $l3 </br>";
			    echo "It cost $$louTot after tax and tip. </br>";
				echo "Sally got an additional $$l5 </br>";
				
			}
			elseif($f<5)
			{
				$l3 = "Hamburger";
				$l4 = round(5.49*1.065,2);
				$lTax = round(5.49*.065,2);
				$l5 = ceil($l4)-$l4;
				$louTot = ceil($l4) + 1;
				echo "Lou got A $l3 </br>";
			    echo "It cost $$louTot after tax and tip. </br>";
				echo "Sally got an additional $$l5 </br>";
			}
			else
			{
				$l3 = "Bowl of Chili";
				$l4 = round(4.49*1.065,2);
				$lTax = round(4.49*.065,2);
				$l5 = ceil($l4)-$l4;
				$louTot = ceil($l4) + 1;
				echo "Lou got A $l3 </br>";
			    echo "It cost $$louTot after tax and tip. </br>";
				echo "Sally got an additional $$l5 </br>";
			}
			
			
	echo " </br>";
	
	

// Sam is there 80% of the time
	
	$r=mt_rand(1,100);     		//Generate a random number between 1-100
	$chance=81;					//Set Chance to 81
    if($r<$chance)         		//If a number below 81 is hit
	{
		$tip += 1;				//1 Dollar tip to Sally
		$s2=1;             		//It is true that Sam is Present
		$total_people += 1; 	//Add one to the total people for the average amount owed decided later
		$f=mt_rand(1,5);   		//Generate a random number between 1 - 5 representing the five different items.
		//	echo "$f </br>";
		
if($f<2)
			{
				$s3 = "French Dip";
				$s4 = round(7.29*1.065,2);
				$sTax = round(7.29*.065,2);
				$s5 = ceil($s4)-$s4;
				$samTot = ceil($s4) + 1;
				echo "Sam got A $l3 </br>";
			    echo "It cost $$samTot after tax and tip. </br>";
				echo "Sally got an additional $$s5 </br>";
				
			}
			elseif($f<3)
			{
				$s3 = "Club Sandwich";
				$s4 = round(7.29*1.065,2);
				$sTax = round(7.29*.065,2);
				$s5 = ceil($s4)-$s4;
				$samTot = ceil($s4) + 1;
				echo "Sam got A $l3 </br>";
			    echo "It cost $$samTot after tax and tip. </br>";
				echo "Sally got an additional $$s5 </br>";
				
			}
			elseif($f<4)
			{
				$s3 = "Reuben Sandwich";
				$s4 = round(6.49*1.065,2);
				$sTax = round(6.49*.065,2);
				$s5 = ceil($s4)-$s4;
				$samTot = ceil($s4) + 1;
				echo "Sam got A $l3 </br>";
			    echo "It cost $$samTot after tax and tip. </br>";
				echo "Sally got an additional $$s5 </br>";
				
			}
			elseif($f<5)
			{
				$s3 = "Hamburger";
				$s4 = round(5.49*1.065,2);
				$sTax = round(5.49*.065,2);
				$s5 = ceil($s4)-$s4;
				$samTot = ceil($s4) + 1;
				echo "Sam got A $l3 </br>";
			    echo "It cost $$samTot after tax and tip. </br>";
				echo "Sally got an additional $$s5 </br>";
			}
			else
			{
				$s3 = "Bowl of Chili";
				$s4 = round(4.49*1.065,2);
				$sTax = round(4.49*.065,2);
				$s5 = ceil($s4)-$s4;
				$samTot = ceil($s4) + 1;
				echo "Sam got A $l3 </br>";
			    echo "It cost $$samTot after tax and tip. </br>";
				echo "Sally got an additional $$s5 </br>";
			}
			
			
	}
	else
	{
		echo "Sam did not attend. </br>";
	}
	
	
echo " </br>";

// Mike is there 70% of the time


	$r=mt_rand(1,100);     		//Generate a random number between 1-100
	$chance=71;
    if($r<$chance)    			//If a number below 71 is hit
	{	
		$tip += 1;				//1 dollar tip to Sally
		$m2=1;					//It is true that Mike is present
		$total_people += 1;		//Add one to the total people
		$f=mt_rand(1,5);   		//Generate a random number between 1 - 5 representing the five different items.
		//	echo "$f </br>";
		
			if($f<2)
			{
				$m3 = "French Dip";
				$m4 = round(7.29*1.065,2);
				$mTax = round(7.29*.065,2);
				$m5 = ceil($m4)-$m4;
				$mikeTot = ceil($m4) + 1;
				echo "Mike got A $m3 </br>";
			    echo "It cost $$mikeTot after tax and tip. </br>";
				echo "Sally got an additional $$m5 </br>";
				
			}
			elseif($f<3)
			{
				$m3 = "Club Sandwich";
				$m4 = round(7.29*1.065,2);
				$mTax = round(7.29*.065,2);
				$m5 = ceil($m4)-$m4;
				$mikeTot = ceil($m4) + 1;
				echo "Mike got A $m3 </br>";
			    echo "It cost $$mikeTot after tax and tip. </br>";
				echo "Sally got an additional $$m5 </br>";
				
			}
			elseif($f<4)
			{
				$m3 = "Reuben Sandwich";
				$m4 = round(6.49*1.065,2);
				$mTax = round(6.49*.065,2);
				$m5 = ceil($m4)-$m4;
				$mikeTot = ceil($m4) + 1;
				echo "Mike got A $m3 </br>";
			    echo "It cost $$mikeTot after tax and tip. </br>";
				echo "Sally got an additional $$m5 </br>";
				
			}
			elseif($f<5)
			{
				$m3 = "Hamburger";
				$m4 = round(5.49*1.065,2);
				$mTax = round(5.49*.065,2);
				$m5 = ceil($m4)-$m4;
				$mikeTot = ceil($m4) + 1;
				echo "Mike got A $m3 </br>";
			    echo "It cost $$mikeTot after tax and tip. </br>";
				echo "Sally got an additional $$m5 </br>";
			}
			else
			{
				$m3 = "Bowl of Chili";
				$m4 = round(4.49*1.065,2);
				$mTax = round(4.49*.065,2);
				$m5 = ceil($m4)-$m4;
				$mikeTot = ceil($m4) + 1;
				echo "Mike got A $m3 </br>";
			    echo "It cost $$mikeTot after tax and tip. </br>";
				echo "Sally got an additional $$m5 </br>";
			}
	}
	else
	{
		echo "Mike did not attend. </br>";
	}
			
	echo " </br>";

// Bill is there 50% of the time

	$r=mt_rand(1,100);     			//Generate a random number between 1-100
	$chance=51;						//Set the chance
    if($r<$chance)    				//If a number below 51 is hit
	{		
			
			$t2 =1;					//Ted is there
			$b2 =1;					//Bill is there
			$total_people += 2;		//Add 2 to the total people count
			$f=mt_rand(1,5);   		//Generate a random number between 1 - 5 representing the five different items.
			//	echo "$f </br>";
		
			if($f<2)
			{
				$b3 = "French Dip";
				$b4 = round(7.29*1.065,2);
				$bTax = round(7.29*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				echo "Bill got A $b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				
			}
			elseif($f<3)
			{
				$b3 = "Club Sandwich";
				$b4 = round(7.29*1.065,2);
				$bTax = round(7.29*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				echo "Bill got A $b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				
			}
			elseif($f<4)
			{
				$b3 = "Reuben Sandwich";
				$b4 = round(6.49*1.065,2);
				$bTax = round(6.49*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				echo "Bill got A $b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				
			}
			elseif($f<5)
			{
				$b3 = "Hamburger";
				$b4 = round(5.49*1.065,2);
				$bTax = round(5.49*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				echo "Bill got A $b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
			}
			else
			{
				$b3 = "Bowl of Chili";
				$b4 = round(4.49*1.065,2);
				$bTax = round(4.49*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				echo "Bill got A $b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
			}
			
			echo " </br>";
			
	$f=mt_rand(1,5);   		//Generate a random number between 1 - 5 representing the five different items.
		//	echo "$f </br>";
		
			if($f<2)
			{
				$t3 = "French Dip";
				$t4 = round(7.29*1.065,2);
				$tTax = round(7.29*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "Ted got A $t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			elseif($f<3)
			{
				$t3 = "Club Sandwich";
				$t4 = round(7.29*1.065,2);
				$tTax = round(7.29*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "Ted got A $t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			elseif($f<4)
			{
				$t3 = "Reuben Sandwich";
				$t4 = round(6.49*1.065,2);
				$tTax = round(6.49*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "Ted got A $t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			elseif($f<5)
			{
				$t3 = "Hamburger";
				$t4 = round(5.49*1.065,2);
				$tTax = round(5.49*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "Ted got A $t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			else
			{
				$t3 = "Bowl of Chili";
				$t4 = round(4.49*1.065,2);
				$tTax = round(4.49*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "Ted got A $t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
	
	/*
	// Ted is there 50% of the time.
	
	else
	{

	$r=mt_rand(1,100);     			//Generate a random number between 1-100
	$chance=51;						//Set the chance
			if($r<$chance)    				//If a number below 51 is hit
			{		
			$t2 =1;
			$b2 =1;
			$total_people += 2;
			$f=mt_rand(1,5);   		//Generate a random number between 1 - 5 representing the five different items.
			//	echo "$f </br>";
		
			if($f<2)
			{
				$b3 = "Bill Got A French Dip";
				$b4 = round(7.29*1.065,2);
				$bTax = round(7.29*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				$tip += 1;
				echo "$b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				echo " </br>";
			}
			elseif($f<3)
			{
				$b3 = "Bill Got A Hamburger";
				$b4 = round(5.49*1.065,2);
				$bTax = round(5.49*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				$tip += 1;
				echo "$b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				echo " </br>";
			}
			elseif($f<4)
			{
				$b3 = "Bill Got A Reuben Sandwich";
				$b4 = round(6.49*1.065,2);
				$bTax = round(6.49*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				$tip += 1;
				echo "$b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				echo " </br>";
			}
			elseif($f<5)
			{
				$b3 = "Bill Got A Club Sandwich";
				$b4 = round(7.29*1.065,2);
				$bTax = round(7.29*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				$tip += 1;
				echo "$b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				echo " </br>";
			}
			else
			{
				$b3 = "Bill Got A Bowl of Chili";
				$b4 = round(4.49*1.065,2);
				$bTax = round(4.49*.065,2);
				$b5 = ceil($b4)-$b4;
				$billTot = ceil($b4) + 1;
				$tip += 1;
				echo "$b3 </br>";
			    echo "It cost $$billTot after tax and tip. </br>";
				echo "Sally got an additional $$b5 </br>";
				echo " </br>";
			}
	$f=mt_rand(1,5);   		//Generate a random number between 1 - 5 representing the five different items.
		//	echo "$f </br>";
		
			if($f<2)
			{
				$t3 = "Ted Got A French Dip";
				$t4 = round(7.29*1.065,2);
				$tTax = round(7.29*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "$t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			elseif($f<3)
			{
				$t3 = "Ted Got A Hamburger";
				$t4 = round(5.49*1.065,2);
				$tTax = round(5.49*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "$t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			elseif($f<4)
			{
				$t3 = "Ted Got A Reuben Sandwich";
				$t4 = round(6.49*1.065,2);
				$tTax = round(6.49*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "$t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			elseif($f<5)
			{
				$t3 = "Ted Got A Club Sandwich";
				$t4 = round(7.29*1.065,2);
				$tTax = round(7.29*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "$t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
			else
			{
				$t3 = "Ted Got A Bowl of Chili";
				$t4 = round(4.49*1.065,2);
				$tTax = round(4.49*.065,2);
				$t5 = ceil($t4)-$t4;
				$tedTot = ceil($t4) + 2;
				$tip += 2;
				echo "$t3 </br>";
			    echo "It cost $$tedTot after tax and tip. </br>";
				echo "Sally got an additional $$t5 </br>";
				echo " </br>";
			}
	*/
	}
	else
	{
		echo "Bill and Ted did not attend. </br>";
		echo " </br>";
	}
	
	echo"The order of the costs of the meal is displayed below in descending order: </br>";
	echo" </br>";
	
	if ($l3=="French Dip")
	{
		echo "$l1 ordered $l3 and it cost $$l4 after tax. </br>";
	}
	if ($l3=="Club Sandwich")
	{
		echo "$l1 ordered $l3 and it cost $$l4 after tax. </br>";
	}
	if ($s3=="French Dip")
	{
		echo "$s1 ordered $s3 and it cost $$s4 after tax. </br>";
	}
	if ($s3=="Club Sandwich")
	{
		echo "$s1 ordered $s3 and it cost $$s4 after tax. </br>";
	}
	if ($m3=="French Dip")
	{
		echo "$m1 ordered $m3 and it cost $$m4 after tax. </br>";
	}
	if ($m3=="Club Sandwich")
	{
		echo "$m1 ordered $m3 and it cost $$m4 after tax. </br>";
	}
	if ($b3=="French Dip")
	{
		echo "$b1 ordered $b3 and it cost $$b4 after tax. </br>";
	}
	if ($b3=="Club Sandwich")
	{
		echo "$b1 ordered $b3 and it cost $$b4 after tax. </br>";
	}
	if ($t3=="French Dip")
	{
		echo "$t1 ordered $t3 and it cost $$t4 after tax. </br>";
	}
	if ($t3=="Club Sandwich")
	{
		echo "$t1 ordered $t3 and it cost $$t4 after tax. </br>";
	}
	if ($l3=="Reuben Sandwich")
	{
		echo "$l1 ordered $l3 and it cost $$l4 after tax. </br>";
	}
	if ($s3=="Reuben Sandwich")
	{
		echo "$s1 ordered $s3 and it cost $$s4 after tax. </br>";
	}
	if ($m3=="Reuben Sandwich")
	{
		echo "$m1 ordered $m3 and it cost $$m4 after tax. </br>";
	}
	if ($b3=="Reuben Sandwich")
	{
		echo "$b1 ordered $b3 and it cost $$b4 after tax. </br>";
	}
	if ($t3=="Reuben Sandwich")
	{
		echo "$t1 ordered $t3 and it cost $$t4 after tax. </br>";
	}
	if ($l3=="Hamburger")
	{
		echo "$l1 ordered $l3 and it cost $$l4 after tax. </br>";
	}
	if ($s3=="Hamburger")
	{
		echo "$s1 ordered $s3 and it cost $$s4 after tax. </br>";
	}
	if ($m3=="Hamburger")
	{
		echo "$m1 ordered $m3 and it cost $$m4 after tax. </br>";
	}
	if ($b3=="Hamburger")
	{
		echo "$b1 ordered $b3 and it cost $$b4 after tax. </br>";
	}
	if ($t3=="Hamburger")
	{
		echo "$t1 ordered $t3 and it cost $$t4 after tax. </br>";
	}
	if ($l3=="Bowl of Chili")
	{
		echo "$l1 ordered $l3 and it cost $$l4 after tax. </br>";
	}
	if ($s3=="Bowl of Chili")
	{
		echo "$s1 ordered $s3 and it cost $$s4 after tax. </br>";
	}
	if ($m3=="Bowl of Chili")
	{
		echo "$m1 ordered $m3 and it cost $$m4 after tax. </br>";
	}
	if ($b3=="Bowl of Chili")
	{
		echo "$b1 ordered $b3 and it cost $$b4 after tax. </br>";
	}
	if ($t3=="Bowl of Chili")
	{
		echo "$t1 ordered $t3 and it cost $$t4 after tax. </br>";
	}
	
	echo " </br>";
	$gTot = $louTot + $mikeTot + $samTot + $billTot + $tedTot;
	
	
	$tipTot = $tip +$t5+$s5+$b5+$l5+$m5;
	$cost = $s4+$l4+$m4+$b4+$t4;
	$avgCost = round($cost/$total_people,2);
	$tipped = round($gTot/$total_people);
	$taxTot = $tTax+$bTax+$mTax+$lTax+$sTax;
	echo "The total paid in taxes is $$taxTot.</br>";
	echo "The total cost of all meals after tax before tip: $$cost. </br>";
	echo "The Grand Total is $$gTot after tips have been added. </br>";
	// echo "The amount everyone owes equally after counting tip: $$tipped. </br>";
	echo "The average cost before tip is $$avgCost. </br>";
	echo "Sally got $$tipTot in tips. </br>";
	 if ($tipTot == 2.37)
 {
	 echo "Heeeeeerrrrrreeeeeessssss Johnny! </br>";
 }
	echo " </br>";
	
	
 if ($s2+$b2+$t2+$l2+$m2==5)
 {
	 echo "A portal appears in the ground and from it sprouts forth what looks to be a futuristic telephone booth.</br>";  
	 echo "Before you can muster a cohesive thought, a man steps out.  He looks like he is from the future, he has sunglasses and grey, slicked back hair. </br>";
	 echo " He steps out of his phone booth and looks at the five men gathered and says </br>";
	 echo "'Listen, the fact that you are gathered here today is indeed very special, but it is not extra credit worthy.'</br>";
     echo "Roll a D6 for emotional damage </br>";
	 echo " </br>";
	 
	$dmg=mt_rand(1,6);
	if ($dmg<2)
	{
		echo "You rolled a $dmg. </br>";
		echo "A grazing blow to your ego, you should recover. </br>";
	}
	elseif($dmg<3)
	{
		echo "You rolled a $dmg. </br>";
		echo "An uncomfortable revalation overwhelms you. </br>";
	}
	elseif($dmg<4)
	{
		echo "You rolled a $dmg. </br>";
		echo "You had better start taking this seriously. </br>";
	}
	elseif($dmg<5)
	{
		echo "You rolled a $dmg. </br>";
		echo "This class is getting difficult. </br>";
	}
	elseif($dmg<6)
	{
		echo "You rolled a $dmg. </br>";
		echo "I need to study 20 hours a day. </br>";
	}
	else
	{
		echo "You rolled a $dmg. </br>";
		echo "Emotional damage maximal. Make a new character. </br>";
	}
 }
 
/*
 
$today= new DateTime();

$tempstring = $today ->format('Y-m-d H:i:s');

echo "Date: $tempstring </br>";
 
 */
	
 ?>
 
