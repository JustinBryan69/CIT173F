/******************************************************************************

                            Online C# Compiler.
                Code, Compile, Run and Debug C# program online.
Write your code in this editor and press "Run" button to execute it.

*******************************************************************************/

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercises Part 2</title>
</head>
<body>
<?php
echo "Input 3 elements in the array:<br>";
$arrayelem=array(5, 1, 1);

    $arrLength=count($arrayelem);
    $Count=array();
  for($i=0;$i<$arrLength;$i++)
    {
       $key=$arrayelem[$i];
       
       print("element - "."".$i.""." : "."[".$key."]<br>");

   }
 
   echo "Total number of duplicate elements found in the array is : $key";
?>
	