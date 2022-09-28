<?php

echo "<br> ===================== Array Exercise 1 ==================== " . "<br><br>";
 $weather=array(" rain", " sunshine "," clouds ", " hail ", " sleet"," snow ", " wind");
?>
 	<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>weather outlook</title>
 	</head>
 	<body>
<h1 style="color: teal; font-weight: bold">Weather Forecast</h1> 
<?php echo "We've seen all kinds of weather this month. At the beginning of the month,we had$weather[5]and$weather[6]. Then came$weather[1]with a few$weather[2]and some$weather[0]. At least we didn't get any$weather[3]or$weather[4].";  ?>
 </body>
 	</html>