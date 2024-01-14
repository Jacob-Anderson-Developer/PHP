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
    $guys=array(                  //$guys defined as an array
	
			//Within the array are the following sub arrays//
			
			array(0,0,0,0,0,0),           //0 Holds the price of what each person ordered
			array("Lou",1,100,0,5.49,0),  //1 Lous array
	        array("Sam",0,80,0,5.29,0),   //2 Sams
			array("Mike",0,70,0,6.29,0),  //3 Mike
			array("Bill",0,50,0,0,0),	  //4 Bill	
			array("Ted",0,0,0,0,0),       //5 Ted
			array("French Dip","Hamburger","Reuben Sandwich","Club Sandwich","Bowl of Chili"),  //6 $food
			array(7.29,5.49,6.49,7.29,4.49),  //7 $cost
			array(0,0),                   //8 element 0 is the total of all tips and element 1 is the total of the order after tax
			array(0,0,0,0,0,0),           //9  price
			array(0,0,0,0,0,0),           //10 name
			array(0,0,0,0,0,0)            //11 combined price and name into one array
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
function who_is_present($guys) // Define a function call it who is present
	{
		for ($j=1;$j<6;$j++) // $j1 is defined as 1, do while $j<6, add one to $j AKA
		// for ($j=1; <--Initialize the loop counter value.  $j<6;<--test counter: 
		// Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
		// $j++ Add one to the counter)
		{
			$num=mt_rand(1,100); //$num is a random number 1-100
		if ($num<=$guys[$j][2])  //If $num is less than the second element in the $j array
		{
			if ($j==4)           //If the person being referenced is Bill
			{
				$guys[$j][1]=1; $guys[5][1]=1;  // The array that stores the Ted variable  becomes 1 which means true
				echo "Customer : ".$guys[$j][0]." and ".$guys[5][0]." are both Present! </br>"; //echo Bill and Ted are present
			}
			else
			{
				$guys[$j][1]=1; //For everyone else
				echo "Customer : ".$guys[$j][0]." is Present! </br>"; // echo who is present
			}
		}
		}
		return $guys;  // return the results of $guys
	}


function what_is_ordered($guys) //need to use for loop
	{
		$taxtot=0; //Order total with tax
		$ordertot=0; // Order total without tax
		for ($k=1;$k<6;$k++)  // For instances where $k=1 and $k<6 add one to $k.
		{
			if ($guys[$k][1]==0) //Check the element that shows whether they are present
			{
				echo " ".$guys[$k][0]." did not attend. </br>"; //
			}
			else
			{
		$ordnum=mt_rand(0,4); //Randomize order number.
		$guys[0][$k]=$guys[7][$ordnum]; //The $k array inside $guys 3rd element (What they ordered) becomes the number associated with the random number.
		echo "".$guys[$k][0]." ordered ".$guys[6][$ordnum].", and it cost ".$guys[7][$ordnum]." </br>";		//Echo who ordered what, and how much it cost.
		$guys[9][$k]=$guys[7][$ordnum]; //Copy the price to array 9
		$guys[10][$k]= $guys[$k][0];    //Copy the person to array 10
		
		$ordertot +=  $guys[7][$ordnum]; // Order Total Additon
		    }
		}
		$taxtot = round($ordertot * 1.065,2); // Taxed total is order total with 6.5% tax
		$guys[8][1]=$taxtot;
		echo "The total bill after tax is ".$guys[8][1]." </br>";
	return $guys;	
	}

function tip_calculation($guys)
	{
		$tiptot =0; // Define the tip total
		for ($m=1;$m<6;$m++) // Begin For loop
		{	
			
			if ($guys[$m][1]==0) // Check availability element
			{
				echo " ".$guys[$m][0]." did not attend. </br>"; //
			}
			
			elseif ($guys[$m][0]=='Ted') // Check to see if the person paying is ted
			{
			$guys[0][$m]=(ceil($guys[0][$m])-$guys[0][$m])+2; //The $m element of the $tip array becomes the extra change plus 1
			//$guys[0][$m]  = (ceil($guys[0][$m]) -- $guys[0][$m] is the number in $guys[0][$m] rounded to the nearest one hundredth
			//-$guys[0][$m])+2;
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
	$guys[11]=array_combine($guys[10],$guys[9]); // Combine the price and person arrays
	//array_multisort($guys[11],SORT_DESC);
	arsort($guys[11]); // Sort numerically based on price
	print_r($guys[11]); // Print newly combined array
	return $guys; // return the results to the sort_guys function
}




	
    $guys=who_is_present($guys);
	$guys=what_is_ordered($guys);
	$guys=tip_calculation($guys);
	$guys=sort_guys($guys);
	//$guys=order_total($guys);
	
   
 ?>
 
 