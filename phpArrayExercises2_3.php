
<?php
$arr = array(25, 47, 42, 56, 32);
$oddArray = array();
$evenArray = array();
echo "5 Elements in the array: \n";
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "<br>The Even elements are : <br>";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "<br>The Odd elements are :<br>";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>
