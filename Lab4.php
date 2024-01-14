<?php
 /* LAB 4
 PHP
 
 LOU'S LUNCH
 
 **NARRATIVE:** using functions and arrays
 
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

 */
 
	 
  /* Calculations*/
   
	
	/*main*/
    $guys=array(
			array(0,0,0,0,0,0),
			array("Lou",1,100,0,5.49,0),
	        array("Sam",0,80,0,5.29,0),
			array("Mike",0,70,0,6.29,0),
			array("Bill",0,50,0,0,0),			
			array("Ted",0,0,0,0,0),
			array("French Dip","Hamburger","Reuben Sandwich","Club Sandwich","Bowl of Chili"),  //$food
			array(7.29,5.49,6.49,7.29,4.49),  //$cost
			array(0,0), // 
			array(0,0,0,0,0,0), //Price
			array(0,0,0,0,0,0), //Person
			array(0,0,0,0,0,0)
				);
	/*
	Variable dictionary
	[0] = name
	[1] = present
	[2] = chance of presence
	[3]= what they ordered
	[4]= cost of order
	[5] = order of cost
	
	  
	*/
function who_is_present($guys)
	{
		for ($j=1;$j<6;$j++)
		{
			$num=mt_rand(1,100);
		if ($num<=$guys[$j][2])
		{
			if ($j==4)
			{
				$guys[$j][1]=1; $guys[5][1]=1;
				echo "Customer : ".$guys[$j][0]." and ".$guys[5][0]." are both Present! </br>";
			}
			else
			{
				$guys[$j][1]=1;
				echo "Customer : ".$guys[$j][0]." is Present! </br>";
			}
		}
		}
		return $guys;
	}


function what_is_ordered($guys) //need to use for loop
	{
		$taxtot=0; // represents total taxes
		$ordertot=0; // represents the total of the order
		for ($k=1;$k<6;$k++)  // For instances where $k=1 and $k<6 add one to $k.
		{
			if ($guys[$k][1]==0) //if the array element is empty the person did not attend
			{
				echo " ".$guys[$k][0]." did not attend. </br>"; // echo statement did not attend
			}
			else
			{
		$ordnum=mt_rand(0,4); // Roll a number 0-4 to determine what was ordered
		$guys[0][$k]=$guys[7][$ordnum]; //The $k array inside $guys 3rd element (What they ordered) becomes the number associated with the random number.
		echo "".$guys[$k][0]." ordered ".$guys[6][$ordnum].", and it cost ".$guys[7][$ordnum]." </br>";		//Echo who ordered what, and how much it cost.
		$guys[9][$k]=$guys[7][$ordnum]; //Copy the price to array 9
		$guys[10][$k]= $guys[$k][0];    //Copy the person to array 10
		
		$ordertot +=  $guys[7][$ordnum]; // Add the total of the meal to the order
		    } //end else
		}  // end for
		$taxtot = round($ordertot * 1.065,2);  //The total of the order after taxes is the price times 1.065, rounded to the second decimal
		$guys[8][1]=$taxtot; //store the total with taxes in the described array element.
		echo "The total bill after tax is ".$guys[8][1]." </br>";//echo total bill
	return $guys;	
	}

function tip_calculation($guys)
	{
		$tiptot =0;
		for ($m=1;$m<6;$m++)
		{	
			
			if ($guys[$m][1]==0)
			{
				echo " ".$guys[$m][0]." did not attend. </br>";
			}
			
			elseif ($guys[$m][0]=='Ted')
			{
			$guys[0][$m]=(ceil($guys[0][$m])-$guys[0][$m])+2; //The $m element of the $tip array becomes the extra change plus 1
			echo"".$guys[$m][0]." tipped ".$guys[0][$m]." </br>"; //States who tipped how much.
			$tiptot = $tiptot + $guys[0][$m];
			}
		
			else //Everyone else but Ted
			{
			$guys[0][$m]=(ceil($guys[0][$m])-$guys[0][$m])+1; //The $m element of the $tip array becomes the extra change plus 1
			echo"".$guys[$m][0]." tipped ".$guys[0][$m]." </br>"; //States who tipped how much.
			$tiptot = $tiptot + $guys[0][$m];
			}	
	$guys[8][0] = $tiptot;	
	
	}
	echo "The total of all tips is ".$guys[8][0]." </br>";
	return $guys;
	}
    	// var_dump ($guys);	 //Variable dump 
function order_total($guys)
{
	$ordtot=0;
	$taxtot=0;
	for ($p=1;$p<7;$p++)
	{
		$ordtot = $ordtot + $guys[0][$p];
	}
	
	$taxtot = $ordtot * 1.065;
	$guys[8][1] = $taxtot;
	echo "The total of the order after tax is ".$guys[8][1]."  </br>";
	return $guys;
}

function sort_guys($guys)
{
	$guys[11]=array_combine($guys[10],$guys[9]);
	//array_multisort($guys[11],SORT_DESC);
	arsort($guys[11]);
	print_r($guys[11]);
	return $guys;
}




	
    $guys=who_is_present($guys);
	$guys=what_is_ordered($guys);
	$guys=tip_calculation($guys);
	$guys=sort_guys($guys);
	//$guys=order_total($guys);
	
   
 ?>
 
 