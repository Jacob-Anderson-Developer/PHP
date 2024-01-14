<?php
 /* LAB 3
 Jacob Anderson	
 PHP
 Intro to functions
 Working with strings Conditionals and concatenation  
 Filename: localhost/sandbox267/Lab3.PHP
  
  We are a creating a trouble ticket system for a large appartment complex.
  We receive an email or phone call from a tennat and we want to immediately
  generate a reply.
  
  Our goal is to create a system that makes the tennant think that they are receiving
  a human/personalized response.
  
  We have two pieces of information.
	1. Their name. $tennant_fname $tennant_lname
	2. Their appartment number $apt
	3. Their pet name $petname or a "0" if there is no pet $petname and $pettype a string for type of pet
	such as"Dog", "Cat", or specific breed such as "Spaniel" or "Russian Blue".
	4. The manager or assistant manager name $manager  
  
   */
 
 /* Function reply -- this is the basis of our assignment *******************/
 function reply($tennant_fname,$tennant_lname,$apt,$petname,$pettype,$manager) {
	 /*Generate a random reply that makes sense and uses the name of the user*/
	  $results="";
      $opener=array(		 "Hi $tennant_fname, thanks for the email!</br></br>",
							 "Hi there $tennant_fname, thanks for reaching out.</br></br>",
							 "Howdy $tennant_fname, I appreciate the email.</br></br>",
							 "Nice to be communicating with you $tennant_fname, I think we can help.</br></br>");
							 
	  $outreach=array(		 "Our technician looks forward to meeting with the $tennant_lname family, and will be reaching out shortly.</br>",
							 "Our technician will be reaching out to fix things up at the $tennant_lname family home.</br>",
							 "Moving forward, we will have our technician reach out to the $tennant_lname family and get you on the books.</br>",
							 "Sometime today our technician will reach out and get you on the books for a a time that works best for the $tennant_lname family.</br>",
							 "I have got one of my guys on it, and they will call you in the near future to discuss possible appointments for the $tennant_lname family household. </br>",
							 "I will have one of our technicians get in contact with you and they will set up an appointment to fix the $tennant_lname family household.</br>");
							 
	  $petclose=array(		 "</br> Is $petname going to be around?  Our technician enjoys the personality of a $pettype!</br></br>",
							 "</br> Hope $petname is doing well.  What a great $pettype!</br></br>",
							 "</br> I haven't seen a $pettype in a while, how is $petname?</br></br>");
							 
	  $managerclose=array(	 "Best Wishes, </br></br>", 
							 "Best Regards, </br></br>",
							 "Regards, </br></br>",
							 "Sincerely, </br></br>");
	  $name= "Monica";						 
							 
					
	  $r1=mt_rand(0,3);  //Roll a number 0-2				
	  $r2=mt_rand(0,5);  //Roll a number 1-6
	  $r3=mt_rand(0,2);  //Roll a number 0-2
	  $r4=mt_rand(0,3);  //Roll a number 0-4
	 
	 if ($petname<>"0")
	  {
	  $results = $opener[$r1]." ".$outreach[$r2]." ".$petclose[$r3]." ".$managerclose[$r4]." ".$name;
	  }
	  else	
	  {
      $results = $opener[$r1]." ".$outreach[$r2]." ".$managerclose[$r4]." ".$name;	
	  }
 return $results;
 
 }


 /******************************************/
 /*******************Main******************/
 /******************************************/
 
/*Declarations.. where we obtain from the database or through input the variables
we use below*/ 
	$tennant_fname="Bob";
	$tennant_lname="Spivik";
	$apt=403;
	$petname="Alfred";$pettype="collie";
	$manager="Monica";
/* call the functions and execute the routine*/ 
echo"**************************************** </br>";

$reply=reply($tennant_fname,$tennant_lname,$apt,$petname,$pettype,$manager);
echo "$reply </br>"; 
  
 ?>
 
 
 