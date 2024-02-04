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
Everyone orders one of the same five things.

**Menu Items:**
French Dip - $7.29
Hamburger - $5.49
Reuben Sandwich - $6.49
Club Sandwich - $7.29
Bowl of Chili - $4.49

Tip - $1.00
They round up for each meal for additional tip.
If Ted is present, he Tips Sally an additional $1.00

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
Name - What ordered - cost

Hey Jim,

Here is my lazy version of the project. I plan on writing the sorting code you have given us, just because I think it is extremely useful and I want to know how to do it.
If my work is not satisfactory, I will submit it with the correct sorting mechanism. Really enjoying class so far!
*/

/* Declarations */
$l1 = "Lou";
$l2 = 1;
$l3 = "";
$l4 = 0;
$l5 = 0;
$l6 = 0;

$s1 = "Sam";
$s2 = 0;
$s3 = "";
$s4 = 0;
$s5 = 0;
$s6 = 0;

$m1 = "Mike";
$m2 = 0;
$m3 = "";
$m4 = 0;
$m5 = 0;
$m6 = 0;

$b1 = "Bill";
$b2 = 0;
$b3 = "";
$b4 = 0;
$b5 = 0;
$b6 = 0;

$t1 = "Ted";
$t2 = 0;
$t3 = "";
$t4 = 0;
$t5 = 0;
$t6 = 0;

$tax = 1.065;
$billTot = 0;
$louTot = 0;
$mikeTot = 0;
$samTot = 0;
$tedTot = 0;
$bTax = 0;
$lTax = 0;
$mTax = 0;
$sTax = 0;
$tTax = 0;

/* Randomize process */
/* Lou */
$total_people = 1;
$tip = "1";
$f = mt_rand(1, 5);

if ($f < 2) {
    $l3 = "French Dip";
    $l4 = round(7.29 * 1.065, 2);
    $lTax = round(7.29 * 0.065, 2);
    $l5 = ceil($l4) - $l4;
    $louTot = ceil($l4) + 1;
    echo "Lou got A $l3 </br>";
    echo "It cost $$louTot after tax and tip. </br>";
    echo "Sally got an additional $$l5 </br>";
} elseif ($f < 3) {
    $l3 = "Club Sandwich";
    $l4 = round(7.29 * 1.065, 2);
    $lTax = round(7.29 * 0.065, 2);
    $l5 = ceil($l4) - $l4;
    $louTot = ceil($l4) + 1;
    echo "Lou got A $l3 </br>";
    echo "It cost $$louTot after tax and tip. </br>";
    echo "Sally got an additional $$l5 </br>";
} elseif ($f < 4) {
    $l3 = "Reuben Sandwich";
    $l4 = round(6.49 * 1.065, 2);
    $lTax = round(6.49 * 0.065, 2);
    $l5 = ceil($l4) - $l4;
    $louTot = ceil($l4) + 1;
    echo "Lou got A $l3 </br>";
