<?php
/* LAB 5
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
Everyone orders one of the same five things.

**Menu Items:**
French Dip - $7.29
Hamburger - $5.49
Reuben Sandwich - $6.49
Club Sandwich - $7.29
Bowl of Chili - $4.49

Tip - $1.00
They round up for each meal for an additional tip.
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

/* Calculations */

/* main */
$guys = [
    [0, 0, 0, 0, 0, 0],          // 0 Holds the price of what each person ordered
    ["Lou", 1, 100, 0, 5.49, 0],  // 1 Lous array
    ["Sam", 0, 80, 0, 5.29, 0],   // 2 Sams
    ["Mike", 0, 70, 0, 6.29, 0],  // 3 Mike
    ["Bill", 0, 50, 0, 0, 0],      // 4 Bill
    ["Ted", 0, 0, 0, 0, 0],        // 5 Ted
    ["French Dip", "Hamburger", "Reuben Sandwich", "Club Sandwich", "Bowl of Chili"],  // 6 $food
    [7.29, 5.49, 6.49, 7.29, 4.49],  // 7 $cost
    [0, 0],                    // 8 element 0 is the total of all tips and element 1 is the total of the order after tax
    [0, 0, 0, 0, 0, 0],         // 9 price
    [0, 0, 0, 0, 0, 0],         // 10 name
    [0, 0, 0, 0, 0, 0]          // 11 combined price and name into one array
];

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
    for ($j = 1; $j < 6; $j++) {
        $num = mt_rand(1, 100);
        if ($num <= $guys[$j][2]) {
            if ($j == 4) {
                $guys[$j][1] = 1;
                $guys[5][1] = 1;
                echo "Customer: " . $guys[$j][0] . " and " . $guys[5][0] . " are both Present! </br>";
            } else {
                $guys[$j][1] = 1;
                echo "Customer: " . $guys[$j][0] . " is Present! </br>";
            }
        }
    }
    return $guys;
}

function what_is_ordered($guys)
{
    $taxtot = 0;
    $ordertot = 0;
    for ($k = 1; $k < 6; $k++) {
        if ($guys[$k][1] == 0) {
            echo " " . $guys[$k][0] . " did not attend. </br>";
        } else {
            $ordnum = mt_rand(0, 4);
            $guys[0][$k] = $guys[7][$ordnum];
            echo "" . $guys[$k][0] . " ordered " . $guys[6][$ordnum] . ", and it cost " . $guys[7][$ordnum] . " </br>";
            $guys[9][$k] = $guys[7][$ordnum];
            $guys[10][$k] = $guys[$k][0];
            $ordertot += $guys[7][$ordnum];
        }
    }
    $taxtot = round($ordertot * 1.065, 2);
    $guys[8][1] = $taxtot;
    echo "The total bill after tax is " . $guys[8][1] . " </br>";
    return $guys;
}

function tip_calculation($guys)
{
    $tiptot = 0;
    for ($m = 1; $m < 6; $m++) {
        if ($guys[$m][1] == 0) {
            echo " " . $guys[$m][0] . " did not attend. </br>";
        } elseif ($guys[$m][0] == 'Ted') {
            $guys[0][$m] = (ceil($guys[0][$m]) - $guys[0][$m]) + 2;
            echo "" . $guys[$m][0] . " tipped " . $guys[0][$m] . " </br>";
            $tiptot = $tiptot + $guys[0][$m];
        } else {
            $guys[0][$m] = (ceil($guys[0][$m]) - $guys[0][$m]) + 1;
            echo "" . $guys[$m][0] . " tipped " . $guys[0][$m] . " </br>";
            $tiptot = $tiptot + $guys[0][$m];
        }
    }
    $guys[8][0] = $tiptot;
    echo "The total of all tips is " . $guys[8][0] . " </br>";
    return $guys;
}

function sort_guys($guys)
{
    $guys[11] = array_combine($guys[10], $guys[9]);
    arsort($guys[11]);
    print_r($guys[11]);
    return $guys;
}

$guys = who_is_present($guys);
$guys = what_is_ordered($guys);
$guys = tip_calculation($guys);
$guys = sort_guys($guys);
?>
